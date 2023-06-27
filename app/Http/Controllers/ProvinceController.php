<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Province;
use App\Models\Test;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class ProvinceController extends Controller
{
    //
    public function index_selected($id){
        if(!Auth::check()) return redirect()->route('_login');
        $province = Province::find($id);
        $tests = Test::where('test_date', '>=', Carbon::today())
            ->where('province_id', $id)
            ->orderBy('test_date')
            ->get();
        return view('prefecture', [
            'province' => $province,
            'tests' => $tests
        ]);
    }
    public function all_area_selected(){
        if(!Auth::check()) return redirect()->route('_login');
        $tests = Test::where('test_date', '>=', Carbon::today())
            ->orderBy('test_date')
            ->paginate(4);
        // $province = $tests->province;
        return view('area', [

            'tests' => $tests
        ]);
    }
}
