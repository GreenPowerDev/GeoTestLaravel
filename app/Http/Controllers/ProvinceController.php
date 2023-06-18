<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Province;
use App\Models\Test;
use Carbon\Carbon;

class ProvinceController extends Controller
{
    //
    public function index_selected($id){
        $province = Province::find($id);
        $tests = Test::where('test_date', '>=', Carbon::now())
            ->orderBy('test_date')
            ->get();
        return view('prefecture', [
            'province' => $province,
            'tests' => $tests
        ]);
    }
}
