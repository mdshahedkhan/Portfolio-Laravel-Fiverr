<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset('Upload/Profile/'.Auth::user()->image) }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ Auth::user()->name }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li class="{{ ActiveMenu('staff.dashboard') }}">
                <a href="{{ route('staff.dashboard') }}">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>
            {{--<li class="treeview {{ PrefixActive('staff/home/') }}">
                <a href="javascript:;">
                    <i class="fa fa-home"></i> <span>Home</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu" style="display: none;">
                    <li><a href=""><i class="fa fa-circle-o"></i> Meine & CV Download</a></li>
                    <li class=""><a href=""><i class="fa fa-circle-o"></i> Dashboard v2</a></li>

                </ul>
            </li>--}}
            <li class="{{ ActiveMenu('staff.home.service.index') }}">
                <a href="{{ route('staff.home.service.index') }}" >
                    <i class="fa fa-server"></i> <span>Services</span>
                </a>
            </li>
            <li class="{{ ActiveMenu('staff.home.brand.index') }}">
                <a href="{{ route('staff.home.brand.index') }}" >
                    <i class="fa fa-picture-o"></i> <span>Home Brand</span>
                </a>
            </li>
            <li class="{{ ActiveMenu('staff.home.brand.index') }}">
                <a href="{{ route('staff.home.brand.index') }}" >
                    <i class="fa fa-picture-o"></i> <span>Home Brand</span>
                </a>
            </li>
            <li class="treeview ">
                <a href="javascript:;">
                    <i class="fa fa-cog"></i> <span>General Setting</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu" style="display: none;">
                    <li><a href="{{ route('staff.general.index') }}"><i class="fa fa-circle-o"></i> General</a></li>
                </ul>
            </li>
            <li class="btn-outline-danger">
                <a href="javascript:avoid()" onclick="event.preventDefault(); document.getElementById('LogoutForm').submit()">
                    <i class="fa fa-sign-out"></i> <span>Logout</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
