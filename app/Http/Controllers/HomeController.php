<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Province;
use App\Models\Ganre;
use App\Models\Notice;

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
        $notices = Notice::all();
        return view('welcome', ['provinces'=>$provinces, 'ganres'=>$ganres, 'notices'=>$notices]);
    }
}
