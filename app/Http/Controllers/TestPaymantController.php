<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestPaymantController extends Controller
{
    //
    public function payment_apply(Request $request){
        if(!Auth::check()) return redirect()->route('_login');
        
        $id = $request->id;

        if(!$request->agree){
            return redirect()->route('test.apply', $id) ;
        }
        return redirect()->route('reserve.add',['id'=>$id]);
    }
}
