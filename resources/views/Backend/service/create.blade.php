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
            @include('Error_message')
            <!-- Default box -->
            <div class="box box-primary col-md-6">
                <div class="box-header with-border">
                    <div class="col-md-6">
                        <h3 class="box-title">Create Service Form</h3>
                    </div>
                    <div class="col-md-6 text-right">
                        <a href="{{ route('staff.home.service.index') }}" class="btn btn-primary"><i class="fa fa-list"></i> Service Management</a>
                    </div>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="post" class="col-md-10 col-md-offset-1" enctype="multipart/form-data" action="{{ route('staff.home.service.create') }}">
                    @csrf
                    <div class="box-body">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control is-invalid @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') }}" placeholder="Enter Title">
                            @error('title') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="sub_title">Sub Title</label>
                            <input type="text" class="form-control @error('sub_title') is-invalid @enderror" id="sub_title" value="{{ old('sub_title') }}" name="sub_title" placeholder="Title">
                            @error('sub_title') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="service_icon">Service Icon</label>
                            <input type="file" id="service_icon" name="service_icon">
                            @error('service_icon') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-5">
                                    <label for="status" class="control-label">Status</label>
                                </div>
                                <div class="col-md-6">
                                    <label>
                                        <input type="radio" name="status" value="active" class="flat-red" checked> Active
                                    </label>
                                    <label>
                                        <input type="radio" name="status" value="inactive" class="flat-green"> Inactive
                                    </label>
                                </div>
                            </div>
                            @error('status') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Create</button>
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
