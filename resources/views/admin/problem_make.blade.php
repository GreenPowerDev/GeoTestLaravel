@extends('admin.admin_layouts.admin_main')
@section('page-title')
    作成
@endsection
@section('root')
    管理ページ
@endsection
@section('sub-root1')
    試験管理
@endsection
@section('sub-root2')
    作成
@endsection
@section('main-content')
<div class="row">
    <!-- ============================================================== -->
    <!-- valifation types -->
    <!-- ============================================================== -->
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <h5 class="card-header">試験作成</h5>
            <form action="{{route('admin.test.problem_make')}}" method="post">
                <div class="card-body">
                    <div class="pstyle">
                        <label for="pstyle_id">test type</label>
                        <select name="pstyle_id" id="pstyle_id" class="">
                            <option value="">checkbox</option>
                            <option value="">radio</option>
                            <option value="">input</option>
                        </select><br>
                        <label for="problem_text">problem text</label>
                        <input type="text" class="form-control" name="answer_text" Required>
                        <button onclick="pstyle()">ok</button>
                    </div>
                    <div>
                        <label for="preanswer">preanswer</label>
                        <input type="text" id="preanswer" class="form-control col-12 col-sm-3 ml-3 " required>
                        <button onclick="preanswer_add()" class="form-control btn btn-space btn-primary col-12 col-sm-1 ml-5">add</button>
                    </div>
                    <div >
                        <label for="correct_answer" >crrect answer</label>
                        <input type="text" id="correct_answer" class="form-control col-12 col-sm-3 ml-3" required>
                        <button type="submit" class="form-control btn btn-space btn-primary col-12 col-sm-1 ml-5">add</button>
                    </div>
                </div>
                <button type="submit">next problem</button>
            </form>
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