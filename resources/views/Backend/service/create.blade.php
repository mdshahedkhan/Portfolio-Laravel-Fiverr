@extends('Backend.Layout.App')
@section('title', 'Create Service')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Service<small>it all starts here</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="javascript:avoid(0)">Home</a></li>
            <li class="active">Create Service</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="col-md-8 col-md-offset-2">
            <!-- Default box -->
            <div class="box box-primary col-md-6">
                <div class="box-header with-border">
                    <div class="col-md-6">
                        <h3 class="box-title">Create Service Form</h3>
                    </div>
                    <div class="col-md-6 text-right">
                        <a href="" class="btn btn-primary"><i class="fa fa-list"></i> Back</a>
                    </div>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="post" class="col-md-10 col-md-offset-1" action="{{ route('staff.home.service.create') }}">
                    @csrf
                    <div class="box-body">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title">
                        </div>
                        <div class="form-group">
                            <label for="sub_title">Sub Title</label>
                            <input type="text" class="form-control" id="title" name="sub_title" placeholder="Title">
                        </div>
                        <div class="form-group">
                            <label for="service_icon">Icon</label>
                            <input type="file" id="service_icon" name="service_icon">
                        </div>
                        <div class="form-group">
                            <label>
                                <input type="radio" name="status" value="active" class="flat-red" checked> Active
                            </label>
                            <label>
                                <input type="radio" name="status" value="inactive" class="flat-green"> Inactive
                            </label>
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
            <!-- /.box -->
        </div>

    </section>
    <!-- /.content -->
@endsection
@section('CSS')
    <link rel="stylesheet" href="{{ asset('asset/backend/plugins/iCheck/all.css') }}">
@endsection
@section('JS')
    <script src="{{ asset('asset/backend/plugins/iCheck/icheck.min.js') }}"></script>
    <script>

        //iCheck for checkbox and radio inputs
        $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
            checkboxClass: 'icheckbox_minimal-blue',
            radioClass   : 'iradio_minimal-blue'
        })
        //Red color scheme for iCheck
        $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
            checkboxClass: 'icheckbox_minimal-red',
            radioClass   : 'iradio_minimal-red'
        })
        //Flat red color scheme for iCheck
        $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
            checkboxClass: 'icheckbox_flat-green',
            radioClass   : 'iradio_flat-green'
        })
        $('input[type="checkbox"].flat-green, input[type="radio"].flat-green').iCheck({
            checkboxClass: 'icheckbox_flat-red',
            radioClass   : 'iradio_flat-red'
        })
    </script>
@endsection
