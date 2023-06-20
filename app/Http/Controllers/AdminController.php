<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Test2user;
use App\Models\Reservation;
use App\Models\Allowed;
use Mail;
use App\Mail\AllowedMail;

class AdminController extends Controller
{
    //
    public function index(){
        if(!Auth::check()) return redirect()->route('_login');
        if(Auth::user()->user_role != 1) return redirect()->route('home');
        return view('admin.index');
    }

    public function reserve_accept(){
        if(!Auth::check()) return redirect()->route('_login');
        if(Auth::user()->user_role != 1) return redirect()->route('home');

        $test2users = Test2user::all();
        //dd($test2users[0]->reservation->user()->id);
        return view('admin.reservation', ['test2users'=>$test2users]);
    }

    public function reserve_delete($id){
        if(!Auth::check()) return redirect()->route('_login');
        if(Auth::user()->user_role != 1) return redirect()->route('home');

        Reservation::where('id',$id)->delete();
        $test2users = Test2user::all();
        return view('admin.reservation', ['test2users'=>$test2users]);
    }

    public function reserve_agree($id){
        if(!Auth::check()) return redirect()->route('_login');
        if(Auth::user()->user_role != 1) return redirect()->route('home');


        $pool_num = '0123456789';
        $pool_abc = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

        $make_pwd = substr(str_shuffle(str_repeat($pool_abc, 5)), 0, 5).substr(str_shuffle(str_repeat($pool_num, 5)), 0, 3);
        $make_id = substr(str_shuffle(str_repeat($pool_num, 5)), 0, 8);
        
        $test2user = Test2user::where([
            'user_id'=>Auth::user()->id,
            'reservation_id'=>$id
        ])->first();
        if($test2user->allowed_id != 0) return redirect()->route('admin.reserve.accept');

        $allowed = new Allowed();
        $allowed->test_pass_id = $make_id;
        $allowed->test_pass_pwd = $make_pwd;
        $allowed->save();

        $test2user->allowed_id = $allowed->id;
        $test2user->save();

        return redirect()->route('admin.reserve.accept');
    }

    public function reserve_mail_send($id){
        $test2user = Test2user::where([
            'user_id'=>Auth::user()->id,
            'reservation_id'=>$id
        ])->first();

        $reservation = Reservation::find($id);
        
        if(is_null($test2user)) return redirect()->route('admin.reserve.accept');
        if($test2user->allowed_id == 0) return redirect()->route('admin.reserve.accept');
        $test_pass_id = $test2user->allowed()->first()->test_pass_id;
        $test_pass_pwd = $test2user->allowed()->first()->test_pass_pwd;
        
        $period = $reservation->test()->first()->get_test_date().
        '：'.$reservation->test()->first()->get_begin_time().
        '～'.$reservation->test()->first()->get_end_time();
        
        //dd($test_pass_id);
        $actionText  = '登録画面へ';
        $mailData = [
            'period'=> $period,
            'test_pass_id' => $test_pass_id,
            'test_pass_pwd' => $test_pass_pwd,
        ];
        //Mail::to(Auth::user()->email)->send(new AllowedMail($mailData));

        $test2user->mail_sended = 1;
        $test2user->save();
        return redirect()->route('admin.reserve.accept');

    }

    public function test_make(){
        return view('admin.make_test');
    }
    public function test_problem(){
        return view('admin.test_problem');
    }
}
