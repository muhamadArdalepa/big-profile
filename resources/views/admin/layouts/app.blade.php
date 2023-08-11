<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Big Profile</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    {{-- <link rel="icon" href="{{ asset('atlantis/img/icon.ico') }}" type="image/x-icon" /> --}}

    <!-- Fonts and icons -->
    <script src="{{ asset('atlantis/js/plugin/webfont/webfont.min.js') }}"></script>
    <script>
        WebFont.load({
            google: {
                "families": ["Lato:300,400,700,900"]
            },
            custom: {
                "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands",
                    "simple-line-icons"
                ],
                urls: ['{{ asset('atlantis/css/fonts.min.css') }}']
            },
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('atlantis/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('atlantis/css/atlantis.min.css') }}">

    @stack('css')
</head>

<body>
    @guest
        @yield('content')
    @else
    <div class="wrapper">
        <div class="main-header">
            <!-- Logo Header -->
            <div class="logo-header" data-background-color="red">
                <a href="index.html" class="logo">
                    <img src="{{ asset('images/logo/big-white-brand.png') }}" height="30" alt="navbar brand"
                        class="navbar-brand">
                </a>
                <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse"
                    data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                        <i class="icon-menu"></i>
                    </span>
                </button>
                <button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
                <div class="nav-toggle">
                    <button class="btn btn-toggle toggle-sidebar">
                        <i class="icon-menu"></i>
                    </button>
                </div>
            </div>
            <!-- End Logo Header -->

            <!-- Navbar Header -->
            <nav class="navbar navbar-header navbar-expand-lg" data-background-color="red2">

                <div class="container-fluid">
                    <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
                        <li class="nav-item dropdown hidden-caret">
                            <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"
                                aria-expanded="false">
                                <div style="overflow: hidden;"
                                    class="avatar-sm bg-white rounded-circle d-flex justify-content-center align-items-end text-dark">
                                    <h1 class="m-0" style="margin-bottom: -4px !important">
                                        <i class="fas fa-user fa-lg"></i>
                                    </h1>
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <div class="dropdown-user-scroll scrollbar-outer">
                                    <li>
                                        <div class="user-box">
                                            <i class="fas fa-user d-block py-1 fa-lg"></i>
                                            <div class="u-text">
                                                <h4>{{ auth()->user()->name }}</h4>
                                                <p class="text-muted">{{ auth()->user()->email }}</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Account Setting</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Logout</a>
                                    </li>
                                </div>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- End Navbar -->
        </div>

        <!-- Sidebar -->
        <div class="sidebar sidebar-style-2">
            <div class="sidebar-wrapper scrollbar scrollbar-inner">
                <div class="sidebar-content">
                    <ul class="nav nav-danger">
                        <li class="nav-item {{ Route::currentRouteName() === 'admin.home' ? 'active' : '' }}">
                            <a href="/admin/dashboard">
                                <i class="fas fa-home"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li
                            class="nav-item {{ in_array(Route::currentRouteName(), ['admin.paket', 'admin.promo']) ? 'active' : '' }} submenu">
                            <a data-toggle="collapse" href="#paket"
                                aria-expanded="{{ in_array(Route::currentRouteName(), ['admin.paket', 'admin.promo']) ? 'true' : '' }}"
                                class="">
                                <i class="fas fa-table"></i>
                                <p>Paket</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse {{ in_array(Route::currentRouteName(), ['admin.paket', 'admin.promo']) ? 'show' : '' }}"
                                id="paket" style="">
                                <ul class="nav nav-collapse">
                                    <li class="{{ Route::currentRouteName() === 'admin.paket' ? 'active' : '' }}">
                                        <a href="/admin/paket">
                                            <span class="sub-item">Paket</span>
                                        </a>
                                    </li>
                                    <li class="{{ Route::currentRouteName() === 'admin.promo' ? 'active' : '' }}">
                                        <a href="/admin/promo">
                                            <span class="sub-item">Promo</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li
                            class="nav-item {{ in_array(Route::currentRouteName(), ['admin.galeri.proyek', 'admin.galeri.internal']) ? 'active' : '' }} submenu">
                            <a data-toggle="collapse" href="#galeri"
                                aria-expanded="{{ in_array(Route::currentRouteName(), ['admin.galeri.proyek', 'admin.galeri.internal']) ? 'true' : '' }}"
                                class="">
                                <i class="fas fa-image"></i>
                                <p>Galeri</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse {{ in_array(Route::currentRouteName(), ['admin.galeri.proyek', 'admin.galeri.internal']) ? 'show' : '' }}"
                                id="galeri" style="">
                                <ul class="nav nav-collapse">
                                    <li
                                        class="{{ Route::currentRouteName() === 'admin.galeri.proyek' ? 'active' : '' }}">
                                        <a href="/admin/galeri-proyek">
                                            <span class="sub-item">Galeri Proyek</span>
                                        </a>
                                    </li>
                                    <li
                                        class="{{ Route::currentRouteName() === 'admin.galeri.internal' ? 'active' : '' }}">
                                        <a href="/admin/galeri-internal">
                                            <span class="sub-item">Galeri Internal</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item {{ Route::currentRouteName() === 'admin.partner.edit' ? 'active' : '' }}">
                            <a href="/admin/partner">
                                <i class="fas fa-hands-helping"></i>
                                <p>Partner</p>
                            </a>
                        </li>
                        <li class="nav-item {{ Route::currentRouteName() === 'admin.pesan' ? 'active' : '' }}">
                            <a href="/admin/pesam">
                                <i class="fas fa-comment-alt"></i>
                                <p>Pesan</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Sidebar -->

        <div class="main-panel">
            <div class="content">
                @yield('content')
            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <nav class="pull-left">
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link" href="https://www.themekita.com">
                                    ThemeKita
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    Help
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    Licenses
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <div class="copyright ml-auto">
                        2018, made with <i class="fa fa-heart heart text-danger"></i> by <a
                            href="https://www.themekita.com">ThemeKita</a>
                    </div>
                </div>
            </footer>
        </div>

    </div>
    @endguest
 
    <!--   Core JS Files   -->
    <script src="{{ asset('atlantis/js/core/jquery.3.2.1.min.js') }}"></script>
    <script src="{{ asset('atlantis/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('atlantis/js/core/bootstrap.min.js') }}"></script>

    <!-- jQuery UI -->
    <script src="{{ asset('atlantis/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('atlantis/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js') }}"></script>

    <!-- jQuery Scrollbar -->
    <script src="{{ asset('atlantis/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>

    <!-- Datatables -->
    <script src="{{ asset('atlantis/js/plugin/datatables/datatables.min.js') }}"></script>

    <!-- Sweetalert -->
    <script src="{{ asset('atlantis/js/plugin/sweetalert/sweetalert.min.js') }}"></script>

    <!-- Atlantis JS -->
    <script src="{{ asset('atlantis/js/atlantis.min.js') }}"></script>
    @stack('js')
</body>

</html>
