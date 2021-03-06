@extends('layouts.app')
@section('content')
<style>
    /* .hide {
        display: none;
        
    } */
</style>
<div id="main_content">
    @include('layouts.sidebar')
    <div class="page">
        @include('layouts.tophead')
        <div class="section-body">
            <div class="container">
                <div class="d-flex flex-row flex-nowrap overflow-auto mt-4">
                        <?php
                        // print_r($moduledata);
                        foreach ($moduledata as $post) { ?>
                            <div class="col-lg-3 4">         
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">{{ $post->name}}</h3>
                                <div class="card-options">
                                    <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i
                                            class="fa fa-chevron-up"></i></a>
                                </div>
                            </div>
                            <div class="card-bodybg">
                            <div class="row">
                                <div class="col-12">
                                    <a href="{{ URL('Taskboard/addmodule/'.$id)}}">
                                        <div class="col-12 py-1 shadow-sm p-2 mb-2 bg-white rounded"><strong>Parches</strong><br>
                                            <span class="badge-text js-checkitems-badge-text">2/15</span></a>
                                            <span class="badge-text js-checkitems-badge-text pull-right" > <i class="fa fa-paperclip" aria-hidden="true"></i>2</span></div>
                                       
                                    <a href="project-todo.php">
                                        <div class="col-12 py-1 shadow-sm p-2 mb-2 bg-white rounded"><strong>Client</strong></div>
                                    </a> 
                                    <a href="project-todo.php">
                                        <div class="col-12 py-1 shadow-sm p-2 mb-2 bg-white rounded"><strong>Sales</strong></div>
                                    </a>   
                                        <a href="project-todo.php">
                                        <div class="col-12 py-1 shadow-sm p-2 mb-2 bg-white rounded"><strong>Order</strong></div>
                                    </a> 
                                </div>
                            </div>
                                <form action="{{URL('Taskboard/addtask/')}}" id='ntdformhide' class="hide">
                                    <div class='form-group'>
                                        <input type="text" class="form-control">
                                        <button type="submit" value="submit" class="btn btn-primary mt-1 ml-0">Add</button>
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer" id='ntdfooterhide'>
                                <a class="open-card-composer js-open-card-composer" href="javascript:void(0)">
                                <!-- <span class="icon-sm icon-add"></span> -->
                                <span class="js-add-a-card">Add a card</span></a>
                            </div>
                        </div>
                    </div>
                 <?php } ?>
                </div>
                <div class="col-lg-3">
                    <div class="card cardbox">
                        <div class="card-header">
                            <h3 class="card-title">In Devlopment</h3>
                            <div class="card-options">

                                <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i
                                        class="fa fa-chevron-up"></i></a>
                            </div>
                        </div>
                        <div class="card-body">
                            <!-- <div class="row">
                                        <div class="col-12 py-1"><strong>Front End:</strong></div>
                                        <div class="col-12 py-1"><strong>Back End:</strong></div>
                                        <div class="col-12 py-1"><strong>Total Modules:</strong></div>
                                        <div class="col-12 py-1"><strong>Bug:</strong></div>
                                    </div> -->
                            <form action="" id='idformhide' class="hide">
                                <div class='form-group'>
                                    <input type="text" class="form-control">
                                    <input type="submit" value="add" class="btn btn-primary mt-1 ml-0">
                                </div>
                            </form>
                        </div>
                        <div class="card-footer" id='idfooterhide'>
                            <a class="open-card-composer js-open-card-composer" href="#"><span
                                    class="icon-sm icon-add"></span><span class="js-add-a-card">Add a
                                    card</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card cardbox">
                        <div class="card-header">
                            <h3 class="card-title">Need To Test</h3>
                            <div class="card-options">

                                <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i
                                        class="fa fa-chevron-up"></i></a>
                            </div>
                        </div>
                        <div class="card-body">
                            <!-- <div class="row">
                                        <div class="col-12 py-1"><strong>Front End:</strong></div>
                                        <div class="col-12 py-1"><strong>Back End:</strong></div>
                                        <div class="col-12 py-1"><strong>Total Modules:</strong></div>
                                        <div class="col-12 py-1"><strong>Bug:</strong></div>
                                    </div> -->
                            <form action="" id='nttformhide' class="hide">
                                <div class='form-group'>
                                    <input type="text" class="form-control">
                                    <input type="submit" value="add" class="btn btn-primary mt-1 ml-0">
                                </div>
                            </form>
                        </div>
                        <div class="card-footer" id='nttfooterhide'>
                            <a class="open-card-composer js-open-card-composer" href="#"><span
                                    class="icon-sm icon-add"></span><span class="js-add-a-card">Add a
                                    card</span></a>
                        </div>

                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card cardbox">
                        <div class="card-header">
                            <h3 class="card-title">Under Testing</h3>
                            <div class="card-options">

                                <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i
                                        class="fa fa-chevron-up"></i></a>
                            </div>
                        </div>
                        <div class="card-body">
                            <!-- <div class="row">
                                        <div class="col-12 py-1"><strong>Front End:</strong></div>
                                        <div class="col-12 py-1"><strong>Back End:</strong></div>
                                        <div class="col-12 py-1"><strong>Total Modules:</strong></div>
                                        <div class="col-12 py-1"><strong>Bug:</strong></div>
                                    </div> -->
                            <form action="" id='utformhide' class="hide">
                                <div class='form-group'>
                                    <input type="text" class="form-control">
                                    <input type="submit" value="add" class="btn btn-primary mt-1 ml-0">
                                </div>
                            </form>
                        </div>
                        <div class="card-footer" id='utfooterhide'>
                            <a class="open-card-composer js-open-card-composer" href="#"><span
                                    class="icon-sm icon-add"></span><span class="js-add-a-card">Add a
                                    card</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card cardbox">
                        <div class="card-header">
                            <h3 class="card-title">Upload To Production</h3>
                            <div class="card-options">

                                <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i
                                        class="fa fa-chevron-up"></i></a>
                            </div>
                        </div>
                        <div class="card-body">
                            <!-- <div class="row">
                                        <div class="col-12 py-1"><strong>Front End:</strong></div>
                                        <div class="col-12 py-1"><strong>Back End:</strong></div>
                                        <div class="col-12 py-1"><strong>Total Modules:</strong></div>
                                        <div class="col-12 py-1"><strong>Bug:</strong></div>
                                    </div> -->
                            <form action="" id='utpformhide' class="hide">
                                <div class='form-group'>
                                    <input type="text" class="form-control">
                                    <input type="submit" value="add" class="btn btn-primary mt-1 ml-0">
                                </div>
                            </form>
                        </div>
                        <div class="card-footer" id='utpfooterhide'>
                            <a class="open-card-composer js-open-card-composer" href="#"><span
                                    class="icon-sm icon-add"></span><span class="js-add-a-card">Add a
                                    card</span></a>
                        </div>

                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card cardbox">
                        <div class="card-header">
                            <h3 class="card-title">Production Testing</h3>
                            <div class="card-options">
                                <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i
                                        class="fa fa-chevron-up"></i></a>
                            </div>
                        </div>
                        <div class="card-body">
                            <!-- <div class="row">
                                        <div class="col-12 py-1"><strong>Front End:</strong></div>
                                        <div class="col-12 py-1"><strong>Back End:</strong></div>
                                        <div class="col-12 py-1"><strong>Total Modules:</strong></div>
                                        <div class="col-12 py-1"><strong>Bug:</strong></div>
                                    </div> -->
                            <form action="" id='ptformhide' class="hide">
                                <div class='form-group'>
                                    <input type="text" class="form-control">
                                    <input type="submit" value="add" class="btn btn-primary mt-1 ml-0">
                                </div>
                            </form>
                        </div>
                        <div class="card-footer" id='ptfooterhide'>
                            <a class="open-card-composer js-open-card-composer" href="#"><span
                                    class="icon-sm icon-add"></span><span class="js-add-a-card">Add a
                                    card</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card cardbox">
                        <div class="card-header">
                            <h3 class="card-title">Deployed</h3>
                            <div class="card-options">

                                <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i
                                        class="fa fa-chevron-up"></i></a>
                            </div>
                        </div>
                        <div class="card-body">
                            <!-- <div class="row">
                                        <div class="col-12 py-1"><strong>Front End:</strong></div>
                                        <div class="col-12 py-1"><strong>Back End:</strong></div>
                                        <div class="col-12 py-1"><strong>Total Modules:</strong></div>
                                        <div class="col-12 py-1"><strong>Bug:</strong></div>
                                    </div> -->
                            <form action="" id='dformhide' class="hide">
                                <div class='form-group'>
                                    <input type="text" class="form-control">
                                    <input type="submit" value="add" class="btn btn-primary mt-1 ml-0">
                                </div>
                            </form>
                        </div>
                        <div class="card-footer" id='dfooterhide'>
                            <a class="open-card-composer js-open-card-composer" href="#"><span
                                    class="icon-sm icon-add"></span><span class="js-add-a-card">Add a
                                    card</span></a>
                        </div>
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
<script>
    $(document).ready(function() {
        $('#ntdfooterhide').click(function(){
            $('#ntdformhide').removeClass('hide')
            $('#ntdfooterhide').addClass('hide')
        });

    });

    $(document).ready(function() {
        $('#idfooterhide').click(function(){
            $('#idformhide').removeClass('hide')
            $('#idfooterhide').addClass('hide')
        });

    });

    $(document).ready(function() {
        $('#nttfooterhide').click(function(){
            $('#nttformhide').removeClass('hide')
            $('#nttfooterhide').addClass('hide')
        });

    });
    $(document).ready(function() {
        $('#utfooterhide').click(function(){
            $('#utformhide').removeClass('hide')
            $('#utfooterhide').addClass('hide')
        });

    });
    $(document).ready(function() {
        $('#utpfooterhide').click(function(){
            $('#utpformhide').removeClass('hide')
            $('#utpfooterhide').addClass('hide')
        });

    });
    $(document).ready(function() {
        $('#ptfooterhide').click(function(){
            $('#ptformhide').removeClass('hide')
            $('#ptfooterhide').addClass('hide')
        });

    });
    $(document).ready(function() {
        $('#dfooterhide').click(function(){
            $('#dformhide').removeClass('hide')
            $('#dfooterhide').addClass('hide')
        });

    });
</script>
</body>

</html>
@endsection