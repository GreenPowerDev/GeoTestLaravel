<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Province;

class WelcomeController extends Controller
{
    //
    public function index(){
        $provinces = Province::all();
        return view('welcome', ['provinces'=>$provinces]);
    }
}
