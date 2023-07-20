@extends('layouts.main')
@section('main-content')
<link href="{{asset('/css/test_application_style.css')}}" rel='stylesheet'>
<section class="terms_use">
<form action="{{route('payment.apply')}}" method="POST" > 
@csrf

<input type="hidden" value='{{$test->id}}' name="id">
        <p class="terms_title">試験お申込みに対する<br class="sp-lp">利用規約</p> 
        <div class="terms_context">
            <div class="terms_detail">
                <p>
                    The quick brown fox jumps over the lazy dog. 
                </p>
            </div>
            <div class="terms_agree">
                <input type="checkbox" name="agree" id="agree">
                <label for="agree">利用規約を承諾する</label>
            </div>
        </div>
    </section>
    <section class="application_flow">
        <p class="flow_title">試験お申込みの流れ</p>
        <div class="application_flow_each">
            <p>
                qwertyuiopaasdfghjklzxcvbnm,.wertyuiodfghj
            </p>
        </div>
        <div class="application_flow_each">
            <p>
                qwertgfcvvvtrtrcrtcrcdcccdcdrt
            </p>
        </div>
        <div class="application_flow_each">
            <p>
                dfgfghjgwdfghjertyuiodfghjkgh
            </p>
        </div>
    </section>
    <div class="to_pay">
        {{-- {{dd($test->price )}} --}}
        {{-- <button type="submit" class="to_pay_btn" value="決済画面へ"> --}}
        <script
            src="https://checkout.stripe.com/checkout.js" 
            class="stripe-button"
            data-key="{{ env('STRIPE_KEY') }}"
            data-amount={{$test->price}}
            data-name="総合検定研究所"
            data-description={{$test->name}}
            data-image={{asset('img/users/meister00.png')}}
            data-locale="auto"
            data-label = "ssdfe"
            data-currency="jpy"
           >
        </script>
    </div>    
</form>
<style>
.stripe-button-el{
    width: 800px;
}
</style>
@endsection
