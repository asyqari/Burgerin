<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="<?= base_url('assets/'); ?>images/logo-burger.png" type="">

    <title> Burgerin </title>

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/'); ?>css/bootstrap.css" />

    <!--owl slider stylesheet -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <!-- nice select  -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css"
        integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ=="
        crossorigin="anonymous" />
    <!-- font awesome style -->
    <link href="<?= base_url('assets/'); ?>css/font-awesome.min.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="<?= base_url('assets/'); ?>css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="<?= base_url('assets/'); ?>css/responsive.css" rel="stylesheet" />

</head>

<body>

    <div class="hero_area">
        <div class="bg-box">
            <img src="<?= base_url('assets/'); ?>images/bg.png" alt="">
        </div>
        <!-- header section strats -->
        <header class="header_section">
            <div class="container">
                <nav class="navbar navbar-expand-lg custom_nav-container ">
                    <a class="navbar-brand" href="<?= base_url('assets/'); ?>index.html">
                        <span>
                            BURGERIN
                        </span>
                    </a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class=""> </span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav  mx-auto ">
                            <li class="nav-item">
                                <a class="nav-link" href="<?= site_url('C_auth/index_login_user'); ?>">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"
                                    href="<?= site_url('C_auth/restaurant_menu_login_user'); ?>">Menu</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="<?= site_url('C_auth/restaurant_book'); ?>">Book Menu</a>
                            </li>
                        </ul>
                        <div class="user_option">
                            <a href="" class="user_link">
                                <i class="fa fa-user" aria-hidden="true"></i>
                            </a>
                            <a class="cart_link" href="#">
                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                    viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;"
                                    xml:space="preserve">
                                    <g>
                                        <g>
                                            <path d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248
                   c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z" />
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <path d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48
                   C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064
                   c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4
                   C457.728,97.71,450.56,86.958,439.296,84.91z" />
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <path d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296
                   c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z" />
                                        </g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                </svg>
                            </a>
                            <form class="form-inline">
                                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </button>
                            </form>
                            <a href="<?= site_url("C_auth/login") ?>" class="order_online">
                                Masuk Akun
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <!-- end header section -->
        <!-- slider section -->
        <section class="slider_section ">
            <div id="customCarousel1" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="container ">
                            <div class="row">
                                <div class="col-md-7 col-lg-6 ">
                                    <div class="detail-box">
                                        <h1>
                                            Burgerin Restaurant
                                        </h1>
                                        <p>
                                            Burgerin adalah tempat yang sempurna untuk merayakan kesenangan makan burger
                                            dengan cita rasa yang menggoda. Jadi, datanglah ke Burgerin dan nikmati
                                            hidangan burger yang lezat dalam suasana yang menyenangkan dan hangat.
                                        </p>
                                        <div class="btn-box">
                                            <a href="<?= site_url('C_auth/restaurant_menu_login_user'); ?>"
                                                class="btn1">
                                                Pesan Sekarang
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <div class="container ">
                            <div class="row">
                                <div class="col-md-7 col-lg-6 ">
                                    <div class="detail-box">
                                        <h1>
                                            Hari Senin Mantap
                                        </h1>
                                        <p>
                                            Setiap hari Senin, kami menawarkan diskon spesial untuk semua burger kami.
                                            Dapatkan harga istimewa untuk setiap burger yang Anda pesan, sehingga Anda
                                            dapat menikmati variasi rasa tanpa harus khawatir tentang harga.
                                        </p>
                                        <div class="btn-box">
                                            <a href="<?= site_url('C_auth/restaurant_menu_login_user'); ?>"
                                                class="btn1">
                                                Pesan Sekarang
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="container ">
                            <div class="row">
                                <div class="col-md-7 col-lg-6 ">
                                    <div class="detail-box">
                                        <h1>
                                            Paket Combo Spesial
                                        </h1>
                                        <p>
                                            Nikmati pilihan combo kami yang terdiri dari burger, kentang goreng, dan
                                            minuman dengan harga yang lebih terjangkau. Ini adalah cara sempurna untuk
                                            menikmati berbagai hidangan kami dengan harga yang lebih hemat.
                                        </p>
                                        <div class="btn-box">
                                            <a href="<?= site_url('C_auth/restaurant_menu_login_user'); ?>"
                                                class="btn1">
                                                Pesan Sekarang
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <ol class="carousel-indicators">
                        <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
                        <li data-target="#customCarousel1" data-slide-to="1"></li>
                        <li data-target="#customCarousel1" data-slide-to="2"></li>
                    </ol>
                </div>
            </div>

        </section>
        <!-- end slider section -->
    </div>
    <!-- book section -->
    <section class="book_section layout_padding">
        <div class="container">
            <div class="heading_container">
                <h2>
                    Book A Table
                </h2>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form_container">
                        <form action="">
                            <div>
                                <input type="text" class="form-control" placeholder="Your Name" />
                            </div>
                            <div>
                                <input type="text" class="form-control" placeholder="Phone Number" />
                            </div>
                            <div>
                                <input type="email" class="form-control" placeholder="Your Email" />
                            </div>
                            <div>
                                <select class="form-control nice-select wide">
                                    <option value="" disabled selected>
                                        How many persons?
                                    </option>
                                    <option value="">
                                        2
                                    </option>
                                    <option value="">
                                        3
                                    </option>
                                    <option value="">
                                        4
                                    </option>
                                    <option value="">
                                        5
                                    </option>
                                </select>
                            </div>
                            <div>
                                <input type="date" class="form-control">
                            </div>
                            <div class="btn_box">
                                <button>
                                    Book Now
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="map_container ">
                        <div id="googleMap"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end book section -->
    <!-- footer section -->
    <footer class="footer_section">
        <div class="container">
            <div class="row">
                <div class="col-md-4 footer-col">
                    <div class="footer_contact">
                        <h4>
                            Hubungi Kami
                        </h4>
                        <div class="contact_link_box">
                            <a href="">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <span>
                                    Kota Bandung
                                </span>
                            </a>
                            <a href="">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <span>
                                    087 874516431
                                </span>
                            </a>
                            <a href="">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <span>
                                    burgerin@gmail.com
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 footer-col">
                    <div class="footer_detail">
                        <a href="" class="footer-logo">
                            Burgerin
                        </a>
                        <p>
                            Sejak 2023
                        </p>
                        <div class="footer_social">
                            <a href="https://www.instagram.com/burgerking.id/?hl=en">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 footer-col">
                    <h4>
                        Jam Operasional
                    </h4>
                    <p>
                        Setiap Hari
                    </p>
                    <p>
                        24 Hours
                    </p>
                </div>
            </div>
            <div class="footer-info">
                <p>
                    &copy; <span id="displayYear"></span> Burgerin
                </p>
            </div>
        </div>
    </footer>
    <!-- footer section -->

    <!-- jQery -->
    <script src="<?= base_url('assets/'); ?>js/jquery-3.4.1.min.js"></script>
    <!-- popper js -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <!-- bootstrap js -->
    <script src="<?= base_url('assets/'); ?>js/bootstrap.js"></script>
    <!-- owl slider -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
    </script>
    <!-- isotope js -->
    <script src="https://unpkg.com/isotope-layout@3.0.4/dist/isotope.pkgd.min.js"></script>
    <!-- nice select -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>
    <!-- custom js -->
    <script src="<?= base_url('assets/'); ?>js/custom.js"></script>
    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
    </script>
    <!-- End Google Map -->

</body>

</html>