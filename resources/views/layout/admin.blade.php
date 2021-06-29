<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>@yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="">

        <!-- App css -->
        <link href="{{ asset('assets/sistema/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/sistema/css/icons.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/sistema/css/style.css') }}" rel="stylesheet" type="text/css" />
        
        <script src="{{ asset('assets/sistema/js/modernizr.min.js') }}"></script>

        @yield('style')
    </head>

    <body>

        <!-- Navigation Bar-->
        <header id="topnav">
            <div class="topbar-main">
                <div class="container-fluid">

                    <!-- Logo container-->
                    <div class="logo">
                        <!-- Text Logo -->
                        <a href="" class="logo">
                            <span class="logo-large"></i>BEM-VINDO</span>
                        </a>
                    </div>
                    <!-- End Logo container-->


                    <div class="menu-extras topbar-custom">

                        <ul class="list-unstyled topbar-right-menu float-right mb-0">

                            <li class="menu-item">
                                <!-- Mobile menu toggle-->
                                <a class="navbar-toggle nav-link">
                                    <div class="lines">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </a>
                                <!-- End mobile menu toggle-->
                            </li>
                            
                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                                   aria-haspopup="false" aria-expanded="false">
                                     <span class="ml-1 pro-user-name">{{Auth::user()->name}}<i class="mdi mdi-chevron-down"></i> </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">



                                    <!-- item-->
                                    <a href=" {{ route('admin.logout') }} " class="dropdown-item notify-item">
                                        <i class="fi-power"></i> <span>Sair</span>
                                    </a>

                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- end menu-extras -->

                    <div class="clearfix"></div>

                </div> <!-- end container -->
            </div>
            <!-- end topbar-main -->

            <div class="navbar-custom">
                <div class="container-fluid">
                    <div id="navigation">
                        <!-- Navigation Menu-->
                        <ul class="navigation-menu">



                            <li class="has-submenu">
                                <a href=" {{ route('admin.dica.index') }} "><i class="fi-briefcase"></i>Dica</a>
                            </li>

                        </ul>
                        <!-- End navigation menu -->
                    </div> <!-- end #navigation -->
                </div> <!-- end container -->
            </div> <!-- end navbar-custom -->
        </header>
        <!-- End Navigation Bar-->

        @yield('content')

        <!-- Footer -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        Samuel Buzeli Santos
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer -->

        <!-- jQuery  -->
        <script src="{{ asset('assets/sistema/js/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/sistema/js/popper.min.js') }}"></script>
        <script src="{{ asset('assets/sistema/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/sistema/js/waves.js') }}"></script>
        <script src="{{ asset('assets/sistema/js/jquery.slimscroll.js') }}"></script>

        <!-- App js -->
        <script src="{{ asset('assets/sistema/js/jquery.core.js') }}"></script>
        <script src="{{ asset('assets/sistema/js/jquery.app.js') }}"></script>

        @yield('script')
    </body>
</html>