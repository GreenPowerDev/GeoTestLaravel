@extends('layouts.main')
@section('main-content')
    <link href="{{asset('/css/test_process_style.css')}}" rel='stylesheet'>
    <section class="mainvisual">
    <form>
        @php
             $i=0;
             $total_count = sizeof($problem_ids);
        @endphp
        @foreach($problem_ids as $problem_id)
            @php
                $i++;
            @endphp
            <div class="problem-section" id ="problem_section_{{$i}}" {{(!($i-1))? '': "style=display:none"}}>
                <input type="hidden" name = "problem_id_{{$i}}" id="problem_id_{{$i}}" value="{{$problem_id->problem->id}}">
                <div class="problem_count">
                    <div class="problem_no">問<span>{{$i}}</span></div>
                    <div class="problem_number"><span>{{$i}}</span>/<span>{{$total_count}}</span></div>
                </div>
                <div class="problem_detail">
                    <p> </p>
                </div>
                <p class="problem_text">
                    {{$problem_id->problem->answer_text}}
                </p>
                <div class="answer_count">
                    <input type="hidden" id="time_value_{{$i}}" value="{{$problem_id->problem->problem_time}}">
                    <div class="answer_no">答</div>
                    <div class="answer_number">残り時間： <span id="time_text_{{$i}}"> </span> </div>
                </div>
                <div class="answer_detail">
                    <textarea name="problem_answer_{{$i}}" id="problem_answer_{{$i}}" cols="30" rows="10" placeholder="入力してください"></textarea>
                </div>
                <input type="hidden" name="oun">
                <div>
                    <div class="next_problem">
                    次の問題へ    
                    </div>
                </div>
            </div>

        @endforeach
    </form>
    </section>
    
    <script>
    var current_section = 1;
    var problem_process_time = parseInt("{{$problem_ids[0]->problem->problem_time}}");

    $(document).ready(function(){
        $(".next_problem").click(function(){
            next_page(parseInt($(this).parent().parent().attr('id').replace('problem_section_', '')));
            current_section++;
        })
    })

    function next_page(section_id){
        $("#problem_section_"+ section_id).css('display','none');
        $("#problem_section_"+ (section_id+1)).css('display','block');
        problem_process_time = $("#time_value_"+ (section_id+1)).val();
    }

    function test_time(){
        section_id = current_section;
        problem_process_time--;
        time_minute = Math.floor(problem_process_time / 60);
        time_second = problem_process_time % 60;
         $("#time_text_"+ section_id).text(time_minute + "分" + time_second + "秒");
         if(problem_process_time < 1) $("#problem_section_"+ section_id).find(".next_problem").click();

    }       
    setInterval(test_time, 1000 );

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
