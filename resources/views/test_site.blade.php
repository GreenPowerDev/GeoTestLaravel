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
        {{-- @if(!$test->isEmpty()) --}}
        <p class="predetail_title">最近の開催試験</p>
        

        <div class="ganre_detail" style="border:0;">

            <div class="ganre_context">
                <p class="ganre_date">開催日：{{$test->get_test_date()}}</p>
                <p class="ganre_time">開催時間：{{$test->get_begin_time()}}～{{$test->get_end_time()}}</p>
                <p class="ganre_level">レベル：{{$test->get_level_name()}}</p>
                <p class="ganre_level">ジャンル：{{$test->get_ganre_name()}}</p>
            </div>
        </div>
        
        <div class="wait_time">
            <?php
            $date_scr = $test->test_date." ".$test->begin_time;
            $timestamp_scr = strtotime($date_scr);
            ?>
            <input type="hidden" id="test_begin_time" value="{{$timestamp_scr}}">
            
            <p>試験申し込みありがとうございます。 <br>
            試験開始まであと <span id="calc_time"></span>です<br>
            開始時間になりましたら自動で画面が <br>
            切り替わります。 <br>
            今しばらくお待ちください。</p>
        </div>
        {{-- @endif --}}
        <form method="POST" action="{{route('test.enter')}}" id="enter_test_form">
            @csrf
            <input type="hidden" name="test_id" value="{{$test->id}}">
        </form>
    </section>
    <script>
        var startDate = new Date();
        var timestamp = $('#test_begin_time').val(); 
        //var endDate = new Date(timestamp * 1000);
        var endDate = new Date('2023-06-20 10:29:00');
        var seconds = Math.floor((endDate - startDate)/1000);
        var interval = setInterval(function() {

        //by parsing integer, I avoid all extra string processing
        var r_days = Math.floor(seconds / (60 * 60 * 24));
        var r_hours = Math.floor((seconds % (60 * 60 * 24)) / ( 60 *  60));
        var r_minutes = Math.floor((seconds % (60 * 60)) /  60);
        var r_seconds = Math.floor((seconds %  60));
        --seconds;
        if(seconds <0) enter_test();
        var out_time_string = '';
        if(r_days > 0) out_time_string += r_days + "日";
        if(r_hours > 0) out_time_string += r_hours + "時";
        if(r_minutes > 0) out_time_string += r_minutes + "分";
        if(r_seconds > 0) out_time_string += r_seconds + "秒";
            $('#calc_time').html(out_time_string);
        }, 1000);
        function enter_test(){
            $("#enter_test_form").submit();
        }
    </script>
@endsection
