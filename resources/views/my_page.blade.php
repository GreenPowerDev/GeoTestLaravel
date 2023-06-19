@extends('layouts.main')
@section('main-content')
<link href="{{asset('/css/mypage_style.css')}}" rel='stylesheet'>
<section class="mypage">
        <div class="user_information">
            <p class="title">お客様情報</p>
            <p class="user_name">氏名:　<span>○○○○</span></p>
            <p class="user_id">お客様ID： <span>○○○○</span></p>
            <p class="user_mail_address">メールアドレス:　<span>test@admin.gamil</span></p>
        </div>
        <div class="recent_result">
            <p class="recent_result_title title">最近受けた検定</p>
            <div class="recent_result_detail">
                <div class="recent_test">
                    <div class="recent_when">
                        <p class="recent_date">開催日：2023年○○月○○日</p>
                        <p class="recent_time">開催時間：○○時○○分～○○時○○分</p>
                    </div>
                    <div class="recent_context">
                        <p class="recent_ganre">エリア： <span>○○○○</span></p>
                        <p class="recent_ganre">ジャンル： <span>○○○○</span></p>
                        <p class="recent_level">レベル：<span>○○</span></p>
                    </div>
                    <div class="recent_test_result pass_style">
                        <span>合格</span> 
                    </div>
                </div>
                <div class="recent_test">
                    <div class="recent_when">
                        <p class="recent_date">開催日：2023年○○月○○日</p>
                        <p class="recent_time">開催時間：○○時○○分～○○時○○分</p>
                    </div>
                    <div class="recent_context">
                        <p class="recent_ganre">エリア： <span>○○○○</span></p>
                        <p class="recent_ganre">ジャンル： <span>○○○○</span></p>
                        <p class="recent_level">レベル：<span>○○</span></p>
                    </div>
                    <div class="recent_test_result nogaze_style">
                        <span>合否判定待ち</span> 
                    </div>
                </div>
                <div class="recent_test">
                    <div class="recent_when">
                        <p class="recent_date">開催日：2023年○○月○○日</p>
                        <p class="recent_time">開催時間：○○時○○分～○○時○○分</p>
                    </div>
                    <div class="recent_context">
                        <p class="recent_ganre">エリア： <span>○○○○</span></p>
                        <p class="recent_ganre">ジャンル： <span>○○○○</span></p>
                        <p class="recent_level">レベル：<span>○○</span></p>
                    </div>
                    <div class="recent_test_result fail_style">
                        <span>不合格</span> 
                    </div>
                </div>
            </div>
        </div>
        <div class="reservation_list">
            <p class="reservation_title title">予約済み検定</p>
            <div class="reservation_detail">
                <div class="reservation_content">
                    <div class="reservation_when">
                        <p class="reservation_date">開催日：2023年○○月○○日</p>
                        <p class="reservation_time">開催時間：○○時○○分～○○時○○分</p>
                    </div>
                    <div class="reservation_context">
                        <p class="reservation_area">エリア： <span>○○○○</span></p>
                        <p class="reservation_ganre">ジャンル： <span>○○○○</span></p>
                        <p class="reservation_level">レベル：<span>○○</span></p>
                    </div>
                    <div class="to_test_site">
                        試験画面へ進む
                    </div>
                </div>
                <div class="reservation_content">
                    <div class="reservation_when">
                        <p class="reservation_date">開催日：2023年○○月○○日</p>
                        <p class="reservation_time">開催時間：○○時○○分～○○時○○分</p>
                    </div>
                    <div class="reservation_context">
                        <p class="reservation_area">エリア： <span>○○○○</span></p>
                        <p class="reservation_ganre">ジャンル： <span>○○○○</span></p>
                        <p class="reservation_level">レベル：<span>○○</span></p>
                    </div>
                    <div class="to_test_site">
                        試験画面へ進む
                    </div>
                </div>
                <div class="reservation_content">
                    <div class="reservation_when">
                        <p class="reservation_date">開催日：2023年○○月○○日</p>
                        <p class="reservation_time">開催時間：○○時○○分～○○時○○分</p>
                    </div>
                    <div class="reservation_context">
                        <p class="reservation_area">エリア： <span>○○○○</span></p>
                        <p class="reservation_ganre">ジャンル： <span>○○○○</span></p>
                        <p class="reservation_level">レベル：<span>○○</span></p>
                    </div>
                    <div class="to_test_site">
                        試験画面へ進む
                    </div>
                </div>
            </div>
        </div>
        <div class="passed_test_list">
            <p class="passed_test_title title">合格済み検定一覧</p>
            <div class="passed_test_detail">
                <div class="passed_test_content">
                    <div class="passed_test_when">
                        <p class="passed_test_date">開催日：2023年○○月○○日</p>
                        <p class="passed_test_time">開催時間：○○時○○分～○○時○○分</p>
                    </div>
                    <div class="passed_test_context">
                        <p class="passed_test_area">エリア： <span>○○○○</span></p>
                        <p class="passed_test_ganre">ジャンル： <span>○○○○</span></p>
                        <p class="passed_test_level">レベル：<span>○○</span></p>
                    </div>
                </div>
                <div class="passed_test_content">
                    <div class="passed_test_when">
                        <p class="passed_test_date">開催日：2023年○○月○○日</p>
                        <p class="passed_test_time">開催時間：○○時○○分～○○時○○分</p>
                    </div>
                    <div class="passed_test_context">
                        <p class="passed_test_area">エリア： <span>○○○○</span></p>
                        <p class="passed_test_ganre">ジャンル： <span>○○○○</span></p>
                        <p class="passed_test_level">レベル：<span>○○</span></p>
                    </div>
                </div>
                <div class="passed_test_content">
                    <div class="passed_test_when">
                        <p class="passed_test_date">開催日：2023年○○月○○日</p>
                        <p class="passed_test_time">開催時間：○○時○○分～○○時○○分</p>
                    </div>
                    <div class="passed_test_context">
                        <p class="passed_test_area">エリア： <span>○○○○</span></p>
                        <p class="passed_test_ganre">ジャンル： <span>○○○○</span></p>
                        <p class="passed_test_level">レベル：<span>○○</span></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection
