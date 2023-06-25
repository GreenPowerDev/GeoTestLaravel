@extends('layouts.dashboard')
@section('main-content')
<link href="{{asset('/css/top_ex_style.css')}}" rel='stylesheet'>
<section class="mainvisual">
        <div class="top_screen">
            <div class="top_left">
                <img src="{{asset('img/top/mainvisual/top_background.png')}}" alt="">
            </div>
            <div class="test_schedul-modal">
                <a href="#modal-btn" class="schedul_btn"><p style="margin:0; padding:0;">情報</p> </a>
             </div>
            <div id="modal-btn" class="top_right" >
                <div class="test_schedul">
                    <a href="#" class="top_right__close">&times;</a>          
                    <div class="sch_title">
                        インフォメーション
                    </div>
                    <div class="sch-content">
                        <div class="sch_details">
                            <p class="detail_date">○○○○年○○月○○日</p>
                            <a href="#" class="detail_title">Dummy Title</a>
                            <p class="detail_content">Dummy Text Dummy Text Dummy Text Dummy T…</p>
                        </div>            
                        <div class="sch_details">
                            <p class="detail_date">○○○○年○○月○○日</p>
                            <a href="#" class="detail_title">Dummy Title</a>
                            <p class="detail_content">Dummy Text Dummy Text Dummy Text Dummy T…</p>
                        </div>            
                        <div class="sch_details">
                            <p class="detail_date">○○○○年○○月○○日</p>
                            <a href="#" class="detail_title">Dummy Title</a>
                            <p class="detail_content">Dummy Text Dummy Text Dummy Text Dummy T…</p>
                        </div>            
                        <div class="sch_details">
                            <p class="detail_date">○○○○年○○月○○日</p>
                            <a href="#" class="detail_title">Dummy Title</a>
                            <p class="detail_content">Dummy Text Dummy Text Dummy Text Dummy T…</p>
                        </div>
                        <div class="sch_details">
                            <p class="detail_date">○○○○年○○月○○日</p>
                            <a href="#" class="detail_title">Dummy Title</a>
                            <p class="detail_content">Dummy Text Dummy Text Dummy Text Dummy T…</p>
                        </div>
                        <div class="sch_details">
                            <p class="detail_date">○○○○年○○月○○日</p>
                            <a href="#" class="detail_title">Dummy Title</a>
                            <p class="detail_content">Dummy Text Dummy Text Dummy Text Dummy T…</p>
                        </div>
                    </div>
                    <div class="sch_footer">
                        <a href="#"><p class="list_footer">一覧を見る</p></a>
                    </div>  
                </div>
            </div>
        </div>
    </section>
    <section class="promotion">
        <p class="promotion_title">プロモーション</p>
        <div class="video">
        </div>
    </section>
    <section class="test_area">
        <p class="test_area-title">試験エリア</p>
        <div class="test_areas">
            <div class="test_area-part">
                <a href="#">
                    <div class="area_img">
                        <p class="area_name">福<br>岡</p>
                        <img src="{{asset('img/top/test_area/top_fukuoka.png')}}" alt="">
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
                        <img src="{{asset('img/top/test_area/top_kagawa.png')}}" alt="">
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
                        <img src="{{asset('img/top/test_area/top_hiroshima.png')}}" alt="">
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
                        <img src="{{asset('img/top/test_area/top_nagano.png')}}" alt="">
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
                <a href="#" class="to_area-list-btn">試験エリア一覧ページへ</a>
            </div>
        </div>
    </section>
    <section class="sns_media">
        <p class="sns-title">SNSメディア</p>
        <div class="sns-items">
            <div class="sns-items-img">
                <a href="#"><img src="{{asset('img/top/sns_media/top_spotify.png')}}" alt=""></a>
            </div>
            <div class="sns-items-img">
                <a href="#"><img src="{{asset('img/top/sns_media/top_youtube.png')}}" alt=""></a>
            </div>
            <div class="sns-items-img">
                <a href="#"><img src="{{asset('img/top/sns_media/top_twiter.png')}}" alt=""></a>
            </div>
            <div class="sns-items-img">
                <a href="#"><img src="{{asset('img/top/sns_media/top_facebook.png')}}" alt=""></a>
            </div>
            <div class="sns-items-img">
                <a href="#"><img src="{{asset('img/top/sns_media/top_instagram.png')}}" alt=""></a>
            </div>
            <div class="sns-items-img">
                <a href="#"><img src="{{asset('img/top/sns_media/top_tiktok.png')}}" alt=""></a>
            </div>
        </div>
    </section>
    <section class="search_by_ganre">
        <p class="search_ganre-title">ジャンルから探す</p>
        <div class="search_ganre-btns">
            <div>
                <div >
                    <a href="#" ><p class="search_ganre-btns-btn">グルメ</p></a>
                </div>
                <div >
                    <a href="#" ><p class="search_ganre-btns-btn">市町村</p></a>
                </div>
            </div>
            <div>
                <div >
                    <a href="#" ><p class="search_ganre-btns-btn">歴史</p></a>
                </div>
                <div >
                    <a class="btn-11" href="#" ><p class="search_ganre-btns-btn">産業</p></a>
                </div>
            </div>
            <div >
                <a href="#" ><p class="search_ganre-btns-btn">観光</p></a>
            </div>
        </div>
    </section>
    <section class="content">
        <p class="content-title">コンテンツ</p>
        <div class="content-items">
            <div class="content-items-left"><a href="#"><img src="{{asset('img/top/content/top_about.png')}}" alt=""></a>
            </div>
            <div class="content-items-right"><a href="#"><img src="{{asset('img/top/content/top_method.png')}}" alt=""></a></div>
        </div>
    </section>
@endsection