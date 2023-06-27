<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Province;
use App\Models\Test;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class ProvinceController extends Controller
{
    //
    public function index_selected($id){
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
        $tests = Test::where('test_date', '>=', Carbon::today())
            ->orderBy('test_date')
            ->paginate(4);
        $province_name = '';
            // $province = $tests->province;
            return view('area', [
                
                'tests' => $tests,
                'province_name' => $province_name
            ]);
        }
        
    public function prefecture_search(Request $request){
        //dd($request->province_name);
        $province_name = $request->province_name;
        if(!$province_name == ''){
            $tests = Test::where('test_date', '>=', Carbon::today())->get();
            foreach($tests as $test){
                if($test->get_province_name() == $province_name){
                    dd($test->get_province_name());
                    $province_id = $test->province_id;
                }
                else $province_id = -1;
                
            }
            $testsre = Test::where('test_date', '>=', Carbon::today())
            ->where('province_id', $province_id)
            ->paginate(4);
            
            // dd($province_name);
            return view('area_search', [
                'tests' => $testsre,
                'province_name'=>$province_name
            ]);
        }
        return redirect()->route('search.area');
    }
        // $tests = (DB::SELECT *
        //         FROM tests
        //         JOIN provinces ON tests.province_id = provinces.id
        //         WHERE tests.test_date >= '2023-6-27' AND provinces.name LIKE '%岡%';)
        // ->orderBy('test_date')
        // ->paginate(4);
        // $search_result = [];
        // foreach($tests as $test){
            //     if (strpos($test->get_province_name(), $province_name) !== false) {
                //         array_push($search_result, $test);
                //     } 
                // }
        // dd($province_name);
        // $tests_name = $tests[0]->get_province_name();
        // ->where('$this->province->name', $province_name )
        // ->orderBy('test_date')
        // ->paginate(4);
        // return view('area', [
            
            // 'tests' => $tests
        // ]);
        
}