@extends('layouts.main')
@section('main-content')
<link href="{{asset('/css/info_style.css')}}" rel='stylesheet'>
<section class="mainvisual">
    <div class="info_screen">
        <p class="info-title">{{$notice->notice_contitle}}</p>
        <div style="width: 100%;">
            <img src="{{$notice->notice_img_url}}" alt="画像">
        </div>
    </div>
</section>
<section class="info-data">
    <div class="info-detail">
        <p class="info-content">{{$notice->notice_context}}</p>
        <p class="info-date">{{$notice->notice_date}}</p>
    </div>
    <div class="list-btn">
        <a href="#"><p class="info-list-btn">一覧を見る</p></a>
    </div>            
</section>
@endsection
