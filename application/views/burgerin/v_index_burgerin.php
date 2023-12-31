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
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <!-- nice select  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ==" crossorigin="anonymous" />
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

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class=""> </span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav  mx-auto ">
                            <li class="nav-item active">
                                <a class="nav-link" href="<?= site_url('C_auth/index'); ?>">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= site_url('C_auth/restaurant_menu'); ?>">Menu</a>
                            </li>
                        </ul>
                        <div class="user_option">
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
                                            <a href="<?= site_url("C_auth/login") ?>" class="btn1">
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
                                            <a href="<?= site_url("C_auth/login") ?>" class="btn1">
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
                                            <a href="" class="btn1">
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

    <!-- food section -->
    <br>
    <section class="food_section layout_padding-bottom">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    Pilihan Menu
                </h2>
            </div>
            <?php
            $i = 0;
            ?>
            <div class="filters-content">
                <div class="row grid">
                    <?php foreach ($t_menu as $menu_tampil) { ?>
                        <div class="col-sm-6 col-lg-4 all pizza">
                            <div class="box">
                                <div>
                                    <div class="img-box">
                                        <img src="../assets/images/<?= $menu_tampil->foto_menu ?>" alt="">
                                    </div>
                                    <div class="detail-box">
                                        <h5></h5>
                                        <?= $menu_tampil->nama_menu ?>
                                        </h5>
                                        <p>
                                            <?= $menu_tampil->deskripsi_menu ?>
                                        </p>
                                        <div class="options">
                                            <h6>
                                                <?= $menu_tampil->harga_menu ?>
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                        if (++$i == 6) break;
                    }
                    ?>
                </div>
                <div class="btn-box">
                    <a href="<?= site_url('C_auth/restaurant_menu'); ?>">
                        View More
                    </a>
                </div>
    </section>

    <!-- end food section -->

    <!-- book section -->
    <section class="book_section layout_padding">
        <div class="container">
            <div class="heading_container">
                <h2>
                    Tentang Burgerin
                </h2>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form_container">
                        <p>
                            Burgerin adalah restoran burger yang menawarkan pengalaman kuliner yang lezat dan menggugah
                            selera. Dengan suasana modern dan nyaman, kami menyajikan berbagai pilihan burger dengan
                            daging panggang segar, roti panggang renyah, serta topping dan saus yang kreatif. Dari
                            burger klasik hingga opsi vegetarian dan vegan, Burgerin memastikan setiap pelanggan dapat
                            menemukan hidangan sesuai selera mereka. Dengan pelayanan ramah dan profesional, restoran
                            ini adalah tempat ideal untuk menikmati burger yang lezat dalam suasana yang menyenangkan.
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="map_container ">
                        <div class="img-box">
                            <img src="<?= base_url('assets/'); ?>images/tentang-burgerin.png" alt="" class="box-img">
                        </div>
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
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
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