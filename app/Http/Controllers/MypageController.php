<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MypageController extends Controller
{
    //
    public function test_login_form($id){
        return view('test_site_login');
    }
}
