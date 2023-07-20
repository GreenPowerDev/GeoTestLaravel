<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Test;

class TestPaymantController extends Controller
{
    //
    public function payment_apply(Request $request){
        if(!Auth::check()) return redirect()->route('_login');
        $id = $request->id;
        $test_price = Test::find($id)->price;
        
        dd($test_price);
        if(!$request->agree){
            return redirect()->route('test.apply', $id) ;
        }
        return redirect()->route('reserve.add',['id'=>$id]);
    }
}
