@extends('layouts.main')
@section('main-content')
    <link href="{{asset('/css/test_process_style.css')}}" rel='stylesheet'>
    <section class="mainvisual">
        <div class="problem_count">
            <div class="problem_no">問<span>1</span></div>
            <div class="problem_number"><span>1</span>/<span>10</span></div>
        </div>
        <div class="problem_detail">
            <p>Dummy Text Dummy Text Dummy Text Dummy Text Dummy Text Dummy Text Dummy Text Dummy Text Dummy Text Dummy Text Dummy Text Dummy Text Dummy Text Dummy Text Dummy Text Dummy Text Dummy Text Dummy Text Dummy○○○○ Text Dummy Text Dummy Text 
            </p>
        </div>
        <p class="problem_text">
            ○○○○に当てはまる言葉を答えよ。
        </p>
        <div class="answer_count">
            <div class="answer_no">答</div>
            <div class="answer_number">残り時間：○○分○○秒</div>
        </div>
        <div class="answer_detail">
            <textarea name="" id="" cols="30" rows="10" placeholder="入力してください"></textarea>
        </div>

        <a href="#">
            <div class="next_problem">
            次の問題へ    
            </div>
        </a>
    </section>
    <script>
    window.onbeforeunload = function() {
        return "試験に再受験できません。本当に脱退しますか？";
    }

    function disableF5(e) {
        if ((e.which || e.keyCode) == 116 || (e.which || e.keyCode) == 82) e.preventDefault(); 
    }

    $(document).ready(function(){
        $(document).on("keydown", disableF5);
    });

    </script>
@endsection
