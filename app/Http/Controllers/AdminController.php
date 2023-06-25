<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Test2user;
use App\Models\Test;
use App\Models\Reservation;
use App\Models\Allowed;
use App\Models\Province;
use App\Models\Level;
use App\Models\Ganre;
use App\Models\Problem;
use Mail;
use Carbon\Carbon;
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
        $ganres = Ganre::all();
        $levels = Level::all();
        $provinces = Province::all();
        return view('admin.make_test', [
            'levels'=>$levels,
            'provinces'=>$provinces,
            'ganres'=>$ganres
        ]);
    }
    // public function test_problem(){
    //     return view('admin.test_problem');
    // }

    public function add_test(Request $request){
        $test = new Test();
        
        
        $date = $request->add_test_date;
        $newDate = Carbon::createFromFormat('Y年m月d日', $date)->format('Y-m-d');
        
        $begin_time = $request->add_test_begin;
        $new_begin_time = Carbon::createFromFormat('H時i分', $begin_time)->format('H:i:00');
        
        $end_time = $request->add_test_end;
        $new_end_time = Carbon::createFromFormat('H時i分', $end_time)->format('H:i:00');
        
        $province_id = Province::where('name', $request->add_province)->first()->id; 
        $ganre_id = Ganre::where('ganre_name', $request->add_ganre)->first()->id; 
        $level_id = Level::where('level_name', $request->add_level)->first()->id; 

        $test->name = $request->add_test_name;
        $test->price = $request->add_test_price;
        $test->test_date = $newDate;
        $test->begin_time = $new_begin_time;
        $test->end_time = $new_end_time;
        $test->province_id = $province_id;
        $test->ganre_id = $ganre_id;
        $test->level_id = $level_id;

        $test->save();

        //return redirect()->route('admin.test.make');
        return $this->test_problem($test->id);

    }

    public function test_problem($id){
        $test = Test::find($id);
        $problems = Problem::all();
        return view('admin.test_problem',['test'=>$test, 'problems'=>$problems]);
    }


    public function problem_make(){
        $ganres = Ganre::all();
        $levels = Level::all();
        $provinces = Province::all();

        return view('admin.problem_make', [
            'levels'=>$levels,
            'provinces'=>$provinces,
            'ganres'=>$ganres
        ]);
    }

    public function add_problem(Request $request){
        $problem = new Problem();

        $snd_province_id = Province::where('name', $request->snd_province)->first()->id; 
        $snd_ganre_id = Ganre::where('ganre_name', $request->snd_ganre)->first()->id; 
        $snd_level_id = Level::where('level_name', $request->snd_level)->first()->id;
        $snd_problem_time = (int)$request->snd_mintime * 60 + (int)$request->snd_secondtime;


        $problem->pstyle = $request->snd_pstyle_id;
        $problem->answer_text = $request->snd_problem_text;
        $problem->pre_answer = $request->snd_pre_answers;
        $problem->correct_answer = $request->snd_correct_answers;
        $problem->province_num = $snd_province_id;
        $problem->ganre_num = $snd_ganre_id;
        $problem->level_num = $snd_level_id;
        $problem->problem_time = $snd_problem_time;

        $problem->save();

        return redirect()->route('admin.test.problem_make');

    }


}
