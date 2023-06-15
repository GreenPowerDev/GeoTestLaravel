@extends('layouts.main')
@section('main-content')
<link href="{{asset('/css/customer_style.css')}}" rel='stylesheet'>
<section class="customer_inforamtion">
    <p class="customer_title title">お客様情報</p>
    <div class="customer_data">
        <p class="customer_name">氏名：○○○○</p>
        <p class="customer_id">お客様ID：○○○○</p>
        <p class="customer_email">メールアドレス：○○○○</p>
    </div>
    <div class="recent">
        <p class="recent_title title">最近受けた検定</p>
        <div class="recent_detail">
            <div class="recent_detail_content">
                 <div class="recent_detail_time d-flex-left">
                    <p class="recent_detail_date">開催日：2023年○○月○○</p>
                    <p class="recent_detail_oclock">開催時間：○○時○○分～○○時○○分</p>
                 </div>
                 <div class="recent_detail_context d-flex-left">
                    <p class="recent_detail_area">エリア：○○○○</p>
                    <p class="recent_detail_ganre">ジャンル：○○○○</p>
                    <p class="recent_detail_level">レベル：○○</p>
                 </div>
            </div>        
            <div class="recent_detail_content">
                 <div class="recent_detail_time d-flex-left">
                    <p class="recent_detail_date">開催日：2023年○○月○○</p>
                    <p class="recent_detail_oclock">開催時間：○○時○○分～○○時○○分</p>
                 </div>
                 <div class="recent_detail_context d-flex-left">
                    <p class="recent_detail_area">エリア：○○○○</p>
                    <p class="recent_detail_ganre">ジャンル：○○○○</p>
                    <p class="recent_detail_level">レベル：○○</p>
                 </div>
            </div>        
            <div class="recent_detail_content">
                 <div class="recent_detail_time d-flex-left">
                    <p class="recent_detail_date">開催日：2023年○○月○○</p>
                    <p class="recent_detail_oclock">開催時間：○○時○○分～○○時○○分</p>
                 </div>
                 <div class="recent_detail_context d-flex-left">
                    <p class="recent_detail_area">エリア：○○○○</p>
                    <p class="recent_detail_ganre">ジャンル：○○○○</p>
                    <p class="recent_detail_level">レベル：○○</p>
                 </div>
            </div>        
            <div class="recent_detail_content">
                 <div class="recent_detail_time d-flex-left">
                    <p class="recent_detail_date">開催日：2023年○○月○○</p>
                    <p class="recent_detail_oclock">開催時間：○○時○○分～○○時○○分</p>
                 </div>
                 <div class="recent_detail_context d-flex-left">
                    <p class="recent_detail_area">エリア：○○○○</p>
                    <p class="recent_detail_ganre">ジャンル：○○○○</p>
                    <p class="recent_detail_level">レベル：○○</p>
                 </div>
            </div>        
        </div>
    </div>
    <div class="reserve">
        <p class="reserve_title title">予約済み検定</p>
        <div class="reserve_detail">
            <div class="reserve_detail_content">
                 <div class="reserve_detail_time d-flex-left">
                    <p class="reserve_detail_date">開催日：2023年○○月○○</p>
                    <p class="reserve_detail_oclock">開催時間：○○時○○分～○○時○○分</p>
                 </div>
                 <div class="reserve_detail_context d-flex-left">
                    <p class="reserve_detail_area">エリア：○○○○</p>
                    <p class="reserve_detail_ganre">ジャンル：○○○○</p>
                    <p class="reserve_detail_level">レベル：○○</p>
                 </div>
            </div>        
            <div class="reserve_detail_content">
                 <div class="reserve_detail_time d-flex-left">
                    <p class="reserve_detail_date">開催日：2023年○○月○○</p>
                    <p class="reserve_detail_oclock">開催時間：○○時○○分～○○時○○分</p>
                 </div>
                 <div class="reserve_detail_context d-flex-left">
                    <p class="reserve_detail_area">エリア：○○○○</p>
                    <p class="reserve_detail_ganre">ジャンル：○○○○</p>
                    <p class="reserve_detail_level">レベル：○○</p>
                 </div>
            </div>        
            <div class="reserve_detail_content">
                 <div class="reserve_detail_time d-flex-left">
                    <p class="reserve_detail_date">開催日：2023年○○月○○</p>
                    <p class="reserve_detail_oclock">開催時間：○○時○○分～○○時○○分</p>
                 </div>
                 <div class="reserve_detail_context d-flex-left">
                    <p class="reserve_detail_area">エリア：○○○○</p>
                    <p class="reserve_detail_ganre">ジャンル：○○○○</p>
                    <p class="reserve_detail_level">レベル：○○</p>
                 </div>
            </div>        
            <div class="reserve_detail_content">
                 <div class="reserve_detail_time d-flex-left">
                    <p class="reserve_detail_date">開催日：2023年○○月○○</p>
                    <p class="reserve_detail_oclock">開催時間：○○時○○分～○○時○○分</p>
                 </div>
                 <div class="reserve_detail_context d-flex-left">
                    <p class="reserve_detail_area">エリア：○○○○</p>
                    <p class="reserve_detail_ganre">ジャンル：○○○○</p>
                    <p class="reserve_detail_level">レベル：○○</p>
                 </div>
            </div>        
        </div>
    </div>
    <div class="pass">
        <p class="pass_title title">合格済み検定一覧</p>
        <div class="pass_detail">
            <div class="pass_detail_content">
                 <div class="pass_detail_time d-flex-left">
                    <p class="pass_detail_date">開催日：2023年○○月○○</p>
                    <p class="pass_detail_oclock">開催時間：○○時○○分～○○時○○分</p>
                 </div>
                 <div class="pass_detail_context d-flex-left">
                    <p class="pass_detail_area">エリア：○○○○</p>
                    <p class="pass_detail_ganre">ジャンル：○○○○</p>
                    <p class="pass_detail_level">レベル：○○</p>
                 </div>
            </div>        
            <div class="pass_detail_content">
                 <div class="pass_detail_time d-flex-left">
                    <p class="pass_detail_date">開催日：2023年○○月○○</p>
                    <p class="pass_detail_oclock">開催時間：○○時○○分～○○時○○分</p>
                 </div>
                 <div class="pass_detail_context d-flex-left">
                    <p class="pass_detail_area">エリア：○○○○</p>
                    <p class="pass_detail_ganre">ジャンル：○○○○</p>
                    <p class="pass_detail_level">レベル：○○</p>
                 </div>
            </div>        
            <div class="pass_detail_content">
                 <div class="pass_detail_time d-flex-left">
                    <p class="pass_detail_date">開催日：2023年○○月○○</p>
                    <p class="pass_detail_oclock">開催時間：○○時○○分～○○時○○分</p>
                 </div>
                 <div class="pass_detail_context d-flex-left">
                    <p class="pass_detail_area">エリア：○○○○</p>
                    <p class="pass_detail_ganre">ジャンル：○○○○</p>
                    <p class="pass_detail_level">レベル：○○</p>
                 </div>
            </div>        
            <div class="pass_detail_content">
                 <div class="pass_detail_time d-flex-left">
                    <p class="pass_detail_date">開催日：2023年○○月○○</p>
                    <p class="pass_detail_oclock">開催時間：○○時○○分～○○時○○分</p>
                 </div>
                 <div class="pass_detail_context d-flex-left">
                    <p class="pass_detail_area">エリア：○○○○</p>
                    <p class="pass_detail_ganre">ジャンル：○○○○</p>
                    <p class="pass_detail_level">レベル：○○</p>
                 </div>
            </div>        
        </div>
    </div>
</section>
@endsection
