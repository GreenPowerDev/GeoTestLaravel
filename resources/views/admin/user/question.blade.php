@extends('admin.admin_layouts.admin_main')
@section('page-title')
    管理ページ
@endsection
@section('root')
    管理ページ
@endsection
@section('sub-root1')
    ユーザー
@endsection
@section('sub-root2')
    お客様お問い合わせ一覧
@endsection
@section('main-content')
<div class="page-content">
    <div class="card main-center">
        <h5 class="card-header">お客様お問い合わせ</h5>
        <div class="card-body">
            <div class="table-responsive ">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col" class="text-center">No</th>
                            <th scope="col" class="text-center">ユーザー名</th>
                            <th scope="col" class="text-center">電話番号</th>
                            <th scope="col" class="text-center">メールアドレス</th>
                            <th scope="col" class="text-center">件名</th>
                            <th scope="col" class="text-center">お問合せ内容</th>
                            <th scope="col" class="text-center">回答</th>
                            <th scope="col" class="text-center"></th>
                        </tr>
                    </thead>
                    <tbody>

                        @php
                            $i = 0;   
                        @endphp

                        @foreach ($userquestions as $userquestion)
                        <tr>
                            <th class="text-center" scope="row">{{++$i}}</th>
                            <td class="text-center">{{$userquestion->user_name}}</td>
                            <td class="text-center">{{$userquestion->user_phone}}</td>
                            <td class="text-center">{{$userquestion->user_mail}}</td>
                            <td  class="text-center">{{$userquestion->user_contitle}}</td>
                            <td  class="text-center" style="white-space: wrap">{{$userquestion->user_context}}</td>
                            
                            @if(!($userquestion->reply == ''))
                            <td class="text-center " style="word-wrap: break-word;">{{$userquestion->reply}}</td>
                            @else
                            <td class="text-center d-flex justify-content-center flex-column my-auto mx-auto">
                                <button type="button" class="btn btn-outline-dark  reply-btn" data-toggle="reply-form" data-target="comment-1-reply-form">回答</button><div>
                                <form method="POST" action="{{route('admin.user.reply')}}" class="reply-form d-none" id="comment-1-reply-form" class="">
                                @csrf
                                    <textarea placeholder="Reply to comment" rows="4" name="reply_text" class="w-100"></textarea>
                                    <input type="hidden" name="userquestion_id" value="{{$userquestion->id}}">
                                    <div>
                                    <button class="btn btn-outline-dark button-send" type="submit">転送</button>
                                    <button class="btn btn-outline-dark button-cancle" type="button" data-toggle="reply-form" data-target="comment-1-reply-form">キャンセル</button>
                                    </div>
                                </form>
                            </td>
                            @endif

                            <td class="text-center">
                                <a  class="btn btn-outline-dark"  href="{{route('admin.user.question.delete', ['id'=>$userquestion->id])}}">削除</a>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<style>
    .page-content{
        width: 100%;
        display: flex;
        justify-content: center;
    }
    .embed-img{
        width : 50px;
        height: 50px;
    }
    .main-center{
        width: 100%;
        max-width: 1400px;
    }
    .d-done{
        display:none;
    }
    td, th{
        max-width: 300px!important;
        word-wrap: break-word!important;
    }
    .button-send, .button-cancle{
        width: 90px;
    }
</style>

<script>
    document.addEventListener(
        "click",
        function(event) {
            var target = event.target;
            var replyForm;
            if (target.matches("[data-toggle='reply-form']")) {
                replyForm = document.getElementById(target.getAttribute("data-target"));
                replyForm.classList.toggle("d-none");
            }
        },
        false
    );

</script>

@endsection