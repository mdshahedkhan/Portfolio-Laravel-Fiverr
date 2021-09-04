@extends('Backend.Layout.App')
@section('title', 'About Me: '.Auth::user()->name)
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>About Me
            <small>{{ Auth::user()->name }}</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ route('staff.dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">About Me</li>
        </ol>
    </section>
    @include("Error_message")
    <!-- Horizontal Form -->
    <div class="content">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Horizontal Form</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" action="{{ route('staff.home.aboutme.update', base64_encode($aboutme->id)) }}" enctype="multipart/form-data">
                @csrf
                <div class="box-body">
                    <div class="form-group row">
                       <div class="col-md-5">
                           <label for="name" class="col-sm-2 control-label">Name</label>
                           <div class="col-sm-10">
                               <input type="text" class="form-control" name="name" id="name" placeholder="Enter Your Name" value="{{ $aboutme->name }}">
                           </div>
                       </div>
                       <div class="col-md-7">
                           <label for="short_description" class="col-sm-3 control-label">Short Description</label>
                           <div class="col-sm-9">
                               <input type="text" class="form-control" id="short_description" name="short_description" placeholder="Enter Your Short Description" value="{{ $aboutme->short_story }}">
                           </div>
                       </div>
                    </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <a href="{{ URL::previous() }}" class="btn btn-default">Cancel</a>
                    <button type="submit" class="btn btn-info pull-right"><i class="fa fa-edit"></i> Update</button>
                </div>
                <!-- /.box-footer -->
            </form>
        </div>
    </div>
@endsection
