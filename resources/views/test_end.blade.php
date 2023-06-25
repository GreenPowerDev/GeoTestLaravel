@extends('layouts.main')
@section('main-content')
<link href="{{asset('/css/test_end_style.css')}}" rel='stylesheet'>
    <section class="mainvisual">
        <div class="mianscreen">
            <img src=" {{asset('/img/top/test_area/top_wakayama.png')}} " alt="">
            <p class="endtext">試験終了</p>
        </div>
    </section>
    <section class="test_end_notice">
        <div class="end_field">
            <p class="end_title">お疲れ様でした！</p>
            <p class="end_context">回答内容は無事に運営へ送信されました。<br>
                採点出来次第、メールでご連絡いたします。<br>
                メールが届きましたら、「マイページ」にて <br>   
                結果をご確認くださいませ。
            </p>
            <a href="{{route('welcome_page')}}">
                <div class="to-top_page">
                次の問題へ    
                </div>
            </a>
        </div>

    </section>

@endsection
