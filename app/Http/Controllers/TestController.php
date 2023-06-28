<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;

class TestController extends Controller
{
    public function apply_test($id){
        if(!Auth::check()) return redirect()->route('_login');
        
        $test = Test::find($id);
        return view('application', ['test'=>$test]);
    }
}
