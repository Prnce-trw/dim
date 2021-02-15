<!DOCTYPE html>
<html lang="en">

<head>
    <title>Digital Innovation Management: DIM </title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Gradient Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
    <meta name="author" content="codedthemes" />
    <!-- Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon icon -->
    <link rel="icon" href="public/image/logo.ico" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{asset('/files/bower_components/bootstrap/css/bootstrap.min.css')}}">
    <!-- themify icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('/files/assets/icon/themify-icons/themify-icons.css')}}">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="{{asset('/files/assets/icon/icofont/css/icofont.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="{{asset('/files/assets/icon/font-awesome/css/font-awesome.min.css')}}">
    <!-- Syntax highlighter Prism css -->
    <link rel="stylesheet" type="text/css" href="{{asset('/files/assets/pages/prism/prism.css')}}">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{asset('/files/assets/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/files/assets/css/jquery.mCustomScrollbar.css')}}">
    <!-- Data Table Css -->
    <link rel="stylesheet" type="text/css" href="{{asset('/files/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/files/assets/pages/data-table/css/buttons.dataTables.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/files/bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}}">
    <!-- Multi Select css -->
    <link rel="stylesheet" type="text/css" href="{{asset('/files/bower_components/bootstrap-multiselect/css/bootstrap-multiselect.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('/files/bower_components/multiselect/css/multi-select.css')}}" />
    <!-- Switch component css -->
    <link rel="stylesheet" type="text/css" href="{{asset('/files/bower_components/switchery/css/switchery.min.css')}}">
    <!-- Tags css -->
    <link rel="stylesheet" type="text/css" href="{{asset('/files/bower_components/bootstrap-tagsinput/css/bootstrap-tagsinput.css')}}" />
    <!-- Select 2 css -->
    <link rel="stylesheet" href="{{asset('/files/bower_components/select2/css/select2.min.css')}}" />
    <!-- My Custom css -->
    <link rel="stylesheet" href="{{asset('/css/custom.css')}}" />
    <!-- My Custom js -->
    <script  src="{{asset('js/custom.js')}}"></script>
    <!---================ Crop Image -------==================-->
    <link href="{{ asset('plugins/crop/croppie.css') }}" type="text/css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@500&display=swap" rel="stylesheet">
    <!-- jquery file upload Frame work -->
    <link href="{{ asset('files/assets/pages/jquery.filer/css/jquery.filer.css') }}" type="text/css" rel="stylesheet" />
    <link href="{{ asset('files/assets/pages/jquery.filer/css/themes/jquery.filer-dragdropbox-theme.css') }}" type="text/css" rel="stylesheet" />
    <style>
        body {
            font-family: 'Prompt', sans-serif;
        }
    </style>
    @yield('css')
</head>
<!-- Menu-header-fixed + Menu-overlay layout -->

<body>
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="scene">
            <img class="car" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/43033/car.svg" alt="" />
            <img class="poof" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/43033/poof.svg" alt="" />
            <img class="sign" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/43033/sign.svg" alt="" />
        </div>
    </div>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">
                    <div class="navbar-logo">
                        <a class="mobile-menu" id="mobile-collapse" href="#!">
                            <i class="ti-menu"></i>
                        </a>
                        <div class="mobile-search">
                            <div class="header-search">
                                <div class="main-search morphsearch-search">
                                    <div class="input-group">
                                        <span class="input-group-addon search-close"><i class="ti-close"></i></span>
                                        <input type="text" class="form-control" placeholder="Enter Keyword">
                                        <span class="input-group-addon search-btn"><i class="ti-search"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="{{url("/")}}">
                            <img class="img-fluid" src="public/image/logo.png" alt="Theme-Logo" width="40">
                        </a>
                        <a class="mobile-options">
                            <i class="ti-more"></i>
                        </a>
                    </div>

                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li>
                                <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                            </li>
                            <li class="header-search">
                                <div class="main-search morphsearch-search">
                                    <div class="input-group">
                                        <span class="input-group-addon search-close"><i class="ti-close"></i></span>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <ul class="nav-right">
                            <li class="user-profile header-notification">
                                <a href="#!">
                                    <img src="files/assets/images/avatar-4.jpg" class="img-radius" alt="User-Profile-Image">
                                    <span>John Doe</span>
                                    <i class="ti-angle-down"></i>
                                </a>
                                <ul class="show-notification profile-notification">
                                    <li>
                                        <a href="#!">
                                            <i class="ti-settings"></i> Settings
                                        </a>
                                    </li>
                                    <li>
                                        <a href="user-profile.html">
                                            <i class="ti-user"></i> Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a href="email-inbox.html">
                                            <i class="ti-email"></i> My Messages
                                        </a>
                                    </li>
                                    <li>
                                        <a href="auth-lock-screen.html">
                                            <i class="ti-lock"></i> Lock Screen
                                        </a>
                                    </li>
                                    <li>
                                        <a href="auth-normal-sign-in.html">
                                        <i class="ti-layout-sidebar-left"></i> Logout
                                    </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Sidebar inner chat end-->
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar">
                        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                        <div class="pcoded-inner-navbar main-menu">
                            <div class="pcoded-navigation-label">Navigation</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="">
                                    <a href="{{url("/")}}">
                                        <span class="pcoded-micon"><i class="ti-home"></i><b>N</b></span>
                                        <span class="pcoded-mtext">Home</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <div class="page-body">
                                        @yield('content')
                                    </div>
                                    <!-- Page body end -->
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Warning Section Ends -->
    <!-- Required Jqurey -->
    <script src="{{asset('/files/bower_components/jquery/js/jquery.min.js')}}"></script>
    <script src="{{asset('/files/bower_components/jquery-ui/js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('/files/bower_components/popper.js/js/popper.min.js')}}"></script>
    <script src="{{asset('/files/bower_components/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- jquery slimscroll js -->
    <script src="{{asset('/files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js')}}"></script>
    <!-- modernizr js -->
    <script src="{{asset('/files/bower_components/modernizr/js/modernizr.js')}}"></script>
    <script src="{{asset('/files/bower_components/modernizr/js/css-scrollbars.js')}}"></script>
    <!-- Syntax highlighter prism js -->
    <script src="{{asset('/files/assets/pages/prism/custom-prism.js')}}"></script>
    <!-- Custom js -->
    <script src="{{asset('/files/assets/js/pcoded.min.js')}}"></script>
    <script src="{{asset('/files/assets/js/vertical/menu/menu-header-fixed.js')}}"></script>
    <script src="{{asset('/files/assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script src="{{asset('/files/assets/js/script.js')}}"></script>
    <script  src="{{asset('/files/assets/pages/advance-elements/select2-custom.js')}}"></script>
    <!-- sweet alert js -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <!-- data-table js -->
    <script src="{{asset('files/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('files/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('files/assets/pages/data-table/js/jszip.min.js')}}"></script>
    <script src="{{asset('files/assets/pages/data-table/js/pdfmake.min.js')}}"></script>
    <script src="{{asset('files/assets/pages/data-table/js/vfs_fonts.js')}}"></script>
    <script src="{{asset('files/bower_components/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{asset('files/bower_components/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('files/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('files/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('files/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>
    <!-- Select 2 js -->
    <script  src="{{asset('files/bower_components/select2/js/select2.full.min.js')}}"></script>
    <!-- Multiselect js -->
    <script src="{{asset('files/bower_components/bootstrap-multiselect/js/bootstrap-multiselect.js')}}"></script>
    <script src="{{asset('files/bower_components/multiselect/js/jquery.multi-select.js')}}"></script>
    <script src="{{asset('files/assets/js/jquery.quicksearch.js')}}"></script>
    <!-- Tags js -->
    <script src="{{asset('files/bower_components/bootstrap-tagsinput/js/bootstrap-tagsinput.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.10.4/typeahead.bundle.min.js"></script>
    <!-- Max-length js -->
    <script src="{{asset('files/bower_components/bootstrap-maxlength/js/bootstrap-maxlength.js')}}"></script>
    <!-- DATE PICKER -->
    <!-- DATE crop image -->
    <script src="{{ asset('plugins/crop/croppie.js') }}"></script>
    <!-- jquery file upload js -->
    <script src="{{ asset('files/assets/pages/jquery.filer/js/jquery.filer.min.js') }}"></script>
    <script src="{{ asset('files/assets/pages/filer/custom-filer.js')}}" ></script>
    <script src="{{ asset('files/assets/pages/filer/jquery.fileuploads.init.js') }}" ></script>

    <script>
        $(document).ready(function () {
            var path = document.URL;
            $('.pcoded-item li').filter(function () {
                return $('a', this).attr('href') === path;
            }).parents("li").addClass('active pcoded-trigger');
            $('.pcoded-item li').filter(function () {
                return $('a', this).attr('href') === path;
            }).addClass('active');
        });
    </script>
    @yield('js')
</body>

</html>
