<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />
    <meta name="description" content="kidstar modeling agency port hacourt Nigeria" />
    <meta property="og:title" content="kidstar modeling agency port hacourt Nigeria" />
    <meta property="og:description" content="kidstar modeling agency port hacourt Nigeria" />
    <meta property="og:image" content="kidstar modeling agency port hacourt Nigeria" />
    <meta name="format-detection" content="telephone=no">

    <!-- FAVICONS ICON -->
    <link rel="icon" href="{{ asset('images/kidstar_models_logo.png') }}" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/kidstar_models_logo.png') }}" />

    <!-- PAGE TITLE HERE -->
    <title>@yield('home') | Kidstar Modeling Agency </title>

    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--[if lt IE 9]>
    <script src="{{ asset('js/html5shiv.min.js') }}"></script>
    <script src="{{ asset('js/respond.min.js') }}"></script>
    <![endif]-->

    <!-- STYLESHEETS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/plugins.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/templete.min.css') }}">
    <link class="skin" rel="stylesheet" type="text/css" href="{{ asset('css/skin/skin-1.css') }}">

    <!-- Revolution Slider Css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/revolution/revolution/css/layers.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/revolution/revolution/css/settings.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/revolution/revolution/css/navigation.css') }}">
    <!-- Revolution Navigation Style -->

    <!--Google fonts-->
    <style>
        @import url('https://fonts.googleapis.com/css?family=Courgette&display=swap');
    </style>
</head>

<body id="bg">
<div class="page-wraper">
    <div id="loading-area"></div>
    <!-- header -->
    <header class="site-header header center mo-left">
        <div class="top-bar bg-primary text-white">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="dlab-topbar-left">
                        <ul>
                            <li><i class="fa fa-phone m-r5"></i> 08181073065, 08091304065, 09014818914</li>
                            <li><i class="fa fa-map-marker m-r5"></i> Plot f6 abacha road GRA, Port Harcourt, Rivers state, Nigeria</li>
                        </ul>
                    </div>
                    <div class="dlab-topbar-right topbar-social">
                        <ul>
                            <li><a href="https://web.facebook.com/kidstarmodels/?_rdc=1&_rdr" class="site-button-link facebook hover"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://www.instagram.com/kid_starmodels/" class="site-button-link instagram hover"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- main header -->
        <div class="sticky-header main-bar-wraper navbar-expand-lg">
            <div class="main-bar clearfix ">
                <div class="container clearfix">
                    <!-- website logo -->
                    <div class="logo-header mostion">
                        <a href="{{ url('/') }}" class="dez-page">
                            <img src="{{ asset('images/kidstar_models_logo.png') }}" width="50" alt="kidstar models"></a>
                    </div>
                    <!-- nav toggle button -->
                    <button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>

                    <!-- main nav -->
                    <div class="header-nav navbar-collapse collapse justify-content-between" id="navbarNavDropdown">
                        <ul class="nav navbar-nav">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="{{ url('about-us') }}">About</a></li>
                            <li><a href="{{ url('little-miss-damsel-nigeria') }}">LMDN</a></li>
                        </ul>

                        <ul class="nav navbar-nav">
                            <li><a href="{{ url('gallery') }}">Gallery</a></li>
                            <li><a href="{{ url('register') }}">Register</a></li>
                            <li><a href="{{ url('contact-us') }}">Contact</a></li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
        <!-- main header END -->
    </header>
    <!-- header END -->

    @yield('content')

    <!-- Footer -->
    <footer style="background-color: #FF5EA5 !important;" class="site-footer text-uppercase">

        <div class="footer-top">
            <div class="container wow fadeIn" data-wow-delay="0.5s">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-3 col-sm-3 col-5">
                        <div class="widget widget_services border-0">
                            <h6 class="m-b20">Quick Menu</h6>
                            <ul>
                                <li><a href="{{ url('/') }}">Home</a></li>
                                <li><a href="{{ url('about-us') }}">About</a></li>
                                <li><a href="{{ url('little-miss-damsel-nigeria') }}">LMDN</a></li>
                                <li><a href="{{ url('gallery') }}">Gallery</a></li>
                                <li><a href="{{ url('register') }}">Register</a></li>
                                <li><a href="{{ url('contact-us') }}">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-5">
                        <div class="widget widget_getintuch">
                            <h6 class="m-b30">Contact us</h6>
                            <ul>
                                <li><i class="ti-location-pin"></i><strong>Address</strong> Plot f6 Abacha road GRA, Port Harcourt, Rivers state, Nigeria </li>
                                <li><i class="ti-mobile"></i><strong>Phone: </strong>08181073065</li>
                                <li><i class="ti-mobile"></i><strong>Phone: </strong>08091304065</li>
                                <li><i class="ti-mobile"></i><strong>Phone: </strong>09014818914</li>
                                <li><i class="ti-email"></i><strong>Email: </strong>info@kidstarmodels.com</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                        <div class="widget">
                            <h6 class="m-b30">Subscribe To Our Newsletter</h6>
                            <p class="text-capitalize m-b20">If you have any questions, you can contact with us so that we can give you a satisfying answer. Subscribe to our newsletter to get our latest products.</p>
                            <ul class="list-inline m-a0">
                                <li><a href="https://web.facebook.com/kidstarmodels/?_rdc=1&_rdr" class="site-button facebook circle "><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://www.instagram.com/kid_starmodels/" class="site-button instagram circle "><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer bottom part -->

    </footer>
    <!-- Footer END-->
    <button class="scroltop fa fa-chevron-up" ></button>
