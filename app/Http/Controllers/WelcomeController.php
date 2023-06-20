<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Province;
use App\Models\Ganre;

class WelcomeController extends Controller
{
    //
    public function index(){
        $provinces = Province::take(4)->get();
        $ganres = Ganre::get();
        return view('welcome', ['provinces'=>$provinces, 'ganres'=>$ganres]);
    }
}
