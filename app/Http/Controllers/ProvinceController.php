<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Province;
use App\Models\Test;

class ProvinceController extends Controller
{
    //
    public function index_selected($id){
        $province = Province::find($id);
        $tests = Test::where('province_id', $id)->get();
        return view('prefecture', [
            'province' => $province,
            'tests' => $tests
        ]);
    }
}
