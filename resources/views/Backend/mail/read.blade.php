@extends('Backend.Layout.App')
@section('title', 'Read Mail')
@section('content')
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>Read Mail</h1>
            <ol class="breadcrumb">
                <li><a href="{{ route('staff.dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Mailbox</li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-3">
                    <a href="compose.html" class="btn btn-primary btn-block margin-bottom">Compose</a>
                    <div class="box box-solid">
                        <div class="box-header with-border">
                            <h3 class="box-title">Folders</h3>
                            <div class="box-tools">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="box-body no-padding">
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="{{ route('staff.mail.index') }}">
                                        <i class="fa fa-inbox"></i>
                                        @php
                                        $AllMails = \App\Models\ContactMail::all();
                                        @endphp
                                        Inbox<span class="label label-primary pull-right">{{ $AllMails->count() }}</span>
                                    </a>
                                </li>
                                <li><a href="#"><i class="fa fa-file-text-o"></i> Drafts</a></li>
                                <li><a href="#"><i class="fa fa-filter"></i> Junk <span class="label label-warning pull-right">65</span></a></li>
                                <li><a href="#"><i class="fa fa-trash-o"></i> Trash</a></li>
                            </ul>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /. box -->
                </div>
                <!-- /.col -->
                <div class="col-md-9">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Read Mail</h3>
                            {{--<div class="box-tools pull-right">
                                <a href="#" class="btn btn-box-tool" data-toggle="tooltip" title="Previous"><i class="fa fa-chevron-left"></i></a>
                                <a href="#" class="btn btn-box-tool" data-toggle="tooltip" title="Next"><i class="fa fa-chevron-right"></i></a>
                            </div>--}}
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body no-padding">
                            <div class="mailbox-read-info">
                                <h3><b>Subject:</b> {{ $ContactMail->subject }}</h3>
                                <h5>From: {{ $ContactMail->email }}
                                    <span class="mailbox-read-time pull-right">{{ date("d-M-Y   : h:i:s", strtotime($ContactMail->created_at)) }}</span></h5>
                                <h5>Phone: {{ $ContactMail->phone_number }}</h5>
                            </div>
                            <!-- /.mailbox-controls -->
                            <div class="mailbox-read-message">
                                {{ $ContactMail->message }}
                                <br>
                                <br>
                                <p>Thanks,<br>{{ $ContactMail->name }}</p>
                            </div>
                            <!-- /.mailbox-read-message -->
                        </div>
                        <!-- /.box-footer -->
                        {{--<div class="box-footer">
                            <div class="pull-right">
                                <button type="button" class="btn btn-default"><i class="fa fa-reply"></i> Reply</button>
                                <button type="button" class="btn btn-default"><i class="fa fa-share"></i> Forward</button>
                            </div>
                            <button type="button" class="btn btn-default"><i class="fa fa-trash-o"></i> Delete</button>
                            <button type="button" class="btn btn-default"><i class="fa fa-print"></i> Print</button>
                        </div>--}}
                        <!-- /.box-footer -->
                    </div>
                    <!-- /. box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
@endsection
@section('CSS')
@endsection

@section('JS')

@endsection
