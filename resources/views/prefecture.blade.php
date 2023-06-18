@extends('layouts.main')
@section('main-content')
<link href="{{asset('/css/prefecture_style.css')}}" rel='stylesheet'>
<section class="manvisual">
        <div class="prefecture_img">
            <p class="prefecture_name">

            @foreach(mb_str_split($province->name) as $char)
                {{$char}}
                <br>
            @endforeach
            
            </p>
            <img src="{{$province->img_url}}" alt="">
        </div>
    </section>
    <section class="prefecture_detail">
        <p class="predetail_title">最近の開催試験</p>
        <div class="recent_detail">
            <p class="recent_date">開催日：2023年○○月○○日</p>
            <p class="recent_time">開催時間：○○時○○分～○○時○○分</p>
            <p class="recent_ganre">ジャンル：○○○○</p>
            <p class="recent_level">レベル：○○</p>
        </div>
        <div class="ganre_type">
            <p class="ganre_name">ジャンル：○○</p>
            <div class="ganre_detail">
                <div class="ganre_context">
                    <p class="ganre_date">開催日：2023年○○月○○日</p>
                    <p class="ganre_time">開催時間：○○時○○分～○○時○○分</p>
                    <p class="ganre_level">レベル：○○</p>
                </div>
                <div class="ganre_apply">
                    <a href="#" class="ganre_apply-btn">申し込む</a>
                </div>
            </div>
            <div class="ganre_detail">
                <div class="ganre_context">
                    <p class="ganre_date">開催日：2023年○○月○○日</p>
                    <p class="ganre_time">開催時間：○○時○○分～○○時○○分</p>
                    <p class="ganre_level">レベル：○○</p>
                </div>
                <div class="ganre_apply">
                    <a href="#" class="ganre_apply-btn">申し込む</a>
                </div>
            </div>
            <div class="ganre_detail">
                <div class="ganre_context">
                    <p class="ganre_date">開催日：2023年○○月○○日</p>
                    <p class="ganre_time">開催時間：○○時○○分～○○時○○分</p>
                    <p class="ganre_level">レベル：○○</p>
                </div>
                <div class="ganre_apply">
                    <a href="#" class="ganre_apply-btn">申し込む</a>
                </div>
            </div>
        </div>
        <div class="ganre_type">
            <p class="ganre_name">ジャンル：○○</p>
            <div class="ganre_detail">
                <div class="ganre_context">
                    <p class="ganre_date">開催日：2023年○○月○○日</p>
                    <p class="ganre_time">開催時間：○○時○○分～○○時○○分</p>
                    <p class="ganre_level">レベル：○○</p>
                </div>
                <div class="ganre_apply">
                    <a href="#" class="ganre_apply-btn">申し込む</a>
                </div>
            </div>
            <div class="ganre_detail">
                <div class="ganre_context">
                    <p class="ganre_date">開催日：2023年○○月○○日</p>
                    <p class="ganre_time">開催時間：○○時○○分～○○時○○分</p>
                    <p class="ganre_level">レベル：○○</p>
                </div>
                <div class="ganre_apply">
                    <a href="#" class="ganre_apply-btn">申し込む</a>
                </div>
            </div>
        </div>
    </section>
@endsection
