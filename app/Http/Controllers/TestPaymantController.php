<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Stripe\Stripe;
use Stripe\Charge;

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

    public function charge(Request $request)
    {
        Stripe::setApiKey(env('STRIPE_SECRET'));

        $token = $request->input('stripeToken');
        $amount = 1000; // Amount in cents

        try {
            $charge = Charge::create([
                'amount' => $amount,
                'currency' => 'usd',
                'description' => 'Example Charge',
                'source' => $token,
            ]);

            // Handle successful payment
            return redirect()->back()->with('message', 'Payment successful!');
        } catch (\Exception $e) {
            // Handle payment error
            return redirect()->back()->with('message', $e->getMessage());
        }
    }
}
