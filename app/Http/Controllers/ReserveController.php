<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Reservation;

class ReserveController extends Controller
{
    //
    public function add($id){
        //dd(Auth::user()->id);
        if(!Auth::check()) return redirect()->route('_login');
        $reservation_model = new Reservation;
        $reservation_model->test_id = $id;
        $reservation_model->user_id = Auth::user()->id;
        $reservation_model->status = 0;
        $reservation_model->save();

        return redirect()->route('home')->with('message', '申請が完了しました');
    }
}
