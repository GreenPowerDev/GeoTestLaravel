<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Province;
use App\Models\Ganre;
use App\Models\Notice;

class WelcomeController extends Controller
{
    //
    public function index(){
        $provinces = Province::take(4)->get();
        $ganres = Ganre::get();
        $notices = Notice::get();
        return view('welcome', ['provinces'=>$provinces, 'ganres'=>$ganres, 'notices'=>$notices] );
    }
}
