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
    @if(Auth::check())
        <div class="end_field">
            <p class="end_title">お疲れ様でした！</p>
            <p class="end_context">回答内容は無事に運営へ送信されました。<br>
                採点出来次第、メールでご連絡いたします。<br>
                メールが届きましたら、「マイページ」にて <br>   
                結果をご確認くださいませ。
            </p>
            <a href="{{route('welcome_page')}}">
                <div class="to-top_page">
                トップページへ    
                </div>
            </a>
        </div>
    @endif

    @if(!Auth::check())
        <div class="end_field">
            <p class="end_title">お疲れ様でした！</p>
            <p class="end_context">あなたのスコアは"{{$avg_score}}"点で、"{{$pass_state}}"です。<br>
            楽しかったですか？<br>
                「無料会員登録」をすると、今後<br>
                さまざまな検定を受験することができます！  
            </p>
            <a href="{{route('_verifyMailSend')}}">
                <div class="to-register_page">
                無料会員登録へ    
                </div>
            </a>
            <a href="{{route('welcome_page')}}">
                <div class="to-top_page">
                トップページへ    
                </div>
            </a>
        </div>
    @endif
    </section>

@endsection
