@extends('Backend.Layout.App')
@section('title', 'About Me: '.$AboutMe->name)
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
    <section class="invoice">
        <!-- title row -->
        <div class="row">
            <div class="col-xs-12">
                <h2 class="page-header">
                    <i class="fa fa-address-card"></i> About Me
                </h2>
            </div>
            <!-- /.col -->
        </div>
        <!-- info row -->
        <div class="row invoice-info">
            <div class="col-sm-1 invoice-col">
                <img src="{{ $AboutMe->avatar }}" class="img-fluid img-thumbnail" alt="{{ $AboutMe->name }}">
            </div>
            <div class="col-sm-4 invoice-col">
                About Me
                <address>
                    <strong>{{ $AboutMe->name }}</strong><br>
                    @php
                        $Story = explode(',', $AboutMe->short_story);
                    @endphp
                    @foreach ($Story as $srtStory)
                        {{ $srtStory }}<br>
                    @endforeach
                </address>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

        <!-- Table row -->
        <div class="row">
            <div class="col-xs-12 table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Signature</th>
                            <th>Name</th>
                            <th>Short Story</th>
                            <th>Email Address:</th>
                            <th>Mobile:</th>
                            <th>Resume / CV</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><img src="{{ $AboutMe->signature }}" width="70px" alt=""></td>
                            <td>{{ $AboutMe->name }}</td>
                            <td>{{ $AboutMe->short_story }}</td>
                            <td><a href="mailto:{{ $AboutMe->email_address }}">{{ $AboutMe->email_address }}</a></td>
                            <td><a href="tel:{{ $AboutMe->mobile }}">{{ $AboutMe->mobile }}</a></td>
                            <td><a href="" class="btn btn-success"><i class="fa fa-eye"></i> View Resume</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- /.col -->
        </div>
        <div class="row">
            <div class="col-xs-12">
                <textarea id="" readonly cols="30" rows="10" class="form-control">{{ $AboutMe->about_me }}</textarea>
            </div>
        </div>
        <br>
        <!-- this row will not appear when printing -->
        <div class="row no-print">
            <div class="col-xs-12">
                <a href="{{ route('staff.home.aboutme.edit', base64_encode($AboutMe->id)) }}" class="btn btn-success pull-right"><i class="fa fa-edit"></i> Edit</a>
            </div>
        </div>
    </section>
@endsection
@section('CSS')
    <link rel="stylesheet" href="{{ asset('asset/backend/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
    <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
@endsection

@section('JS')
@endsection
