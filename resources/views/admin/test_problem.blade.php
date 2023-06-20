@extends('admin.admin_layouts.admin_main')
@section('page-title')
    試験問題選択
@endsection
@section('root')
    管理ページ
@endsection
@section('sub-root1')
    試験管理
@endsection
@section('sub-root2')
    試験問題選択
@endsection
@section('main-content')
<div class="row">
    <!-- ============================================================== -->
    <!-- valifation types -->
    <!-- ============================================================== -->
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <h5 class="card-header">試験問題選択</h5>
            <div class="row px-2">
                <!-- ============================================================== -->
                <!-- accrodions style one -->
                <!-- ============================================================== -->
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="section-block">
                        <h5 class="section-title">試験選択</h5>
                        <div class="img-modal-search-bar">
                            <input type="text" class="pl-5" id="search_card" placeholder="テスト名検索" style="width: 400px; padding-left: 20px;">
                        </div>
                    </div>
                    <div class="accrodion-regular hx-500">
                        <div id="accordion">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">
                                       <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                       Accordion Heading Title Here
                                       </button>
                                      </h5>
                                </div>
                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion" style="">
                                    <div class="card-body">
                                        <p class="lead"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.</p>
                                        <p> Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.</p>
                                        <a href="#" class="btn btn-secondary">Go somewhere</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end accrodions style one -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- end accrodions style two -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- accrodions style four -->
                <!-- ============================================================== -->
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="section-block">
                        <h5 class="section-title">試験</h5>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end accrodions style four -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- accrodions style two -->
                <!-- ============================================================== -->
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="section-block">
                        <h5 class="section-title">問題選択</h5>
                    </div>
                    <div class="accrodion-outline hx-500">
                        <div id="accordion2">
                            <div class="card">
                                <div class="card-header" id="headingFour">
                                    <h5 class="mb-0">
                                       <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                       Accordion Heading Title Here
                                       </button>
                                      </h5>
                                </div>
                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion2" style="">
                                    <div class="card-body">
                                        <p class="lead"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.</p>
                                        <p> Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.</p>
                                        <a href="#" class="btn btn-secondary">Go somewhere</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end accrodions style two -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- accrodions style three -->
                <!-- ============================================================== -->
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="section-block">
                        <h5 class="section-title">試験問題</h5>
                    </div>
                    <div class="accrodion-regular hx-500">
                        <div id="accordion3">
                            <div class="card">
                                <div class="card-header" id="headingSeven">
                                    <h5 class="mb-0">
                                       <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                         <span class="fas mr-3 fa-angle-down"></span>Accordion Heading Title Here
                                       </button>
                                      </h5>
                                </div>
                                <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion3" style="">
                                    <div class="card-body">
                                        <p class="lead"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.</p>
                                        <p> Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.</p>
                                        <a href="#" class="btn btn-secondary">Go somewhere</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
<script>
    $(document).on('keyup', '#search_card', function () {
        // alert($('#th_check').prop('checked'));
        var filter = $(this).val();
        $("#accordion").find(".collapse").each(function () {
            var title = $(this).find(".lead").text();
            if (title.indexOf(filter) > -1) {
                $(this).parent().parent().css('display', 'block');
            }
            else {
                $(this).parent().parent().css('display', 'none');
            }
        });
    });
</script>
<style>
    .hx-500{
        height: 300px!important;
        overflow: hidden;
        overflow-y: auto;
    }
</style>
@endsection