@extends('layouts.main')
@section('main-content')
<link href="{{asset('/css/top_ex_style.css')}}" rel='stylesheet'>
    <section class="mainvisual">
        <div class="top_screen">
            <div class="top_left">
                <img src="{{asset('img/top/mainvisual/top_background.png')}}" alt="" class="back_pc">
                <img src="{{asset('img/top/mainvisual/top_sp.jpg')}}" alt="" class="back_sp">
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
                    @foreach ($notices as $notice)
                        <div class="sch_details">
                            <p class="detail_date">{{$notice->get_notice_date()}}</p>
                            <a href="{{route('notice.select', ['id'=>$notice->id])}}" class="detail_title">{{$notice->notice_contitle}}</a>
                            <p class="detail_content">{{$notice->notice_context}}</p>
                        </div>            
                    @endforeach
                    </div>
                    <div class="sch_footer">
                        <a href="{{route('guide.notice')}}"><p class="list_footer">一覧を見る</p></a>
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

    @if(!Auth::check())

    <section class="free_test">
        <p class="free_test-title">お試し検定</p>
        <p class="free_test-summary">6つの都道府県で各6問お楽しみいただけます！</p>
        <div class="free_test_parts">
        @foreach($first_tests as $first_test)

            <div class="free_test-part">
                    <div class="free_test_img">
                        <img src="{{asset('img/top/test_area/top_nagoya.jpg')}}" alt="">
                    </div>
                    <div class="free_test_detail" id="free_test_detail">
                        <p class="free_test_detail-ganre">ジャンル：{{$first_test['ganre']}}</p>
                        <p class="free_test_detail-level">出題数：{{$first_test['count']}}</p>
                        <div class="free_test_enter">
                            <a class="free_test_enter_btn" href="{{route('free_test_enter', ["id"=>$first_test['free_id']])}}">検定開始</a>
                        </div>
                    </div>
            </div>

        @endforeach
        </div>
    </section>

    @endif

    @if(Auth::check())

    <section class="test_area">
        <p class="test_area-title">試験エリア</p>
        <div class="test_areas">
            @foreach($provinces as $province)

            <div class="test_area-part">
                <a href="{{route('prefecture.select', ['id'=>$province->id])}}">
                    <div class="area_img">
                        <p class="area_name">
                            
                            @foreach(mb_str_split($province->name) as $char)
                                {{$char}}
                                <br>
                            @endforeach
                            
                        </p>
                        <img src="{{$province->img_url}}" alt="">
                    </div>
                    <div class="area_detail" id="areadetail">
                        <p class="area_detail-title">最近の開催試験</p>
                        @if (is_null($province->province_first_test()))
                        <p class="predetail_title" >テストはありません。</p>
                        @else
                        
                            <p class="aera_detail_test_title">試験タイトル:{{$province->province_first_test()->name}}</p>
                            <p class="area_detail-date">開催日：{{$province->province_first_test()->get_test_date()}}</p>
                            <p class="area_detail-time">開催時間：{{$province->province_first_test()->get_begin_time()}}
                                                        ～{{$province->province_first_test()->get_end_time()}}</p>
                            <p class="area_detail-ganre">ジャンル：{{$province->province_first_test()->get_ganre_name()}}</p>
                            <p class="area_detail-level">レベル：{{$province->province_first_test()->get_level_name()}}</p>
                        @endif
                    
                    </div>
                </a>
            </div>

            @endforeach

        </div>
        <div class="to_area-list">
            <div>
                <a href="{{route('search.area')}}" class="to_area-list-btn">試験エリア一覧ページへ</a>
            </div>
        </div>
    </section>

    @endif

    <section class="sns_media">
        <p class="sns-title">SNSメディア</p>
        <div class="sns-items">
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
        </div>
    </section>

    @if(Auth::check())

    <section class="search_by_ganre">
        <p class="search_ganre-title">ジャンルから探す</p>
        <div class="search_ganre-btns">
            @foreach($ganres as $ganre)

            <div class="search_each_ganre">
                <a href="{{route('ganre.select', ['id'=>$ganre->id])}}" >
                    <p class="search_ganre-btns-btn">{{$ganre->ganre_name}}</p>
                </a>
            </div>

            @endforeach
        </div>
    </section>
    @endif
    <section class="content">
        <p class="content-title">コンテンツ</p>
        <div class="content-items">
            <div class="content-items-left"><a href="{{route('guide.about_site')}}"><img src="{{asset('img/top/content/top_about.png')}}" alt=""></a>
            </div>
            <div class="content-items-right"><a href="{{route('guide.method')}}"><img src="{{asset('img/top/content/top_method.png')}}" alt=""></a></div>
        </div>
    </section>


<script>
const areaImg = document.querySelector('.area_img img');

areaImg.addEventListener('load', () => {
  const areaImgHeight = areaImg.offsetHeight;  
  const areaDetail = document.getElementById('areadetail');  
  areaDetail.style.height = areaImgHeight + 'px';
});

</script>
    
@endsection
