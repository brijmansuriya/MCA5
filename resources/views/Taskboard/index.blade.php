@extends('layouts.app')
@section('content')
<div id="main_content">
    @include('layouts.sidebar')
    <div class="page">
        @include('layouts.tophead')
        <div class="section-body">
            <div class="container-fluid">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="list" role="tabpanel">
                        <div class="row clearfix">
                            <?php
                            // print_r($Taskboard);
                            foreach ($Taskboard as $post) { ?>
                                <a href="{{ URL('Taskboard/addmodule/'.$post->id)}}">
                            <div class="col-xl-4 col-lg-4 col-md-6 mt-4">
                                <div class="card">
                                    <div class="card-body text-center ribbon">
                                        <img class="rounded-circle img-thumbnail w100" src="assets/Logo.png" alt="">
                                        <h6 class="mt-3 mb-0">{{ $post->project_title }}</h6>
                                        <div class="row text-center mt-4">
                                        </div>
                                    </div>
                                </div>  </a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section-body">
    @include('layouts.footar')
</div>


</body>

</html>
@endsection