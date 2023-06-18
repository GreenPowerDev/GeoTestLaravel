<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Province;

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
        return view('welcome', ['provinces'=>$provinces]);
    }
}
