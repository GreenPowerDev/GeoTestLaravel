<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Province;
use App\Models\Ganre;
use App\Models\Notice;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $provinces = Province::take(4)->get();
        $ganres = Ganre::all();
        
        $currentTime = new Carbon();
        $currentTime->setTimezone('Asia/Tokyo'); 
        
        $notices = Notice::where('notice_date', '<=', $currentTime)
                        ->orderByDesc('notice_date')
                        ->get();
        return view('welcome', ['provinces'=>$provinces, 'ganres'=>$ganres, 'notices'=>$notices]);
    }
}
