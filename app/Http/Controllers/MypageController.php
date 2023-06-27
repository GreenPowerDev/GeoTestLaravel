<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test2user;
use App\Models\Test;
use App\Models\Test2problem;
use Illuminate\Support\Facades\Auth;


class MypageController extends Controller
{
    //
    public function test_login_form($id){
        return view('test_site_login',['id'=>$id]);
    }

    public function test_login(Request $request){
        $test2user = Test2user::find($request->allowed_test_id);
        $origin_id = $test2user->allowed->test_pass_id;
        $origin_pwd = $test2user->allowed->test_pass_pwd;
        if($origin_id === $request->test_pass_id && $origin_pwd === $request->test_pass_pwd){
            return $this->go_test_site($request->allowed_test_id);
        }
        else {
            return view('test_site_login',['id'=>$request->allowed_test_id]);
        }
    }

    public function go_test_site($tp_id){
        $test2user = Test2user::find($tp_id);
        $province = $test2user->test->province;
        $test = $test2user->test;
        return view('test_site', ['province'=>$province, 'test'=>$test]);
    }

    public function test_enter(Request $request){
        $user_id = Auth::user()->id;
        $test_id = $request->test_id;
        $test = Test::find($test_id);
        $problem_ids = Test2problem::where('test_id', $test_id)->get();
        return view('test_process',[
            'user_id'=>$user_id,
            'test'=>$test,
            'problem_ids'=>$problem_ids
        ]);
    }
}
