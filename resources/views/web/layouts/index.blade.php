<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="Licortech">

    <meta property="og:title" content="" />
    <meta property="og:url" content="" />
    <meta property="og:description" content="" />
    <meta property="og:image" content="" />

    <title>CITY TOURS - City tours and travel site template by Ansonika</title>

    <base href="{{ asset('') }}">

    <!-- Favicons-->
    <link rel="shortcut icon" href="web/img/favicon.ico" type="image/x-icon">

    <!-- Font -->
    <link
        href="https://fonts.googleapis.com/css2?family=Gochi+Hand&family=Montserrat:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <link href="web/css/bootstrap.min.css" rel="stylesheet">
    <link href="web/css/style.css" rel="stylesheet">
    <link href="web/css/vendors.css" rel="stylesheet">
    <link href="web/css/colors/color-orange.css" rel="stylesheet">


    <link href="web/css/custom.css" rel="stylesheet">

    @stack('css')
</head>

<body>
    <div id="preloader">
        <div class="sk-spinner sk-spinner-wave">
            <div class="sk-rect1"></div>
            <div class="sk-rect2"></div>
            <div class="sk-rect3"></div>
            <div class="sk-rect4"></div>
            <div class="sk-rect5"></div>
        </div>
    </div>
    <!-- End Preload -->

    <div class="layer"></div>
    <!-- Mobile menu overlay mask -->

    <!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <div id="logo_home">
                        <h1><a href="index.html" title="City tours travel template">City Tours travel template</a></h1>
                    </div>
                </div>
                <nav class="col-9">
                    <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="#"><span>Menu
                            mobile</span></a>
                    <div class="main-menu">
                        <div id="header_menu">
                            <img src="img/logo_sticky.png" width="160" height="34" alt="City tours">
                        </div>
                        <a href="#" class="open_close" id="close_in"><i class="icon_set_1_icon-77"></i></a>
                        <ul>
                            <li class="submenu">
                                <a href="{{ route('home') }}">Trang chủ</a>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);">Về Strasbourg</a>
                                <ul>
                                    <li><a href="all_tours_list.html">Sự kiện</a></li>
                                    <li><a href="all_tours_grid.html">Địa danh</a></li>
                                    <li><a href="all_tours_grid.html">Ẩm thực</a></li>
                                    <li><a href="all_tours_grid.html">Lịch trình gợi ý</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);">Tour</a>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);">Homestay</a>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);">Nhà hàng</a>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);">Quán nước</a>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);">Liên hệ</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- End Header -->

    @stack('main')
    <!-- End main -->

    <footer class="revealed">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h3>Need help?</h3>
                    <a href="tel://004542344599" id="phone">+45 423 445 99</a>
                    <a href="mailto:help@citytours.com" id="email_footer">help@citytours.com</a>
                </div>
                <div class="col-md-3">
                    <h3>About</h3>
                    <ul>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Login</a></li>
                        <li><a href="#">Register</a></li>
                        <li><a href="#">Terms and condition</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h3>Discover</h3>
                    <ul>
                        <li><a href="#">Community blog</a></li>
                        <li><a href="#">Tour guide</a></li>
                        <li><a href="#">Wishlist</a></li>
                        <li><a href="#">Gallery</a></li>
                    </ul>
                </div>
                <div class="col-md-2">
                    <h3>Settings</h3>
                    <div class="styled-select">
                        <select name="lang" id="lang">
                            <option value="English" selected>English</option>
                            <option value="French">French</option>
                            <option value="Spanish">Spanish</option>
                            <option value="Russian">Russian</option>
                        </select>
                    </div>
                    <div class="styled-select">
                        <select name="currency" id="currency">
                            <option value="USD" selected>USD</option>
                            <option value="EUR">EUR</option>
                            <option value="GBP">GBP</option>
                            <option value="RUB">RUB</option>
                        </select>
                    </div>
                </div>
            </div><!-- End row -->
            <div class="row">
                <div class="col-md-12">
                    <div id="social_footer">
                        <ul>
                            <li><a href="#"><i class="icon-facebook"></i></a></li>
                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                            <li><a href="#"><i class="icon-google"></i></a></li>
                            <li><a href="#"><i class="icon-instagram"></i></a></li>
                            <li><a href="#"><i class="icon-pinterest"></i></a></li>
                            <li><a href="#"><i class="icon-vimeo"></i></a></li>
                            <li><a href="#"><i class="icon-youtube-play"></i></a></li>
                        </ul>
                        <p>© Citytours 2022</p>
                    </div>
                </div>
            </div><!-- End row -->
        </div><!-- End container -->
    </footer>
    <!-- End footer -->

    <div id="toTop"></div>
    <!-- Back to top button -->


    <!-- Common scripts -->
    <script src="web/js/jquery-3.6.1.min.js"></script>
    <script src="web/js/common_scripts_min.js"></script>
    <script src="web/js/functions.js"></script>

    <!-- Video header scripts -->
    <script src="web/js/modernizr.js"></script>
    <script src="web/js/video_header.js"></script>
    <script>
        HeaderVideo.init({
            container: $('.header-video'),
            header: $('.header-video--media'),
            videoTrigger: $("#video-trigger"),
            autoPlayVideo: false
        });
    </script>

    @stack('js')
</body>

</html>
