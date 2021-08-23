@extends('Backend.Layout.App')
@section('title', 'Services')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Service<small>it all starts here</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="javascript:avoid(0)">Home</a></li>
            <li class="active">Manage Service</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box">
            <div class="box-header">
                <div class="col-md-6">
                    <h3 class="box-title">Manage All Service</h3>
                </div>
                <div class="text-right">
                    <a href="{{ route('staff.home.service.create') }}" class="btn btn-primary text-right"><i class="fa fa-plus-circle"></i> Add New Service</a>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="service" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>S.N</th>
                            <th>Title</th>
                            <th>Sub Title</th>
                            <th>Service Icon</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Serial</td>
                            <td>Service</td>
                            <td>Subtitle</td>
                            <td>Image</td>
                            <td class="text-center">
                                <a href="" class="btn btn-info btn-xs"><i class="fa fa-eye"></i></a>
                                <a href="" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>
                                <a href="" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></a>
                            </td>
                        </tr>
                </table>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
        <!-- /.box -->

    </section>
    <!-- /.content -->
@endsection
@section('CSS')
    <link rel="stylesheet" href="{{ asset('asset/backend/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@endsection

@section('JS')
    <script src="{{ asset('asset/backend/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('asset/backend/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
    <script>
        $(function () {
            $('#example1').DataTable()
            $('#service').DataTable({
                'paging'      : true,
                'lengthChange': false,
                'searching'   : false,
                'ordering'    : true,
                'info'        : true,
                'autoWidth'   : false
            })
        })
    </script>
@endsection
