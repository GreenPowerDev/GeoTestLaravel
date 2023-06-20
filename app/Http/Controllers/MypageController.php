<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test2user;

class MypageController extends Controller
{
    //
    public function test_login_form($id){
        return view('test_site_login',['id'=>$id]);
    }

    public function test_login(Request $request){
        $test2user = Test2user::find($request->allowed_test_id);
        $origin_id = $test2user->allowed()->first()->test_pass_id;
        $origin_pwd = $test2user->allowed()->first()->test_pass_pwd;
        if($origin_id === $request->test_pass_id && $origin_pwd === $request->test_pass_pwd){
            return $this->go_test_site($request->allowed_test_id);
        }
        else {
            return view('test_site_login',['id'=>$request->allowed_test_id]);
        }
    }

    public function go_test_site($tp_id){
        $test2user = Test2user::find($tp_id);
        $province = $test2user->test()->first()->province()->first();
        $test = $test2user->test()->first();
        //dd($province);
        return view('test_site', ['province'=>$province, 'test'=>$test]);
    }
}
