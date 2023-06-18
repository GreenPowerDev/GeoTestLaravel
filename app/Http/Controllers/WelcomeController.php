<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Province;

class WelcomeController extends Controller
{
    //
    public function index(){
        $provinces = Province::take(4)->get();
        return view('welcome', ['provinces'=>$provinces]);
    }
}
