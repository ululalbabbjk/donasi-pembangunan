<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>{{$title ?? 'Bantu Pembangunan Pesantren Ulul Albab Bojongkoneng'}} - Pondok Pesantren Ulul Albab Bojongkoneng</title>

    <meta name="description" content="Bantu Pembangunan Pesantren Ulul Albab Bojongkoneng &amp; Pondok Pesantren Ulul Albab Bojongkoneng">
    <meta name="author" content="Pondok Pesantren Ulul Albab Bojongkoneng">
    <meta name="robots" content="noindex, nofollow">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="Bantu Pembangunan Pesantren Ulul Albab Bojongkoneng - Pondok Pesantren Ulul Albab Bojongkoneng">
    <meta property="og:site_name" content="Pondok Pesantren Ulul Albab Bojongkoneng">
    <meta property="og:description" content="Bantu Pembangunan Pesantren Ulul Albab Bojongkoneng &amp; Pondok Pesantren Ulul Albab Bojongkoneng">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="{{asset('assets/media/favicons/favicon-96x96.png')}}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{asset('assets/media/favicons/favicon-96x96.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/media/favicons/apple-icon-180x180.png')}}">
    <!-- END Icons -->

    <!-- Stylesheets -->
    <!-- Fonts and Dashmix framework -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">
    <link rel="stylesheet" id="css-main" href="{{asset('assets/css/dashmix.min.css')}}">

    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <link rel="stylesheet" id="css-theme" href="{{asset('assets/css/themes/xeco.min.css')}}">
    @livewireStyles
    @yield('endhead')
    <!-- END Stylesheets -->
</head>
<body>
<!-- Page Container -->
<!--
    Available classes for #page-container:

GENERIC

    'enable-cookies'                            Remembers active color theme between pages (when set through color theme helper Template._uiHandleTheme())

SIDEBAR & SIDE OVERLAY

    'sidebar-r'                                 Right Sidebar and left Side Overlay (default is left Sidebar and right Side Overlay)
    'sidebar-mini'                              Mini hoverable Sidebar (screen width > 991px)
    'sidebar-o'                                 Visible Sidebar by default (screen width > 991px)
    'sidebar-o-xs'                              Visible Sidebar by default (screen width < 992px)
    'sidebar-dark'                              Dark themed sidebar

    'side-overlay-hover'                        Hoverable Side Overlay (screen width > 991px)
    'side-overlay-o'                            Visible Side Overlay by default

    'enable-page-overlay'                       Enables a visible clickable Page Overlay (closes Side Overlay on click) when Side Overlay opens

    'side-scroll'                               Enables custom scrolling on Sidebar and Side Overlay instead of native scrolling (screen width > 991px)

HEADER

    ''                                          Static Header if no class is added
    'page-header-fixed'                         Fixed Header


Footer

    ''                                          Static Footer if no class is added
    'page-footer-fixed'                         Fixed Footer (please have in mind that the footer has a specific height when is fixed)

HEADER STYLE

    ''                                          Classic Header style if no class is added
    'page-header-dark'                          Dark themed Header
    'page-header-glass'                         Light themed Header with transparency by default
                                                (absolute position, perfect for light images underneath - solid light background on scroll if the Header is also set as fixed)
    'page-header-glass page-header-dark'         Dark themed Header with transparency by default
                                                (absolute position, perfect for dark images underneath - solid dark background on scroll if the Header is also set as fixed)

MAIN CONTENT LAYOUT

    ''                                          Full width Main Content if no class is added
    'main-content-boxed'                        Full width Main Content with a specific maximum width (screen width > 1200px)
    'main-content-narrow'                       Full width Main Content with a percentage width (screen width > 1200px)
