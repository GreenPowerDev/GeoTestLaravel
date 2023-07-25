<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Stripe\Stripe;
use Stripe\Charge;
use App\Models\Test;
use App\Models\Payment;
use Carbon\Carbon;

class TestPaymantController extends Controller
{
    public function payment_charge(Request $request)
    {   
        if(!Auth::check()) return redirect()->route('_login');
        $id = $request->id;
        if(!$request->agree){
            return redirect()->route('test.apply', $id)->with('waringmessage', 'お支払いはキャンセルされました。利用規約に同意してください。') ;
        }
        Stripe::setApiKey(env('STRIPE_SECRET'));
        $token = $request->input('stripeToken');
        $amount =$request->test_price; // Amount in cents
        
        try {
            $charge = Charge::create([
                'amount' => $amount,
                'currency' => 'jpy',
                'description' => 'Example Charge',
                'source' => $token,
            ]);
            $payment = new Payment();
            $payment->test_id = Test::find($id)->name;
            $payment->user_id = Auth::user()->name;
            $payment->price = $amount;
            $payment->test_date = Carbon::today();
            $payment->save();
            // Handle successful payment
            return redirect()->route('welcome_page')->with('message', 'お支払いが完了しました。!');
        } catch (\Exception $e) {
            // Handle payment error
            return redirect()->back()->with('message', $e->getMessage());
        }
    }
}
