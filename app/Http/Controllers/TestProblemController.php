<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test2user;
use App\Models\Reservation;
use App\Models\Allowed;
use App\Models\Province;
use App\Models\Level;
use App\Models\Ganre;
use App\Models\Test;
use App\Models\Problem;
use App\Models\Test2problem;

class TestProblemController extends Controller
{
    //
    public function test_problem(){
        $tests = Test::all();
        $problems = Problem::all();
        return view('admin.test_problem',['tests'=>$tests, 'problems'=>$problems]);
    }
    public function add_problem_test(Request $request){
        //dd($request->problem_ids);
        $test_id = $request->sel_test_id;
        $problem_ids_text = $request->problem_ids;
        $problem_ids = explode("#", substr($problem_ids_text,1));
        //dd($problem_ids);
        foreach($problem_ids as $problem_id){
            $test2problem = new Test2problem();
            $test2problem->test_id = $test_id;
            $test2problem->problem_id = $problem_id;
            $test2problem->save();
        }
        return $this->test_problem();
    }
}
