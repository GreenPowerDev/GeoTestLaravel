@extends('layouts.main')
@section('main-content')
<link href="{{asset('/css/area_style.css')}}" rel='stylesheet'>
<section class="test_area">
        <p class="test_area-title">試験エリア一覧</p>
        <div class="area_search">
            <label for="area_search_input">県名で検索</label>
            <input type="text" class="area_search_input" id="area_search_input">
        </div>
        <div class="test_areas">
            <div class="test_area-part">
                <a href="#">
                    <div class="area_img">
                        <p class="area_name">福<br>岡</p>
                        <img src="{{asset('/img/top/test_area/top_fukuoka.png')}}" alt="">
                    </div>
                    <div class="area_detail">
                        <p class="area_detail-title">最近の開催試験</p>
                        <p class="area_detail-date">開催日：2023年○○月○○日</p>
                        <p class="area_detail-time">開催時間：○○時○○分～○○時○○分</p>
                        <p class="area_detail-ganre">ジャンル：○○○○</p>
                        <p class="area_detail-level">レベル：○○</p>
                    </div>
                </a>
            </div>
            <div class="test_area-part">
                <a href="#">
                    <div class="area_img">
                        <p class="area_name">香<br>川</p>
                        <img src="{{asset('/img/top/test_area/top_kagawa.png')}}" alt="">
                    </div>
                    <div class="area_detail">
                        <p class="area_detail-title">最近の開催試験</p>
                        <p class="area_detail-date">開催日：2023年○○月○○日</p>
                        <p class="area_detail-time">開催時間：○○時○○分～○○時○○分</p>
                        <p class="area_detail-ganre">ジャンル：○○○○</p>
                        <p class="area_detail-level">レベル：○○</p>
                    </div>
                </a>
            </div>
            <div class="test_area-part">
                <a href="#">
                    <div class="area_img">
                        <p class="area_name">広<br>島</p>
                        <img src="{{asset('/img/top/test_area/top_hiroshima.png')}}" alt="">
                    </div>
                    <div class="area_detail">
                        <p class="area_detail-title">最近の開催試験</p>
                        <p class="area_detail-date">開催日：2023年○○月○○日</p>
                        <p class="area_detail-time">開催時間：○○時○○分～○○時○○分</p>
                        <p class="area_detail-ganre">ジャンル：○○○○</p>
                        <p class="area_detail-level">レベル：○○</p>
                    </div>
                </a>
            </div>
            <div class="test_area-part">
                <a href="#">
                    <div class="area_img">
                        <p class="area_name">長<br>野</p>
                        <img src="{{asset('/img/top/test_area/top_nagano.png')}}" alt="">
                    </div>
                    <div class="area_detail">
                        <p class="area_detail-title">最近の開催試験</p>
                        <p class="area_detail-date">開催日：2023年○○月○○日</p>
                        <p class="area_detail-time">開催時間：○○時○○分～○○時○○分</p>
                        <p class="area_detail-ganre">ジャンル：○○○○</p>
                        <p class="area_detail-level">レベル：○○</p>
                    </div>
                </a>
            </div>
            <div class="test_area-part">
                <a href="#">
                    <div class="area_img">
                        <p class="area_name">秋<br>田</p>
                        <img src="{{asset('/img/top/test_area/top_akita.png')}}" alt="">
                    </div>
                    <div class="area_detail">
                        <p class="area_detail-title">最近の開催試験</p>
                        <p class="area_detail-date">開催日：2023年○○月○○日</p>
                        <p class="area_detail-time">開催時間：○○時○○分～○○時○○分</p>
                        <p class="area_detail-ganre">ジャンル：○○○○</p>
                        <p class="area_detail-level">レベル：○○</p>
                    </div>
                </a>
            </div>
            <div class="test_area-part">
                <a href="#">
                    <div class="area_img">
                        <p class="area_name">和<br>和<br>山</p>
                        <img src="{{asset('/img/top/test_area/top_wakayama.png')}}" alt="">
                    </div>
                    <div class="area_detail">
                        <p class="area_detail-title">最近の開催試験</p>
                        <p class="area_detail-date">開催日：2023年○○月○○日</p>
                        <p class="area_detail-time">開催時間：○○時○○分～○○時○○分</p>
                        <p class="area_detail-ganre">ジャンル：○○○○</p>
                        <p class="area_detail-level">レベル：○○</p>
                    </div>
                </a>
            </div>
        </div>
        <div class="to_area-list">
            <div>
                <a href="#" class="pagination">＜＜１２３．。。＞＞</a>
            </div>
        </div>
    </section>
@endsection
