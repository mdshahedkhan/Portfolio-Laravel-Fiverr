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
    @include("Error_message")
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
                            <th width="50px">S.N</th>
                            <th width="80px">Service Icon</th>
                            <th>Title</th>
                            <th width="600px">Sub Title</th>
                            <th>Author</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($services->count())
                            @foreach($services as $service)
                                <tr class="removeItem{{ $service->id }}">
                                    <td>{{ 1+$loop->index }}</td>
                                    <td><img src="{{ asset('Upload/ServiceIcon/'.$service->image) }}" width="30px" alt=""></td>
                                    <td>{{ ucwords($service->title) }}</td>
                                    <td>{{ $service->sub_title }}</td>
                                    <td>{{ $service->user->name }}</td>
                                    <td><input type="checkbox" id="ChangeStatus" data-on="Active" data-id="{{ base64_encode($service->id) }}" data-off="Inactive" data-size="sm" data-onstyle="success" data-offstyle="danger"
                                               data-toggle="toggle" {{ $service->status == 'active' ? 'checked':'' }}></td>
                                    <td class="text-center">
                                        {{--<a href="" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>--}}
                                        <a href="{{ route('staff.home.service.edit', base64_encode($service->id)) }}" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
                                        <a href="javascript:avoid(0)" onclick="DeleteMethod('{{ route('staff.home.service.destroy', base64_encode($service->id)) }}', '{{ $service->id }}')" class="btn btn-danger btn-sm" ><i
                                                class="fa fa-trash-o"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="7" class="text-center">Recode Not Found.</td>
                            </tr>
                    @endif
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
    <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
@endsection

@section('JS')
    <script src="{{ asset('asset/backend/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('asset/backend/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
    <script>
        $(function () {
            $('#example1').DataTable()
            $('#service').DataTable({
                'paging': true,
                'lengthChange': false,
                'searching': false,
                'ordering': true,
                'info': true,
                'autoWidth': false
            })
        });
        $(document).on('change', '#ChangeStatus', function (event) {
            event.preventDefault();
            let id = $(this).data('id');
            if (this.checked) {
                var status = 'active';
            } else {
                var status = "inactive";
            }
            $.ajax({
                url: "service/change-status/" + id + '/' + status,
                type: "GET",
                success: function (data) {
                    if (data.statusCode == 200) {
                        toastr.success(data.message)
                    }
                }
            });
        });




    </script>
@endsection
