<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test2user;
use App\Models\Reservation;
use Illuminate\Support\Facades\Auth;

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

        if(!Auth::check()) return redirect()->route('_login');
        $test2users = Test2user::where('user_id', Auth::user()->id)->get();

        $reserved_tests = [];
        foreach($test2users as $test2user){
            //dd($test2user->allowed_id);
            if($test2user->allowed_id !== 0 && $test2user->mail_sended === 1){
                array_push($reserved_tests, $test2user);
            }
            else{
                //if($test2user->allowed_id)
            }
        }

        return view('my_page', ['reserved_tests'=>$reserved_tests]);
    }
    public function method(){
        return view('method');
    }
}
