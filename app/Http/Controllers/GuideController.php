<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuideController extends Controller
{
    //
    public function notice(){
        return view('notice');
    }

    public function about_site(){
        return view('about_site');
    }
    public function area(){
        return view('area');
    }
    public function my_page(){
        return view('my_page');
    }
    public function method(){
        return view('method');
    }
}
