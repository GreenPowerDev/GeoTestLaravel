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
        
        //dd($test_price);
        if(!$request->agree){
            return redirect()->route('test.apply', $id) ;
        }
        // return redirect()->route('reserve.add',['id'=>$id, 'test_price'=>$test_price]);
        $this->charge($id, $test_price);
    }

    public function payment_charge()
    {
        Stripe::setApiKey(env('STRIPE_SECRET'));

        $token = $request->input('stripeToken');
        $amount = $test_price; // Amount in cents

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
