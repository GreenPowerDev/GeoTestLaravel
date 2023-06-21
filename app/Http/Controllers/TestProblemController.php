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

class TestProblemController extends Controller
{
    //
    public function test_problem(){
        $tests = Test::all();
        $problems = Problem::all();
        return view('admin.test_problem',['tests'=>$tests, 'problems'=>$problems]);
    }
}
