@extends('layouts.main')
@section('main-content')
<link href="{{asset('/css/info_style.css')}}" rel='stylesheet'>
<section class="mainvisual">
    <div class="info_screen">
        <p class="info-title">Dummy Title</p>
        <div style="width: 100%;">
            <img src="{{asset('/img/information/mainvisual/info_background.png')}}" alt="画像">
        </div>
    </div>
</section>
<section class="info-data">
    <div class="info-detail">
        <p class="info-content">Dummy Text Dummy Text Dummy Text Dummy Text Dummy Text
            Dummy Text Dummy Text Dummy Text Dummy Text Dummy Text
            Dummy Text Dummy Text Dummy Text Dummy Text Dummy Text</p>
        <p class="info-date">○○○○年○○月○○日</p>
    </div>
    <div class="list-btn">
        <a href="#"><p class="info-list-btn">一覧を見る</p></a>
    </div>            
</section>
@endsection
