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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
</head>
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
<style>
    header {
        background-color: black;
    }
</style>
</head>

<body>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">


    <script type="text/javascript">
        <?php if ($this->session->flashdata('success')) { ?>
            toastr.success("<?php echo $this->session->flashdata('success'); ?>");
        <?php } else if ($this->session->flashdata('error')) {  ?>
            toastr.error("<?php echo $this->session->flashdata('error'); ?>");
        <?php } else if ($this->session->flashdata('warning')) {  ?>
            toastr.warning("<?php echo $this->session->flashdata('warning'); ?>");
        <?php } else if ($this->session->flashdata('info')) {  ?>
            toastr.info("<?php echo $this->session->flashdata('info'); ?>");
        <?php } ?>
    </script>



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
                            <li class="nav-item">
                                <a class="nav-link" href="<?= site_url('C_auth/index_login_user'); ?>">Home</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="<?= site_url('C_auth/restaurant_menu_login_user'); ?>">Menu</a>
                            </li>
                        </ul>
                        <div class="user_option">
                            <?php
                            $keranjang = $this->cart->contents();
                            $jml_item = 0;
                            foreach ($keranjang as $key => $value) {
                                $jml_item = $jml_item + $value['qty'];
                            }
                            ?>
                            <a class="cart_link" href="<?= base_url('Belanja/tampil') ?>">
                                <i class="bi bi-cart" aria-hidden="true"></i>
                                <span class="badge badge-danger navbar-badge"><?= $jml_item ?></span>
                            </a>
                            <a href="<?= site_url("C_auth/logout_user") ?>" class="order_online">
                                Logout
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <!-- end header section -->
        <!-- slider section -->
        <section class="slider_section">
            <div id="customCarousel1" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="container ">
                            <div class="row">
                                <div class="col-md-7 col-lg-6 ">
                                    <div class="detail-box">
                                        <h1>
                                            Burgerin Menu
                                        </h1>
                                        <p>
                                            Burgerin Menghadirkan Beberapa Menu yang Bervariasi
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- end slider section -->
    </div>
    <!-- food section -->

    <section class="food_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    Pilihan Menu
                </h2>
            </div>

            <div class="filters-content">
                <div class="row grid">
                    <?php
                    foreach ($t_menu as $menu_tampil) {
                    ?>
                        <div class="col-sm-6 col-lg-4 all pizza">
                            <?php
                            echo form_open('belanja/add');
                            echo form_hidden('id', $menu_tampil->id_menu);
                            echo form_hidden('qty', 1);
                            echo form_hidden('price', $menu_tampil->harga_menu);
                            echo form_hidden('name', $menu_tampil->nama_menu);
                            echo form_hidden('image', $menu_tampil->foto_menu);
                            echo form_hidden('redirect_page', str_replace('index.php/', '', current_url()));
                            ?>
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
                                            <button href="<?php echo base_url() . 'Belanja/add' ?>" class="btn btn-sm btn-warning">
                                                <i class="bi bi-cart-plus-fill"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <?php echo form_close(); ?>
                        </div>
                    <?php } ?>
                </div>
    </section>
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