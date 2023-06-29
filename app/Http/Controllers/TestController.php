<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;
use Illuminate\Support\Facades\Auth;


class TestController extends Controller
{
    public function apply_test($id){
        if(!Auth::check()) return redirect()->route('_login');
        
        $test = Test::find($id);
        return view('application', ['test'=>$test]);
    }
}
