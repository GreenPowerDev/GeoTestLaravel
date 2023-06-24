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
            @if(!$tests->isEmpty())
                @foreach($tests as $test)
                <div class="test_area-part">
                    <a href="{{route('prefecture.select', ['id'=>$test->province->id])}}">
                        <div class="area_img">
                            <p class="area_name">
                                @foreach(mb_str_split($test->province->name) as $char)
                                    {{$char}}
                                    <br>
                                @endforeach
                            </p>
                            <img src="{{$test->province->img_url}}" alt="">
                        </div>
                        <div class="area_detail">
                            <p class="ganre_date">開催日：{{$test->get_test_date()}}</p>
                            <p class="ganre_time">開催時間：{{$test->get_begin_time()}}～{{$test->get_end_time()}}</p>
                            <p class="ganre_level">レベル：{{$test->get_level_name()}}</p>
                            <p class="ganre_level">ジャンル：{{$test->get_ganre_name()}}</p>
                        </div>
                    </a>
                </div>
                @endforeach
        </div>
        <div>
            {{ $tests->links('pagination')}}
        </div>
        @else
        <p class="test_area-title">テストはありません。</p>
        @endif
    </section>
@endsection
