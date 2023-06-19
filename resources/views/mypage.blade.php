@extends('layouts.main')
@section('main-content')
<link href="{{asset('/css/mypage_style.css')}}" rel='stylesheet'>
<section class="mypage">
        <div class="user_information">
            <div class="user_detail">
                <p class="user_name">氏名:　山田　大剣</p>
                <p class="user_mail_address">メールアドレス:　test@admin.gamil</p>
            </div>
            <div class="edit_btn_dv">
                <a href="#edit_information_screen" class="edit_btn">
                    <p>編  集</p> 
                </a>
            </div>
        </div>
        <div class="recent_result">
            <p class="recent_result_title title">最近受けた検定試験</p>
            <div class="recent_result_detail">
                <p class="recent_date">開催日：2023年○○月○○日</p>
                <p class="recent_time">開催時間：○○時○○分～○○時○○分</p>
                <p class="recent_ganre">ジャンル：○○○○</p>
                <p class="recent_level">レベル：○○</p>
                <p class="recent_mark">スコア: 4.3 <span class="fail_style">不 合 格</span></p>
            </div>
        </div>
        <div class="user_lists">
            <div class="passed_list">
                <p class="passed_list_title title">終了した試験</p>
                <div class="user_content">
                    <div class="passed_list_items">
                        <p class="passed_date">開催日：2023年○○月○○日</p>
                        <p class="passed_time">開催時間：○○時○○分～○○時○○分</p>
                        <p class="passed_ganre">ジャンル：○○○○</p>
                        <p class="passed_level">レベル：○○</p>
                        <p class="passed_mark">スコア: 8.9 <span class="pass_style">合   格</span> </p>
                    </div>
                    <div class="passed_list_items">
                        <p class="passed_date">開催日：2023年○○月○○日</p>
                        <p class="passed_time">開催時間：○○時○○分～○○時○○分</p>
                        <p class="passed_ganre">ジャンル：○○○○</p>
                        <p class="passed_level">レベル：○○</p>
                        <p class="passed_mark">スコア: 2.4 <span class="fail_style">不 合   格</span> </p>
                    </div>
                    <div class="passed_list_items">
                        <p class="passed_date">開催日：2023年○○月○○日</p>
                        <p class="passed_time">開催時間：○○時○○分～○○時○○分</p>
                        <p class="passed_ganre">ジャンル：○○○○</p>
                        <p class="passed_level">レベル：○○</p>
                        <p class="passed_mark">スコア:   <span class="nogaze_style">未 対 応</span> </p>
                    </div>
                </div>
            </div>
            <div class="reservation_list">
                <p class="reservation_list_title title">予約済み試験</p>
                <div class="user_content">
                    <div class="reservation_items">
                        <p class="reservation_date">開催日：2023年○○月○○日</p>
                        <p class="reservation_time">開催時間：○○時○○分～○○時○○分</p>
                        <p class="reservation_ganre">ジャンル：○○○○</p>
                        <p class="reservation_level">レベル：○○</p>
                    </div>
                    <div class="reservation_items">
                        <p class="reservation_date">開催日：2023年○○月○○日</p>
                        <p class="reservation_time">開催時間：○○時○○分～○○時○○分</p>
                        <p class="reservation_ganre">ジャンル：○○○○</p>
                        <p class="reservation_level">レベル：○○</p>
                    </div>
                    <div class="reservation_items">
                        <p class="reservation_date">開催日：2023年○○月○○日</p>
                        <p class="reservation_time">開催時間：○○時○○分～○○時○○分</p>
                        <p class="reservation_ganre">ジャンル：○○○○</p>
                        <p class="reservation_level">レベル：○○</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
