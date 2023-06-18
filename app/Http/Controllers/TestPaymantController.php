<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestPaymantController extends Controller
{
    //
    public function payment_apply($id){
        //return redirect->
        return redirect()->route('reserve.add',['id'=>$id]);
    }
}