-->
<div id="page-container" class="sidebar side-scroll page-header-fixed page-header-glass main-content-boxed">

    <!-- Sidebar -->
    <!--
        Sidebar Mini Mode - Display Helper classes

        Adding 'smini-hide' class to an element will make it invisible (opacity: 0) when the sidebar is in mini mode
        Adding 'smini-show' class to an element will make it visible (opacity: 1) when the sidebar is in mini mode
            If you would like to disable the transition animation, make sure to also add the 'no-transition' class to your element

        Adding 'smini-hidden' to an element will hide it when the sidebar is in mini mode
        Adding 'smini-visible' to an element will show it (display: inline-block) only when the sidebar is in mini mode
        Adding 'smini-visible-block' to an element will show it (display: block) only when the sidebar is in mini mode
    -->
    <nav id="sidebar" aria-label="Main Navigation">
        <!-- Side Header -->
        <div class="bg-header-dark">
            <div class="content-header bg-white-10">
                <!-- Logo -->
                <a class="font-w600 text-white tracking-wide" href="">
                            <span class="smini-visible">
                                D<span class="opacity-75">x</span>
                            </span>
                    <span class="smini-hidden">
                                Pondok Pesantren Ulul Albab <span class="opacity-75">Bojongkoneng</span>
                            </span>
                </a>
                <!-- END Logo -->

                <!-- Options -->
                <div>
                    <!-- Close Sidebar, Visible only on mobile screens -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                    <a class="d-lg-none text-white ml-2" data-toggle="layout" data-action="sidebar_close" href="javascript:void(0)">
                        <i class="fa fa-times-circle"></i>
                    </a>
                    <!-- END Close Sidebar -->
                </div>
                <!-- END Options -->
            </div>
        </div>
        <!-- END Side Header -->

        <!-- Sidebar Scrolling -->
        <div class="js-sidebar-scroll">
            <!-- Side Navigation -->
            <div class="content-side">
                <ul class="nav-main">
                    <li class="nav-main-item">
                        <a class="nav-main-link @if(\Request::is('/'))) active @endif" href="{{url('/')}}">
                            <i class="nav-main-link-icon fa fa-home"></i>
                            <span class="nav-main-link-name">Halaman Utama</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" @if(\Request::is('galeri'))) active @endif href="{{url('galeri')}}">
                            <i class="nav-main-link-icon fa fa-images"></i>
                            <span class="nav-main-link-name">Galeri Foto Pembangunan</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- END Side Navigation -->
        </div>
        <!-- END Sidebar Scrolling -->
    </nav>
    <!-- END Sidebar -->

    <!-- Header -->
    <header id="page-header">
        <!-- Header Content -->
        <div class="content-header">
            <!-- Left Section -->
            <div class="d-flex align-items-center">
                <!-- Logo -->
                <a class="link-fx font-size-lg font-w600 text-dark" href="">
                    Ponpes Ulul Albab <span class="text-primary">Bojongkoneng</span>
                </a>
                <!-- END Logo -->
            </div>
            <!-- END Left Section -->

            <!-- Right Section -->
            <div class="d-flex align-items-center">
                <!-- Menu -->
                <div class="d-none d-lg-block">
                    <ul class="nav-main nav-main-horizontal nav-main-hover">
                        <li class="nav-main-item">
                            <a class="nav-main-link @if(\Request::is('/'))) active @endif" href="{{url('/')}}">
                                <i class="nav-main-link-icon fa fa-home"></i>
                                <span class="nav-main-link-name">Halaman Utama</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link @if(\Request::is('galery'))) active @endif" href="{{url('/galery')}}">
                                <i class="nav-main-link-icon fa fa-images"></i>
                                <span class="nav-main-link-name">Galeri Foto Pembangunan</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link @if(\Request::is('daftardonatur'))) active @endif" href="{{url('/daftardonatur')}}">
                                <i class="nav-main-link-icon fa fa-user"></i>
                                <span class="nav-main-link-name">Daftar Donatur</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- END Menu -->

                <!-- Toggle Sidebar -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <button type="button" class="btn btn-dual d-lg-none ml-1" data-toggle="layout" data-action="sidebar_toggle">
                    <i class="fa fa-fw fa-bars"></i>
                </button>
                <!-- END Toggle Sidebar -->
            </div>
            <!-- END Right Section -->
        </div>
        <!-- END Header Content -->

        <!-- Header Loader -->
        <!-- Please check out the Loaders page under Components category to see examples of showing/hiding it -->
        <div id="page-header-loader" class="overlay-header bg-primary-darker">
            <div class="content-header">
                <div class="w-100 text-center">
                    <i class="fa fa-fw fa-2x fa-sun fa-spin text-white"></i>
                </div>
            </div>
        </div>
        <!-- END Header Loader -->
    </header>
    <!-- END Header -->

    <!-- Main Container -->
    <main id="main-container">
        @yield('container')
    </main>
    <!-- END Main Container -->

    <!-- Footer -->
    <footer id="page-footer" class="footer-static bg-white border-top">
        <div class="content py-4">
            <!-- Footer Navigation -->
            <div class="row items-push font-size-sm border-bottom pt-4">
                <div class="col-12 col-md-6">
                    <h3 class="font-w300">Pondok Pesantren Ulul Albab Bojongkoneng</h3>
                    <ul class="list list-simple-mini">
                        <li>
                            <a class="font-w600" href="https://ulabjk.daftarsantri.com">
                                <i class="fa fa-fw fa-link text-primary-lighter mr-1"></i> Profil Pesantren
                            </a>
                        </li>
                        <li>
                            <a class="font-w600" href="https://ulabjk.daftarsantri.com">
                                <i class="fa fa-fw fa-link text-primary-lighter mr-1"></i> PPDB
                            </a>
                        </li>
                        <li>
                            <a class="font-w600" href="javascript:void(0)">
                                <i class="fa fa-fw fa-link text-primary-lighter mr-1"></i> Berita Pesantren
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-12 col-md-6">
                    <h3 class="font-w300">Yayasan Ulul Albab Al Faqih</h3>
                    <div class="font-size-sm push">
                        Jl. Bojongkoneng Atas No.6 Kp. Pagersari RT.04 RW.20
                        <br>
                        Kel. Cibeunying Kec. Cimenyan Kab. Bandung<br>
                        <abbr title="Phone">P:</abbr> 085722620683
                    </div>
                </div>
            </div>
            <div class="row items-push font-size-sm border-bottom pt-2">
                <div class="w-100"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15844.383743856923!2d107.6506786!3d-6.8791091!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb48db1f34eb025c5!2sPondok%20Pesantren%20Ulul%20Albab%20Bojongkoneng!5e0!3m2!1sen!2sid!4v1623598868862!5m2!1sen!2sid" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>
            </div>
            <!-- END Footer Navigation -->

            <!-- Footer Copyright -->
            <div class="row font-size-sm pt-4">
                <div class="col-sm-6 order-sm-2 mb-1 mb-sm-0 text-center text-sm-right">
                    Dibuat oleh <a class="font-w600" href="https://github.com/kyrozyn">Andreas Rizki Rizaldi</a>                </div>
                <div class="col-sm-6 order-sm-1 text-center text-sm-left">
                    <a class="font-w600" href="https://github.com/ululalbabbjk/donasi-pembangunan" target="_blank">Sistem Informasi Pengelolaan Dana Sumbangan</a> &copy; <span data-toggle="year-copy"></span>
                </div>
            </div>
            <!-- END Footer Copyright -->
        </div>
    </footer>
    <!-- END Footer -->
</div>
<!-- END Page Container -->

<!-- Dashmix JS -->
<script src="{{asset('assets/js/dashmix.core.min.js')}}"></script>
<script src="{{asset('assets/js/dashmix.app.min.js')}}"></script>
@livewireScripts
@yield('endscript')
</body>
</html>
