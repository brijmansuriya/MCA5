<!-- @extends('layouts.app')
@section('content')
<div id="main_content">
    @include('layouts.sidebar')
    <div class="page">
        <div id="page_top" class="section-body top_dark">
            <div class="container-fluid">
              
            </div>
        </div>

      
        <div class="section-body mt-3">
            <div class="container-fluid">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="Project-OnGoing" role="tabpanel">
                        <div class="row">
                            <?php for($i=0;$i<6;$i++)
                            { ?>
                            <div class="col-lg-6 col-md-12">

                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">New Admin Design</h3>
                                        <div class="card-options">
                                            <label class="custom-switch m-0">
                                                <input type="checkbox" value="1" class="custom-switch-input" checked>
                                                <span class="custom-switch-indicator"></span>
                                            </label>
                                            <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i
                                                    class="fa fa-chevron-up"></i></a>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <span class="tag tag-blue mb-3">Web Design</span>
                                        <p>Aperiam deleniti fugit incidunt, iste, itaque minima neque pariatur
                                            perferendis temporibus!</p>
                                        <div class="row">
                                            <div class="col-5 py-1"><strong>Front End:</strong></div>
                                            <div class="col-7 py-1">Laravel,Angular</div>
                                            <div class="col-5 py-1"><strong>Back End:</strong></div>
                                            <div class="col-7 py-1">Mysql,SQLite</div>
                                            <div class="col-5 py-1"><strong>Total Modules:</strong></div>
                                            <div class="col-7 py-1"><strong>23</strong></div>

                                            <div class="col-5 py-1"><strong>Bug:</strong></div>
                                            <div class="col-7 py-1"><strong>5</strong></div>
                                            <div class="col-5 py-1"><strong>Team:</strong></div>
                                            <div class="col-7 py-1">
                                                <div class="avatar-list avatar-list-stacked">
                                                    <img class="avatar avatar-sm" src="assets/images/xs/avatar1.jpg"
                                                        data-toggle="tooltip" title=""
                                                        data-original-title="Avatar Name" />
                                                    <img class="avatar avatar-sm" src="assets/images/xs/avatar2.jpg"
                                                        data-toggle="tooltip" title=""
                                                        data-original-title="Avatar Name" />
                                                    <img class="avatar avatar-sm" src="assets/images/xs/avatar3.jpg"
                                                        data-toggle="tooltip" title=""
                                                        data-original-title="Avatar Name" />
                                                    <img class="avatar avatar-sm" src="assets/images/xs/avatar4.jpg"
                                                        data-toggle="tooltip" title=""
                                                        data-original-title="Avatar Name" />
                                                    <img class="avatar avatar-sm" src="assets/images/xs/avatar5.jpg"
                                                        data-toggle="tooltip" title=""
                                                        data-original-title="Avatar Name" />
                                                    <span class="avatar avatar-sm">+8</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="clearfix">
                                            <div class="float-left"><strong>15%</strong></div>
                                            <div class="float-right"><small class="text-muted">Progress</small></div>
                                        </div>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar bg-red" role="progressbar" style="width: 15%"
                                                aria-valuenow="36" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                
               

                </div>
            </div>
        </div>
        <div class="section-body">
        @include('layouts.footar')
        </div>
    </div>
</div>
<!-- <script src="assets/bundles/lib.vendor.bundle.js"></script>
<script src="assets/js/core.js"></script> -->
</body>
</html>
@endsection -->