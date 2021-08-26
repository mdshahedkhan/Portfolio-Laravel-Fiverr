@extends('Backend.Layout.App')
@section('title', 'Create Service')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Setting</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">General</a></li>
            <li class="active">Setting</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-md-3">

                <!-- Profile Image -->
                <div class="box box-primary">
                    <div class="box-body box-profile">
                        <img class="profile-user-img img-responsive img-circle" src="{{ asset('Upload/Profile/'.Auth::user()->image) }}" alt="User profile picture">
                        <h3 class="profile-username text-center">{{ Auth::user()->name }}</h3>
                        <p class="text-muted text-center">Supper Admin</p>
                        <ul class="list-group list-group-unbordered">
                            <li class="list-group-item">
                                <b>Followers</b> <a class="pull-right">1,322</a>
                            </li>
                            <li class="list-group-item">
                                <b>Following</b> <a class="pull-right">543</a>
                            </li>
                            <li class="list-group-item">
                                <b>Friends</b> <a class="pull-right">13,287</a>
                            </li>
                        </ul>

                        <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

                <!-- About Me Box -->
            {{--<div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">About Me</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <strong><i class="fa fa-book margin-r-5"></i> Education</strong>

                    <p class="text-muted">
                        B.S. in Computer Science from the University of Tennessee at Knoxville
                    </p>

                    <hr>

                    <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>

                    <p class="text-muted">Malibu, California</p>

                    <hr>

                    <strong><i class="fa fa-pencil margin-r-5"></i> Skills</strong>

                    <p>
                        <span class="label label-danger">UI Design</span>
                        <span class="label label-success">Coding</span>
                        <span class="label label-info">Javascript</span>
                        <span class="label label-warning">PHP</span>
                        <span class="label label-primary">Node.js</span>
                    </p>

                    <hr>

                    <strong><i class="fa fa-file-text-o margin-r-5"></i> Notes</strong>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
                </div>
                <!-- /.box-body -->
            </div>--}}
            <!-- /.box -->
            </div>
            <!-- /.col -->
            <div class="col-md-9">
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#general" data-toggle="tab" aria-expanded="true">General</a></li>
                        <li class=""><a href="#settings" data-toggle="tab" aria-expanded="false">Settings</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="general">
                            <!-- Post -->
                            <form action="{{ route('staff.general.UpdateGeneralSetting') }}" id="UpdateGeneralSetting" method="post" class="form-horizontal">
                                <div class="form-group row">
                                    <label for="title" class="col-sm-2 control-label">Site Title</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="title" name="title" placeholder="Enter Website Title" value="{{ $GeneralSetting->title }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="site_prefix" class="col-sm-2 control-label">Site Prefix</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="site_prefix" name="site_prefix" placeholder="Enter Website Prefix Title" value="{{ $GeneralSetting->prefix }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="meta_description" class="col-sm-2 control-label">Meta Description</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="meta_description" name="meta_description" placeholder="Enter Meta Description" value="{{ $GeneralSetting->meta_description }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="meta_keywords" class="col-sm-2 control-label">Meta Keywords</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="meta_keywords" name="meta_keywords" placeholder="Enter Meta Keywords Example, Laravel, PHP, Javascript, HTML, CSS" value="{{ $GeneralSetting->meta_keyword }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="meta_author" class="col-sm-2 control-label">Meta Author Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="meta_author" name="meta_author" placeholder="Enter Meta author" value="{{ $GeneralSetting->meta_author }}">
                                    </div>
                                </div>
                                <div class="box-footer"></div>
                                <div class="form-group row">
                                    <label for="contact_email" class="col-sm-2 control-label">Contact E-mail</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="contact_email" name="contact_email" placeholder="Enter Contact Mail" value="{{ $GeneralSetting->email }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 control-label">Social Media Links</label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-facebook"></i></span>
                                                    <input type="url" class="form-control" name="facebook_url" placeholder="Enter Your Facebook Page Or Profile Link" value="{{ $GeneralSetting->facebook }}">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-linkedin"></i></span>
                                                    <input type="url" class="form-control" name="linkedin_url" placeholder="Linkedin" value="{{ $GeneralSetting->linkedin }}">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-twitter"></i></span>
                                                    <input type="url" class="form-control" name="twitter_url" placeholder="Twitter" value="{{ $GeneralSetting->twitter }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="logo" class="col-sm-2  mt-4 control-label">Logo</label>
                                    <div class="col-sm-3 mt-4 ">
                                        <input type="file" id="logo" onchange="ReadFileImage(this)" name="logo">
                                    </div>
                                    <div class="col-sm-4">
                                        <img src="{{ asset('Upload/General/'.$GeneralSetting->logo) }}" width="20%" alt="" id="previewImage">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" class="UpdateCondition"> I agree to the
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-danger UpdateBtn" disabled>Update</button>
                                    </div>
                                </div>
                            </form>
                            <!-- /.post -->
                        </div>
                        <!-- /.tab-pane -->

                        <div class="tab-pane" id="settings">
                            <form class="form-horizontal" method="post" action="{{ route('staff.general.userInfoUpdate') }}" id="userInfoUpdate" enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="form-group">
                                    <label for="inputName" class="col-sm-2 control-label">Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputName" name="name" placeholder="Name" value="{{ Auth::user()->name }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail" class="col-sm-2 control-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="inputEmail" placeholder="Email" name="email" value="{{ Auth::user()->email }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputCurrentPass" class="col-sm-2 control-label">Current Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" name="current_password" id="inputCurrentPass" placeholder="Current Password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputNewPassword" class="col-sm-2 control-label">New Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" name="new_password" id="inputNewPassword" placeholder="New Password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="ConfirmPassword" class="col-sm-2 control-label">Confirm Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" name="confirm_password" id="ConfirmPassword" placeholder="Confirm Password">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="image" class="col-sm-2  mt-4 control-label">Profile Image</label>
                                    <div class="col-sm-3 mt-4 ">
                                        <input type="file" id="image" onchange="ReadFileImageProfile(this)" name="image">
                                    </div>
                                    <div class="col-sm-4">
                                        <img src="{{ asset('Upload/Profile/'.Auth::user()->image) }}" width="20%" alt="" id="previewImageProfile">
                                    </div>
                                </div>{{--
                                <div class="form-group">
                                    <label for="inputExperience" class="col-sm-2 control-label">Experience</label>

                                    <div class="col-sm-10">
                                        <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputSkills" class="col-sm-2 control-label">Skills</label>

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
                                    </div>
                                </div>--}}
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" class="UpdateCondition"> are you sure update your info! I agree to the
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-danger UpdateBtn" disabled>Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- /.tab-pane -->
                    </div>
                    <!-- /.tab-content -->
                </div>
                <!-- /.nav-tabs-custom -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

    </section>
    <!-- /.content -->
@endsection
@section('JS')
    <script>
        $('.UpdateCondition').change(function () {
            if (this.checked) {
                $('.UpdateBtn').attr('disabled', false);

            } else {
                $('.UpdateBtn').attr('disabled', true);
            }
        });

        function ReadFileImage(input) {
            if (input.files) {
                const fileLength = input.files.length;
                for (var i = 0; i < fileLength; i++) {
                    const ImageFileReader = new FileReader();
                    ImageFileReader.onload = function (event) {
                        const res = event.target.result;
                        $('#previewImage').attr('src', res);
                    }
                    ImageFileReader.readAsDataURL(input.files[i]);

                }
            }
        }

        function ReadFileImageProfile(input) {
            if (input.files) {
                const fileLength = input.files.length;
                for (var i = 0; i < fileLength; i++) {
                    const ImageFileReader = new FileReader();
                    ImageFileReader.onload = function (event) {
                        const res = event.target.result;
                        $('#previewImageProfile').attr('src', res);
                    }
                    ImageFileReader.readAsDataURL(input.files[i]);

                }
            }
        }
    </script>
@endsection
