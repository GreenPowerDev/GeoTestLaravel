<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Stripe\Stripe;
use Stripe\Charge;
use App\Models\Test;

class TestPaymantController extends Controller
{
    public function payment_charge(Request $request)
    {   
        if(!Auth::check()) return redirect()->route('_login');
        $id = $request->id;
        if(!$request->agree){
            return redirect()->route('test.apply', $id) ;
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
            
            // Handle successful payment
            return redirect()->back()->with('message', 'Payment successful!');
        } catch (\Exception $e) {
            // Handle payment error
            return redirect()->back()->with('message', $e->getMessage());
        }
    }
}
