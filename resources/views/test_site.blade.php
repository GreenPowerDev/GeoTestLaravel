@extends('layouts.main')
@section('main-content')
<link href="{{asset('/css/test_site_style.css')}}" rel='stylesheet'>
<section class="manvisual">
        <div class="test_site_img">
            <p class="test_site_name">

            @foreach(mb_str_split($province->name) as $char)
                {{$char}}
                <br>
            @endforeach
            
            </p>
            <img src="{{$province->img_url}}" alt="">
        </div>
    </section>
    <section class="test_site_detail">
        @if(!$tests->isEmpty())
        <p class="predetail_title">最近の開催試験</p>
        

        <div class="ganre_detail">

            <div class="ganre_context">
                <p class="ganre_date">開催日：{{$tests[0]->get_test_date()}}</p>
                <p class="ganre_time">開催時間：{{$tests[0]->get_begin_time()}}～{{$tests[0]->get_end_time()}}</p>
                <p class="ganre_level">レベル：{{$tests[0]->get_level_name()}}</p>
                <p class="ganre_level">ジャンル：{{$tests[0]->get_ganre_name()}}</p>
            </div>
            <div class="ganre_apply">
                <a href="{{route('test.apply',['id'=>$tests[0]->id])}}" class="ganre_apply-btn">申し込む</a>
            </div>
        </div>
        
        <div class="wait_time">
            <p>試験申し込みありがとうございます。 <br>
試験開始まであと <span>○○</span>日<span>○○</span>時 <span>○○</span>分です<br>
開始時間になりましたら自動で画面が <br>
切り替わります。 <br>
今しばらくお待ちください。</p>
        </div>
        @endif

    </section>
    <script>
        $(document).ready(function(){
            $("#test_asc").click(function(){
                $("#show_test_group").css('flex-direction', 'column');
                $(this).css('background','#13AE6A');
                $("#test_desc").css('background','white');
            });
            $("#test_desc").click(function(){
                $("#show_test_group").css('flex-direction', 'column-reverse');
                $(this).css('background','#13AE6A');
                $("#test_asc").css('background','white');
            });
        })   
    </script>
@endsection
