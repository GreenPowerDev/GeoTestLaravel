@extends('admin.admin_layouts.admin_main')
@section('page-title')
    試験申込受付
@endsection
@section('root')
    管理ページ
@endsection
@section('sub-root1')
    試験申込受付
@endsection
@section('main-content')
    <div class="row">
        <div class="col-xl-8 col-lg-4 col-md-6 col-sm-12 col-12">
            <!-- ============================================================== -->
            <!-- custom content list  -->
            <!-- ============================================================== -->
            <div class="card">
                <h5 class="card-header">試験申込リスト</h5>
                <div class="card-body">
                    <div class="list-group">
                        {{-- <a href="#" class="list-group-item list-group-item-action flex-column align-items-start active">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1 text-white">List group item heading</h5>
                                <small>3 days ago</small>
                            </div>
                            <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                            <small>Donec id elit non mi porta.</small>
                        </a> --}}

                        @foreach($test2users as $test2user)

                            @foreach($test2user->reservation()->get() as $reservation)
                                
                                <div class="list-group-item list-group-item-action flex-column align-items-start">
                                    <div class="reservation-buttons d-flex justify-content-end mr-5">
                                        <a href="{{route('admin.reserve.delete', ['id'=>$reservation->id])}}" class="btn btn-outline-dark mx-3">予約削除</a>
                                        <a href="{{route('admin.reserve.agree', ['id'=>$reservation->id])}}" class="btn btn-outline-dark mx-3">予約同意</a>
                                        <a href="{{route('admin.reserve.mail_send', ['id'=>$reservation->id])}}" class="btn btn-outline-dark mx-3">通知送信</a>
                                    </div>
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">{{$reservation->user()->first()->name}}</h5>
                                        <small class="text-muted">{{$reservation->get_reserved_ago_time()}}</small>
                                    </div>
                                    <div class="d-flex">
                                        <p class="mb-1 mr-4">
                                            試験名：{{$reservation->test()->first()->name}} 
                                        </p>
                                        <p class="mb-1 mx-4">
                                            レベル：{{$reservation->test()->first()->get_level_name()}}
                                        </p>
                                        <p class="mb-1 mx-4">
                                            ジャンル：{{$reservation->test()->first()->get_ganre_name()}}
                                        </p>
                                    </div>
                                    <div class="d-flex">
                                        <p class="mb-1 mr-4">
                                            予約同意：{{$reservation->get_reserve_state()}} 
                                        </p>
                                        <p class="mb-1 mx-4">
                                            通知送信：{{$reservation->get_mail_state()}}
                                        </p>
                                    </div>
                                    <small class="text-muted">
                                        {{$reservation->test()->first()->get_test_date()}}
                                        ：{{$reservation->test()->first()->get_begin_time()}}
                                        ～{{$reservation->test()->first()->get_end_time()}}
                                    </small>
                                </div>
                                {{-- <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">List group item heading</h5>
                                        <small class="text-muted">3 days ago</small>
                                    </div>
                                    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                                    <small class="text-muted">Donec id elit non mi porta.</small>
                                </a> --}}

                            @endforeach

                        @endforeach

                    </div>
                </div>
            </div>
            <style>
                .row{
                    justify-content: center;
                }
            </style>
            <!-- ============================================================== -->
            <!-- end custom content list  -->
            <!-- ============================================================== -->
        </div>
    </div>

@endsection
