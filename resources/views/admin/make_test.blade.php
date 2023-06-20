@extends('admin.admin_layouts.admin_main')
@section('page-title')
    試験作成
@endsection
@section('root')
    管理ページ
@endsection
@section('sub-root1')
    試験管理
@endsection
@section('sub-root2')
    試験作成
@endsection
@section('main-content')
<div class="row">
    <!-- ============================================================== -->
    <!-- valifation types -->
    <!-- ============================================================== -->
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <h5 class="card-header">試験作成</h5>
            <div class="card-body">
                <form id="validationform" data-parsley-validate="" novalidate="">
                    <div class="form-group row">
                        <label class="col-12 col-sm-3 col-form-label text-sm-right">試験名</label>
                        <div class="col-12 col-sm-8 col-lg-6">
                            <input type="text" required="" placeholder="" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12 col-sm-3 col-form-label text-sm-right">試験金額</label>
                        <div class="col-12 col-sm-8 col-lg-6">
                            <input required="" type="number" min="0" placeholder="" class="form-control">
                        </div>
                    </div>
                    <div class="card-body border-top d-flex justify-content-center">
                        <h5>試験開始日</h5>
                        <div class="form-group mx-3">
                            <div class="input-group date" id="datetimepicker4" data-target-input="nearest">
                                <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker4">
                                <div class="input-group-append" data-target="#datetimepicker4" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                                </div>
                            </div>
                        </div>
                        <h5>開始時間</h5>
                        <div class="form-group mx-3">
                            <div class="input-group date" id="datetimepicker3" data-target-input="nearest">
                                <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker3">
                                <div class="input-group-append" data-target="#datetimepicker3" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="far fa-clock"></i></div>
                                </div>
                            </div>
                        </div>
                        <h5>期限時間</h5>
                        <div class="form-group mx-3">
                            <div class="input-group date" id="datetimepicker3_1" data-target-input="nearest">
                                <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker3_1">
                                <div class="input-group-append" data-target="#datetimepicker3_1" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="far fa-clock"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group d-flex justify-content-center">

                            <label for="input-select">県選択</label>
                            <select class="form-control mx-3" style="width: 150px;" id="input-select">
                                <option>Choose Example</option>
                            </select>

                            <label for="input-select">ジャンル選択</label>
                            <select class="form-control mx-3" style="width: 150px;" id="input-select">
                                <option>Choose Example</option>
                            </select>

                            <label for="input-select">レベル選択</label>
                            <select class="form-control mx-3" style="width: 150px;" id="input-select">
                                <option>Choose Example</option>
                            </select>
     
                    </div>
                    <div class="d-flex w-100">
                        <button type="submit" class="btn btn-space btn-primary mx-auto">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
        <script src="{{asset('admin/vendor/datepicker/moment.js')}}"></script>
        <script src="{{asset('admin/vendor/datepicker/tempusdominus-bootstrap-4.js')}}"></script>
        <script src="{{asset('admin/vendor/datepicker/datepicker.js')}}"></script>
    <!-- ============================================================== -->
    <!-- end valifation types -->
    <!-- ============================================================== -->
</div>

@endsection