</div>
<!-- JAVASCRIPT FILES ========================================= -->
<script src="{{ asset('js/jquery.min.js') }}"></script><!-- JQUERY.MIN JS -->
<script src="{{ asset('plugins/wow/wow.js') }}"></script><!-- WOW JS -->
<script src="{{ asset('plugins/bootstrap/js/popper.min.js') }}"></script><!-- BOOTSTRAP.MIN JS -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script><!-- BOOTSTRAP.MIN JS -->
<script src="{{ asset('plugins/bootstrap-select/bootstrap-select.min.js') }}"></script><!-- FORM JS -->
<script src="{{ asset('plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js') }}"></script><!-- FORM JS -->
<script src="{{ asset('plugins/magnific-popup/magnific-popup.js') }}"></script><!-- MAGNIFIC POPUP JS -->
<script src="{{ asset('plugins/counter/waypoints-min.js') }}"></script><!-- WAYPOINTS JS -->
<script src="{{ asset('plugins/counter/counterup.min.js') }}"></script><!-- COUNTERUP JS -->
<script src="{{ asset('plugins/imagesloaded/imagesloaded.js') }}"></script><!-- IMAGESLOADED -->
<script src="{{ asset('plugins/masonry/masonry-3.1.4.js') }}"></script><!-- MASONRY -->
<script src="{{ asset('plugins/masonry/masonry.filter.js') }}"></script><!-- MASONRY -->
<script src="{{ asset('plugins/owl-carousel/owl.carousel.js') }}"></script><!-- OWL SLIDER -->
<script src="{{ asset('plugins/rangeslider/rangeslider.js') }}" ></script><!-- Rangeslider -->
<script src="{{ asset('plugins/lightgallery/js/lightgallery-all.js') }}"></script><!-- LIGHT GALLERY -->
<script src="{{ asset('js/custom.min.js') }}"></script><!-- CUSTOM FUCTIONS  -->
<script src="{{ asset('js/dz.carousel.min.js') }}"></script><!-- SORTCODE FUCTIONS  -->
<script src="{{ asset('js/dz.ajax.js') }}"></script><!-- CONTACT JS  -->

<!-- revolution JS FILES -->
<script src="{{ asset('plugins/revolution/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ asset('plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>

<!-- Slider revolution 5.0 Extensions  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script src="{{ asset('plugins/revolution/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
<script src="{{ asset('plugins/revolution/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
<script src="{{ asset('plugins/revolution/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
<script src="{{ asset('plugins/revolution/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
<script src="{{ asset('plugins/revolution/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
<script src="{{ asset('plugins/revolution/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
<script src="{{ asset('plugins/revolution/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
<script src="{{ asset('plugins/revolution/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
<script src="{{ asset('js/rev.slider.js') }}"></script>
<script>
    jQuery(document).ready(function() {
        'use strict';
        dz_rev_slider_6();
    });	/*ready*/
</script>
</body>

</html>
