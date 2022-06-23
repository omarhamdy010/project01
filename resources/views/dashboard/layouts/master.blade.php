<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard</title>

    <style>
        .parsley-errors-list li{
            color: red;
            list-style: none;
        }
    </style>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('assets/plugins/fontawesome-free/css/all.min.css')}}">
{{--    bootstrap 4.6 cdn--}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <!-- Ionicons -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.5.1/sweetalert2.min.css">

    <link rel="stylesheet" href="{{asset('assets/css/adminlte.min.css')}}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset('assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">

    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/css/select2.min.css" rel="stylesheet"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/js/select2.min.js"></script>

    <!-- summernote -->
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="{{asset('assets/img/AdminLTELogo.png')}}" alt="AdminLTELogo" height="60"
             width="60">
    </div>

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="index3.html" class="nav-link">Home</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link">Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
            <div>
                <ul>
                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                        <li>
                            <a rel="alternate" hreflang="{{ $localeCode }}"
                               href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                {{ $properties['native'] }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- Navbar Search -->
            <li class="nav-item">
                <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                    <i class="fas fa-search"></i>
                </a>
                <div class="navbar-search-block">
                    <form class="form-inline">
                        <div class="input-group input-group-sm">
                            <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                   aria-label="Search">
                            <div class="input-group-append">
                                <button class="btn btn-navbar" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </li>

            <!-- Messages Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-comments"></i>
                    <span class="badge badge-danger navbar-badge">3</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <img src="" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    Brad Diesel
                                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">Call me whenever you can...</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <img src="" alt="User Avatar" class="img-size-50 img-circle mr-3">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    John Pierce
                                    <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">I got your message bro</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <img src="" alt="User Avatar" class="img-size-50 img-circle mr-3">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    Nora Silvester
                                    <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">The subject goes here</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                </div>
            </li>
            <!-- Notifications Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-bell"></i>
                    <span class="badge badge-warning navbar-badge">15</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <span class="dropdown-item dropdown-header">15 Notifications</span>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-envelope mr-2"></i> 4 new messages
                        <span class="float-right text-muted text-sm">3 mins</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-users mr-2"></i> 8 friend requests
                        <span class="float-right text-muted text-sm">12 hours</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-file mr-2"></i> 3 new reports
                        <span class="float-right text-muted text-sm">2 days</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                    <i class="fas fa-expand-arrows-alt"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                    <i class="fas fa-th-large"></i>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="index3.html" class="brand-link">
            <img src="{{asset('assets/img/AdminLTELogo.png')}}" alt="AdminLTE Logo"
                 class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">AdminLTE 3</span>
        </a>

        <!-- Sidebar -->
    @include('dashboard.layouts.sidebar')
    <!-- /.sidebar -->
    </aside>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <!-- Content Header (Page header) -->
    {{--            <div class="content-header">--}}
    {{--                <div class="container-fluid">--}}
    {{--                    <div class="row mb-2">--}}
    {{--                        <div class="col-sm-6">--}}
    {{--                            <h1 class="m-0">Dashboard</h1>--}}
    {{--                        </div><!-- /.col -->--}}
    {{--                        <div class="col-sm-6">--}}
    {{--                            <ol class="breadcrumb float-sm-right">--}}
    {{--                                <li class="breadcrumb-item"><a href="#">Home</a></li>--}}
    {{--                                <li class="breadcrumb-item active">Dashboard v1</li>--}}
    {{--                            </ol>--}}
    {{--                        </div><!-- /.col -->--}}
    {{--                    </div><!-- /.row -->--}}
    {{--                </div><!-- /.container-fluid -->--}}
    {{--            </div>--}}
    <!-- /.content-header -->

        <!-- Main content -->
    {{--            <section class="content">--}}
    @yield('content')

    {{--                <div class="container-fluid">--}}
    {{--                    <!-- Small boxes (Stat box) -->--}}
    {{--                    <div class="row">--}}
    {{--                        <div class="col-lg-3 col-6">--}}
    {{--                            <!-- small box -->--}}
    {{--                            <div class="small-box bg-info">--}}
    {{--                                <div class="inner">--}}
    {{--                                    <h3>150</h3>--}}

    {{--                                    <p>New Orders</p>--}}
    {{--                                </div>--}}
    {{--                                <div class="icon">--}}
    {{--                                    <i class="ion ion-bag"></i>--}}
    {{--                                </div>--}}
    {{--                                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <!-- ./col -->--}}
    {{--                        <div class="col-lg-3 col-6">--}}
    {{--                            <!-- small box -->--}}
    {{--                            <div class="small-box bg-success">--}}
    {{--                                <div class="inner">--}}
    {{--                                    <h3>53<sup style="font-size: 20px">%</sup></h3>--}}

    {{--                                    <p>Bounce Rate</p>--}}
    {{--                                </div>--}}
    {{--                                <div class="icon">--}}
    {{--                                    <i class="ion ion-stats-bars"></i>--}}
    {{--                                </div>--}}
    {{--                                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <!-- ./col -->--}}
    {{--                        <div class="col-lg-3 col-6">--}}
    {{--                            <!-- small box -->--}}
    {{--                            <div class="small-box bg-warning">--}}
    {{--                                <div class="inner">--}}
    {{--                                    <h3>44</h3>--}}

    {{--                                    <p>User Registrations</p>--}}
    {{--                                </div>--}}
    {{--                                <div class="icon">--}}
    {{--                                    <i class="ion ion-person-add"></i>--}}
    {{--                                </div>--}}
    {{--                                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <!-- ./col -->--}}
    {{--                        <div class="col-lg-3 col-6">--}}
    {{--                            <!-- small box -->--}}
    {{--                            <div class="small-box bg-danger">--}}
    {{--                                <div class="inner">--}}
    {{--                                    <h3>65</h3>--}}

    {{--                                    <p>Unique Visitors</p>--}}
    {{--                                </div>--}}
    {{--                                <div class="icon">--}}
    {{--                                    <i class="ion ion-pie-graph"></i>--}}
    {{--                                </div>--}}
    {{--                                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <!-- ./col -->--}}
    {{--                    </div>--}}
    {{--                    <!-- /.row -->--}}
    {{--                    <!-- Main row -->--}}
    {{--                    <div class="row">--}}
    {{--                        <!-- Left col -->--}}
    {{--                        <section class="col-lg-7 connectedSortable">--}}
    {{--                            <!-- Custom tabs (Charts with tabs)-->--}}
    {{--                            <div class="card">--}}
    {{--                                <div class="card-header">--}}
    {{--                                    <h3 class="card-title">--}}
    {{--                                        <i class="fas fa-chart-pie mr-1"></i>--}}
    {{--                                        Sales--}}
    {{--                                    </h3>--}}
    {{--                                    <div class="card-tools">--}}
    {{--                                        <ul class="nav nav-pills ml-auto">--}}
    {{--                                            <li class="nav-item">--}}
    {{--                                                <a class="nav-link active" href="#revenue-chart" data-toggle="tab">Area</a>--}}
    {{--                                            </li>--}}
    {{--                                            <li class="nav-item">--}}
    {{--                                                <a class="nav-link" href="#sales-chart" data-toggle="tab">Donut</a>--}}
    {{--                                            </li>--}}
    {{--                                        </ul>--}}
    {{--                                    </div>--}}
    {{--                                </div><!-- /.card-header -->--}}
    {{--                                <div class="card-body">--}}
    {{--                                    <div class="tab-content p-0">--}}
    {{--                                        <!-- Morris chart - Sales -->--}}
    {{--                                        <div class="chart tab-pane active" id="revenue-chart"--}}
    {{--                                             style="position: relative; height: 300px;">--}}
    {{--                                            <canvas id="revenue-chart-canvas" height="300" style="height: 300px;"></canvas>--}}
    {{--                                        </div>--}}
    {{--                                        <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;">--}}
    {{--                                            <canvas id="sales-chart-canvas" height="300" style="height: 300px;"></canvas>--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                </div><!-- /.card-body -->--}}
    {{--                            </div>--}}
    {{--                            <!-- /.card -->--}}

    {{--                            <!-- DIRECT CHAT -->--}}
    {{--                            <div class="card direct-chat direct-chat-primary">--}}
    {{--                                <div class="card-header">--}}
    {{--                                    <h3 class="card-title">Direct Chat</h3>--}}

    {{--                                    <div class="card-tools">--}}
    {{--                                        <span title="3 New Messages" class="badge badge-primary">3</span>--}}
    {{--                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">--}}
    {{--                                            <i class="fas fa-minus"></i>--}}
    {{--                                        </button>--}}
    {{--                                        <button type="button" class="btn btn-tool" title="Contacts" data-widget="chat-pane-toggle">--}}
    {{--                                            <i class="fas fa-comments"></i>--}}
    {{--                                        </button>--}}
    {{--                                        <button type="button" class="btn btn-tool" data-card-widget="remove">--}}
    {{--                                            <i class="fas fa-times"></i>--}}
    {{--                                        </button>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                                <!-- /.card-header -->--}}
    {{--                                <div class="card-body">--}}
    {{--                                    <!-- Conversations are loaded here -->--}}
    {{--                                    <div class="direct-chat-messages">--}}
    {{--                                        <!-- Message. Default to the left -->--}}
    {{--                                        <div class="direct-chat-msg">--}}
    {{--                                            <div class="direct-chat-infos clearfix">--}}
    {{--                                                <span class="direct-chat-name float-left">Alexander Pierce</span>--}}
    {{--                                                <span class="direct-chat-timestamp float-right">23 Jan 2:00 pm</span>--}}
    {{--                                            </div>--}}
    {{--                                            <!-- /.direct-chat-infos -->--}}
    {{--                                            <img class="direct-chat-img" src="dist/img/user1-128x128.jpg" alt="message user image">--}}
    {{--                                            <!-- /.direct-chat-img -->--}}
    {{--                                            <div class="direct-chat-text">--}}
    {{--                                                Is this template really for free? That's unbelievable!--}}
    {{--                                            </div>--}}
    {{--                                            <!-- /.direct-chat-text -->--}}
    {{--                                        </div>--}}
    {{--                                        <!-- /.direct-chat-msg -->--}}

    {{--                                        <!-- Message to the right -->--}}
    {{--                                        <div class="direct-chat-msg right">--}}
    {{--                                            <div class="direct-chat-infos clearfix">--}}
    {{--                                                <span class="direct-chat-name float-right">Sarah Bullock</span>--}}
    {{--                                                <span class="direct-chat-timestamp float-left">23 Jan 2:05 pm</span>--}}
    {{--                                            </div>--}}
    {{--                                            <!-- /.direct-chat-infos -->--}}
    {{--                                            <img class="direct-chat-img" src="dist/img/user3-128x128.jpg" alt="message user image">--}}
    {{--                                            <!-- /.direct-chat-img -->--}}
    {{--                                            <div class="direct-chat-text">--}}
    {{--                                                You better believe it!--}}
    {{--                                            </div>--}}
    {{--                                            <!-- /.direct-chat-text -->--}}
    {{--                                        </div>--}}
    {{--                                        <!-- /.direct-chat-msg -->--}}

    {{--                                        <!-- Message. Default to the left -->--}}
    {{--                                        <div class="direct-chat-msg">--}}
    {{--                                            <div class="direct-chat-infos clearfix">--}}
    {{--                                                <span class="direct-chat-name float-left">Alexander Pierce</span>--}}
    {{--                                                <span class="direct-chat-timestamp float-right">23 Jan 5:37 pm</span>--}}
    {{--                                            </div>--}}
    {{--                                            <!-- /.direct-chat-infos -->--}}
    {{--                                            <img class="direct-chat-img" src="dist/img/user1-128x128.jpg" alt="message user image">--}}
    {{--                                            <!-- /.direct-chat-img -->--}}
    {{--                                            <div class="direct-chat-text">--}}
    {{--                                                Working with AdminLTE on a great new app! Wanna join?--}}
    {{--                                            </div>--}}
    {{--                                            <!-- /.direct-chat-text -->--}}
    {{--                                        </div>--}}
    {{--                                        <!-- /.direct-chat-msg -->--}}

    {{--                                        <!-- Message to the right -->--}}
    {{--                                        <div class="direct-chat-msg right">--}}
    {{--                                            <div class="direct-chat-infos clearfix">--}}
    {{--                                                <span class="direct-chat-name float-right">Sarah Bullock</span>--}}
    {{--                                                <span class="direct-chat-timestamp float-left">23 Jan 6:10 pm</span>--}}
    {{--                                            </div>--}}
    {{--                                            <!-- /.direct-chat-infos -->--}}
    {{--                                            <img class="direct-chat-img" src="dist/img/user3-128x128.jpg" alt="message user image">--}}
    {{--                                            <!-- /.direct-chat-img -->--}}
    {{--                                            <div class="direct-chat-text">--}}
    {{--                                                I would love to.--}}
    {{--                                            </div>--}}
    {{--                                            <!-- /.direct-chat-text -->--}}
    {{--                                        </div>--}}
    {{--                                        <!-- /.direct-chat-msg -->--}}

    {{--                                    </div>--}}
    {{--                                    <!--/.direct-chat-messages-->--}}

    {{--                                    <!-- Contacts are loaded here -->--}}
    {{--                                    <div class="direct-chat-contacts">--}}
    {{--                                        <ul class="contacts-list">--}}
    {{--                                            <li>--}}
    {{--                                                <a href="#">--}}
    {{--                                                    <img class="contacts-list-img" src="dist/img/user1-128x128.jpg" alt="User Avatar">--}}

    {{--                                                    <div class="contacts-list-info">--}}
    {{--                              <span class="contacts-list-name">--}}
    {{--                                Count Dracula--}}
    {{--                                <small class="contacts-list-date float-right">2/28/2015</small>--}}
    {{--                              </span>--}}
    {{--                                                        <span class="contacts-list-msg">How have you been? I was...</span>--}}
    {{--                                                    </div>--}}
    {{--                                                    <!-- /.contacts-list-info -->--}}
    {{--                                                </a>--}}
    {{--                                            </li>--}}
    {{--                                            <!-- End Contact Item -->--}}
    {{--                                            <li>--}}
    {{--                                                <a href="#">--}}
    {{--                                                    <img class="contacts-list-img" src="dist/img/user7-128x128.jpg" alt="User Avatar">--}}

    {{--                                                    <div class="contacts-list-info">--}}
    {{--                              <span class="contacts-list-name">--}}
    {{--                                Sarah Doe--}}
    {{--                                <small class="contacts-list-date float-right">2/23/2015</small>--}}
    {{--                              </span>--}}
    {{--                                                        <span class="contacts-list-msg">I will be waiting for...</span>--}}
    {{--                                                    </div>--}}
    {{--                                                    <!-- /.contacts-list-info -->--}}
    {{--                                                </a>--}}
    {{--                                            </li>--}}
    {{--                                            <!-- End Contact Item -->--}}
    {{--                                            <li>--}}
    {{--                                                <a href="#">--}}
    {{--                                                    <img class="contacts-list-img" src="dist/img/user3-128x128.jpg" alt="User Avatar">--}}

    {{--                                                    <div class="contacts-list-info">--}}
    {{--                              <span class="contacts-list-name">--}}
    {{--                                Nadia Jolie--}}
    {{--                                <small class="contacts-list-date float-right">2/20/2015</small>--}}
    {{--                              </span>--}}
    {{--                                                        <span class="contacts-list-msg">I'll call you back at...</span>--}}
    {{--                                                    </div>--}}
    {{--                                                    <!-- /.contacts-list-info -->--}}
    {{--                                                </a>--}}
    {{--                                            </li>--}}
    {{--                                            <!-- End Contact Item -->--}}
    {{--                                            <li>--}}
    {{--                                                <a href="#">--}}
    {{--                                                    <img class="contacts-list-img" src="dist/img/user5-128x128.jpg" alt="User Avatar">--}}

    {{--                                                    <div class="contacts-list-info">--}}
    {{--                              <span class="contacts-list-name">--}}
    {{--                                Nora S. Vans--}}
    {{--                                <small class="contacts-list-date float-right">2/10/2015</small>--}}
    {{--                              </span>--}}
    {{--                                                        <span class="contacts-list-msg">Where is your new...</span>--}}
    {{--                                                    </div>--}}
    {{--                                                    <!-- /.contacts-list-info -->--}}
    {{--                                                </a>--}}
    {{--                                            </li>--}}
    {{--                                            <!-- End Contact Item -->--}}
    {{--                                            <li>--}}
    {{--                                                <a href="#">--}}
    {{--                                                    <img class="contacts-list-img" src="dist/img/user6-128x128.jpg" alt="User Avatar">--}}

    {{--                                                    <div class="contacts-list-info">--}}
    {{--                              <span class="contacts-list-name">--}}
    {{--                                John K.--}}
    {{--                                <small class="contacts-list-date float-right">1/27/2015</small>--}}
    {{--                              </span>--}}
    {{--                                                        <span class="contacts-list-msg">Can I take a look at...</span>--}}
    {{--                                                    </div>--}}
    {{--                                                    <!-- /.contacts-list-info -->--}}
    {{--                                                </a>--}}
    {{--                                            </li>--}}
    {{--                                            <!-- End Contact Item -->--}}
    {{--                                            <li>--}}
    {{--                                                <a href="#">--}}
    {{--                                                    <img class="contacts-list-img" src="dist/img/user8-128x128.jpg" alt="User Avatar">--}}

    {{--                                                    <div class="contacts-list-info">--}}
    {{--                              <span class="contacts-list-name">--}}
    {{--                                Kenneth M.--}}
    {{--                                <small class="contacts-list-date float-right">1/4/2015</small>--}}
    {{--                              </span>--}}
    {{--                                                        <span class="contacts-list-msg">Never mind I found...</span>--}}
    {{--                                                    </div>--}}
    {{--                                                    <!-- /.contacts-list-info -->--}}
    {{--                                                </a>--}}
    {{--                                            </li>--}}
    {{--                                            <!-- End Contact Item -->--}}
    {{--                                        </ul>--}}
    {{--                                        <!-- /.contacts-list -->--}}
    {{--                                    </div>--}}
    {{--                                    <!-- /.direct-chat-pane -->--}}
    {{--                                </div>--}}
    {{--                                <!-- /.card-body -->--}}
    {{--                                <div class="card-footer">--}}
    {{--                                    <form action="#" method="post">--}}
    {{--                                        <div class="input-group">--}}
    {{--                                            <input type="text" name="message" placeholder="Type Message ..." class="form-control">--}}
    {{--                                            <span class="input-group-append">--}}
    {{--                          <button type="button" class="btn btn-primary">Send</button>--}}
    {{--                        </span>--}}
    {{--                                        </div>--}}
    {{--                                    </form>--}}
    {{--                                </div>--}}
    {{--                                <!-- /.card-footer-->--}}
    {{--                            </div>--}}
    {{--                            <!--/.direct-chat -->--}}

    {{--                            <!-- TO DO List -->--}}
    {{--                            <div class="card">--}}
    {{--                                <div class="card-header">--}}
    {{--                                    <h3 class="card-title">--}}
    {{--                                        <i class="ion ion-clipboard mr-1"></i>--}}
    {{--                                        To Do List--}}
    {{--                                    </h3>--}}

    {{--                                    <div class="card-tools">--}}
    {{--                                        <ul class="pagination pagination-sm">--}}
    {{--                                            <li class="page-item"><a href="#" class="page-link">&laquo;</a></li>--}}
    {{--                                            <li class="page-item"><a href="#" class="page-link">1</a></li>--}}
    {{--                                            <li class="page-item"><a href="#" class="page-link">2</a></li>--}}
    {{--                                            <li class="page-item"><a href="#" class="page-link">3</a></li>--}}
    {{--                                            <li class="page-item"><a href="#" class="page-link">&raquo;</a></li>--}}
    {{--                                        </ul>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                                <!-- /.card-header -->--}}
    {{--                                <div class="card-body">--}}
    {{--                                    <ul class="todo-list" data-widget="todo-list">--}}
    {{--                                        <li>--}}
    {{--                                            <!-- drag handle -->--}}
    {{--                                            <span class="handle">--}}
    {{--                          <i class="fas fa-ellipsis-v"></i>--}}
    {{--                          <i class="fas fa-ellipsis-v"></i>--}}
    {{--                        </span>--}}
    {{--                                            <!-- checkbox -->--}}
    {{--                                            <div  class="icheck-primary d-inline ml-2">--}}
    {{--                                                <input type="checkbox" value="" name="todo1" id="todoCheck1">--}}
    {{--                                                <label for="todoCheck1"></label>--}}
    {{--                                            </div>--}}
    {{--                                            <!-- todo text -->--}}
    {{--                                            <span class="text">Design a nice theme</span>--}}
    {{--                                            <!-- Emphasis label -->--}}
    {{--                                            <small class="badge badge-danger"><i class="far fa-clock"></i> 2 mins</small>--}}
    {{--                                            <!-- General tools such as edit or delete-->--}}
    {{--                                            <div class="tools">--}}
    {{--                                                <i class="fas fa-edit"></i>--}}
    {{--                                                <i class="fas fa-trash-o"></i>--}}
    {{--                                            </div>--}}
    {{--                                        </li>--}}
    {{--                                        <li>--}}
    {{--                        <span class="handle">--}}
    {{--                          <i class="fas fa-ellipsis-v"></i>--}}
    {{--                          <i class="fas fa-ellipsis-v"></i>--}}
    {{--                        </span>--}}
    {{--                                            <div  class="icheck-primary d-inline ml-2">--}}
    {{--                                                <input type="checkbox" value="" name="todo2" id="todoCheck2" checked>--}}
    {{--                                                <label for="todoCheck2"></label>--}}
    {{--                                            </div>--}}
    {{--                                            <span class="text">Make the theme responsive</span>--}}
    {{--                                            <small class="badge badge-info"><i class="far fa-clock"></i> 4 hours</small>--}}
    {{--                                            <div class="tools">--}}
    {{--                                                <i class="fas fa-edit"></i>--}}
    {{--                                                <i class="fas fa-trash-o"></i>--}}
    {{--                                            </div>--}}
    {{--                                        </li>--}}
    {{--                                        <li>--}}
    {{--                        <span class="handle">--}}
    {{--                          <i class="fas fa-ellipsis-v"></i>--}}
    {{--                          <i class="fas fa-ellipsis-v"></i>--}}
    {{--                        </span>--}}
    {{--                                            <div  class="icheck-primary d-inline ml-2">--}}
    {{--                                                <input type="checkbox" value="" name="todo3" id="todoCheck3">--}}
    {{--                                                <label for="todoCheck3"></label>--}}
    {{--                                            </div>--}}
    {{--                                            <span class="text">Let theme shine like a star</span>--}}
    {{--                                            <small class="badge badge-warning"><i class="far fa-clock"></i> 1 day</small>--}}
    {{--                                            <div class="tools">--}}
    {{--                                                <i class="fas fa-edit"></i>--}}
    {{--                                                <i class="fas fa-trash-o"></i>--}}
    {{--                                            </div>--}}
    {{--                                        </li>--}}
    {{--                                        <li>--}}
    {{--                        <span class="handle">--}}
    {{--                          <i class="fas fa-ellipsis-v"></i>--}}
    {{--                          <i class="fas fa-ellipsis-v"></i>--}}
    {{--                        </span>--}}
    {{--                                            <div  class="icheck-primary d-inline ml-2">--}}
    {{--                                                <input type="checkbox" value="" name="todo4" id="todoCheck4">--}}
    {{--                                                <label for="todoCheck4"></label>--}}
    {{--                                            </div>--}}
    {{--                                            <span class="text">Let theme shine like a star</span>--}}
    {{--                                            <small class="badge badge-success"><i class="far fa-clock"></i> 3 days</small>--}}
    {{--                                            <div class="tools">--}}
    {{--                                                <i class="fas fa-edit"></i>--}}
    {{--                                                <i class="fas fa-trash-o"></i>--}}
    {{--                                            </div>--}}
    {{--                                        </li>--}}
    {{--                                        <li>--}}
    {{--                        <span class="handle">--}}
    {{--                          <i class="fas fa-ellipsis-v"></i>--}}
    {{--                          <i class="fas fa-ellipsis-v"></i>--}}
    {{--                        </span>--}}
    {{--                                            <div  class="icheck-primary d-inline ml-2">--}}
    {{--                                                <input type="checkbox" value="" name="todo5" id="todoCheck5">--}}
    {{--                                                <label for="todoCheck5"></label>--}}
    {{--                                            </div>--}}
    {{--                                            <span class="text">Check your messages and notifications</span>--}}
    {{--                                            <small class="badge badge-primary"><i class="far fa-clock"></i> 1 week</small>--}}
    {{--                                            <div class="tools">--}}
    {{--                                                <i class="fas fa-edit"></i>--}}
    {{--                                                <i class="fas fa-trash-o"></i>--}}
    {{--                                            </div>--}}
    {{--                                        </li>--}}
    {{--                                        <li>--}}
    {{--                        <span class="handle">--}}
    {{--                          <i class="fas fa-ellipsis-v"></i>--}}
    {{--                          <i class="fas fa-ellipsis-v"></i>--}}
    {{--                        </span>--}}
    {{--                                            <div  class="icheck-primary d-inline ml-2">--}}
    {{--                                                <input type="checkbox" value="" name="todo6" id="todoCheck6">--}}
    {{--                                                <label for="todoCheck6"></label>--}}
    {{--                                            </div>--}}
    {{--                                            <span class="text">Let theme shine like a star</span>--}}
    {{--                                            <small class="badge badge-secondary"><i class="far fa-clock"></i> 1 month</small>--}}
    {{--                                            <div class="tools">--}}
    {{--                                                <i class="fas fa-edit"></i>--}}
    {{--                                                <i class="fas fa-trash-o"></i>--}}
    {{--                                            </div>--}}
    {{--                                        </li>--}}
    {{--                                    </ul>--}}
    {{--                                </div>--}}
    {{--                                <!-- /.card-body -->--}}
    {{--                                <div class="card-footer clearfix">--}}
    {{--                                    <button type="button" class="btn btn-primary float-right"><i class="fas fa-plus"></i> Add item</button>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                            <!-- /.card -->--}}
    {{--                        </section>--}}
    {{--                        <!-- /.Left col -->--}}
    {{--                        <!-- right col (We are only adding the ID to make the widgets sortable)-->--}}
    {{--                        <section class="col-lg-5 connectedSortable">--}}

    {{--                            <!-- Map card -->--}}
    {{--                            <div class="card bg-gradient-primary">--}}
    {{--                                <div class="card-header border-0">--}}
    {{--                                    <h3 class="card-title">--}}
    {{--                                        <i class="fas fa-map-marker-alt mr-1"></i>--}}
    {{--                                        Visitors--}}
    {{--                                    </h3>--}}
    {{--                                    <!-- card tools -->--}}
    {{--                                    <div class="card-tools">--}}
    {{--                                        <button type="button" class="btn btn-primary btn-sm daterange" title="Date range">--}}
    {{--                                            <i class="far fa-calendar-alt"></i>--}}
    {{--                                        </button>--}}
    {{--                                        <button type="button" class="btn btn-primary btn-sm" data-card-widget="collapse" title="Collapse">--}}
    {{--                                            <i class="fas fa-minus"></i>--}}
    {{--                                        </button>--}}
    {{--                                    </div>--}}
    {{--                                    <!-- /.card-tools -->--}}
    {{--                                </div>--}}
    {{--                                <div class="card-body">--}}
    {{--                                    <div id="world-map" style="height: 250px; width: 100%;"></div>--}}
    {{--                                </div>--}}
    {{--                                <!-- /.card-body-->--}}
    {{--                                <div class="card-footer bg-transparent">--}}
    {{--                                    <div class="row">--}}
    {{--                                        <div class="col-4 text-center">--}}
    {{--                                            <div id="sparkline-1"></div>--}}
    {{--                                            <div class="text-white">Visitors</div>--}}
    {{--                                        </div>--}}
    {{--                                        <!-- ./col -->--}}
    {{--                                        <div class="col-4 text-center">--}}
    {{--                                            <div id="sparkline-2"></div>--}}
    {{--                                            <div class="text-white">Online</div>--}}
    {{--                                        </div>--}}
    {{--                                        <!-- ./col -->--}}
    {{--                                        <div class="col-4 text-center">--}}
    {{--                                            <div id="sparkline-3"></div>--}}
    {{--                                            <div class="text-white">Sales</div>--}}
    {{--                                        </div>--}}
    {{--                                        <!-- ./col -->--}}
    {{--                                    </div>--}}
    {{--                                    <!-- /.row -->--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                            <!-- /.card -->--}}

    {{--                            <!-- solid sales graph -->--}}
    {{--                            <div class="card bg-gradient-info">--}}
    {{--                                <div class="card-header border-0">--}}
    {{--                                    <h3 class="card-title">--}}
    {{--                                        <i class="fas fa-th mr-1"></i>--}}
    {{--                                        Sales Graph--}}
    {{--                                    </h3>--}}

    {{--                                    <div class="card-tools">--}}
    {{--                                        <button type="button" class="btn bg-info btn-sm" data-card-widget="collapse">--}}
    {{--                                            <i class="fas fa-minus"></i>--}}
    {{--                                        </button>--}}
    {{--                                        <button type="button" class="btn bg-info btn-sm" data-card-widget="remove">--}}
    {{--                                            <i class="fas fa-times"></i>--}}
    {{--                                        </button>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                                <div class="card-body">--}}
    {{--                                    <canvas class="chart" id="line-chart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>--}}
    {{--                                </div>--}}
    {{--                                <!-- /.card-body -->--}}
    {{--                                <div class="card-footer bg-transparent">--}}
    {{--                                    <div class="row">--}}
    {{--                                        <div class="col-4 text-center">--}}
    {{--                                            <input type="text" class="knob" data-readonly="true" value="20" data-width="60" data-height="60"--}}
    {{--                                                   data-fgColor="#39CCCC">--}}

    {{--                                            <div class="text-white">Mail-Orders</div>--}}
    {{--                                        </div>--}}
    {{--                                        <!-- ./col -->--}}
    {{--                                        <div class="col-4 text-center">--}}
    {{--                                            <input type="text" class="knob" data-readonly="true" value="50" data-width="60" data-height="60"--}}
    {{--                                                   data-fgColor="#39CCCC">--}}

    {{--                                            <div class="text-white">Online</div>--}}
    {{--                                        </div>--}}
    {{--                                        <!-- ./col -->--}}
    {{--                                        <div class="col-4 text-center">--}}
    {{--                                            <input type="text" class="knob" data-readonly="true" value="30" data-width="60" data-height="60"--}}
    {{--                                                   data-fgColor="#39CCCC">--}}

    {{--                                            <div class="text-white">In-Store</div>--}}
    {{--                                        </div>--}}
    {{--                                        <!-- ./col -->--}}
    {{--                                    </div>--}}
    {{--                                    <!-- /.row -->--}}
    {{--                                </div>--}}
    {{--                                <!-- /.card-footer -->--}}
    {{--                            </div>--}}
    {{--                            <!-- /.card -->--}}

    {{--                            <!-- Calendar -->--}}
    {{--                            <div class="card bg-gradient-success">--}}
    {{--                                <div class="card-header border-0">--}}

    {{--                                    <h3 class="card-title">--}}
    {{--                                        <i class="far fa-calendar-alt"></i>--}}
    {{--                                        Calendar--}}
    {{--                                    </h3>--}}
    {{--                                    <!-- tools card -->--}}
    {{--                                    <div class="card-tools">--}}
    {{--                                        <!-- button with a dropdown -->--}}
    {{--                                        <div class="btn-group">--}}
    {{--                                            <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown" data-offset="-52">--}}
    {{--                                                <i class="fas fa-bars"></i>--}}
    {{--                                            </button>--}}
    {{--                                            <div class="dropdown-menu" role="menu">--}}
    {{--                                                <a href="#" class="dropdown-item">Add new event</a>--}}
    {{--                                                <a href="#" class="dropdown-item">Clear events</a>--}}
    {{--                                                <div class="dropdown-divider"></div>--}}
    {{--                                                <a href="#" class="dropdown-item">View calendar</a>--}}
    {{--                                            </div>--}}
    {{--                                        </div>--}}
    {{--                                        <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse">--}}
    {{--                                            <i class="fas fa-minus"></i>--}}
    {{--                                        </button>--}}
    {{--                                        <button type="button" class="btn btn-success btn-sm" data-card-widget="remove">--}}
    {{--                                            <i class="fas fa-times"></i>--}}
    {{--                                        </button>--}}
    {{--                                    </div>--}}
    {{--                                    <!-- /. tools -->--}}
    {{--                                </div>--}}
    {{--                                <!-- /.card-header -->--}}
    {{--                                <div class="card-body pt-0">--}}
    {{--                                    <!--The calendar -->--}}
    {{--                                    <div id="calendar" style="width: 100%"></div>--}}
    {{--                                </div>--}}
    {{--                                <!-- /.card-body -->--}}
    {{--                            </div>--}}
    {{--                            <!-- /.card -->--}}
    {{--                        </section>--}}
    {{--                        <!-- right col -->--}}
    {{--                    </div>--}}
    {{--                    <!-- /.row (main row) -->--}}
    {{--                </div><!-- /.container-fluid -->--}}
    {{--            </section>--}}
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@include('sweetalert::alert')

@include('dashboard.layouts._footer')

<!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<!-- jQuery -->
@yield('js')
<script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
{{--    bootstrap 4.6 cdn--}}
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.5.1/sweetalert2.all.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js"
        integrity="sha512-eyHL1atYNycXNXZMDndxrDhNAegH2BDWt1TmkXJPoGf1WLlNYt08CSjkqF5lnCRmdm3IrkHid8s2jOUY4NIZVQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('assets/js/adminlte.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('assets/js/demo.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('assets/js/pages/dashboard.js')}}"></script>

<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>

<script src="{{asset('plugins/jquery/jquery_plugins.js')}}"></script>
<script src="{{asset('plugins/jquery/jquery.form-validator.js')}}"></script>
<script src="{{asset('jQuery-Form-Validator-master/src/lang/ar.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- DataTables  & Plugins -->
<script src="{{asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('plugins/jszip/jszip.min.js')}}"></script>
<script src="{{asset('plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>

</body>
</html>
