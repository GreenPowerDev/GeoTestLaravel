@extends('layouts.main')
@section('main-content')
<link href="{{asset('/css/mypage_style.css')}}" rel='stylesheet'>
<section class="mypage">
        <div class="user_information">
            <p class="title">お客様情報</p>
            <p class="user_name">氏名:　<span>{{Auth::user()->name}}</span></p>
            {{-- <p class="user_id">お客様ID： <span>○○○○</span></p> --}}
            <p class="user_mail_address">メールアドレス:　<span>{{Auth::user()->email}}</span></p>
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

                @foreach($allowed_tests as $allowed_test)
                <div class="reservation_content">
                    <p class="reservation_contetnt_title">試験タイトル:{{$allowed_test->test->name}}</p>
                    <div class="reservation_when">
                        <p class="reservation_date">開催日：{{$allowed_test->test->get_test_date()}}</p>
                        <p class="reservation_time">開催時間：{{$allowed_test->test->get_begin_time()}}～{{$allowed_test->test->get_end_time()}}</p>
                    </div>
                    <div class="reservation_context">
                        <p class="reservation_area">エリア： <span>{{$allowed_test->test->get_province_name()}}</span></p>
                        <p class="reservation_ganre">ジャンル： <span>{{$allowed_test->test->get_ganre_name()}}</span></p>
                        <p class="reservation_level">レベル：<span>{{$allowed_test->test->get_level_name()}}</span></p>
                    </div>
                    <a href="{{route('test.login_form', ['id'=>$allowed_test->id])}}">
                        <div class="to_test_site">
                            試験画面へ進む
                        </div>
                    </a>
                </div>
                @endforeach

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
