<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Admin | PT Annamiroh Travelindo</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <!-- <link rel="shortcut icon" type="image/x-icon" href="<?= base_url(); ?>assets/img/favicon.ico"> -->

    <!-- CSS here -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/flaticon.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/slicknav.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/animate.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/magnific-popup.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/themify-icons.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/slick.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/nice-select.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">
</head>

<body>
    <header>
        <!-- Header Start -->
        <div class="header-area">
            <div class="main-header ">
                <div class="header-bottom  header-sticky">
                    <div class="container">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-2 col-lg-2 col-md-1">
                                <div class="logo">
                                    <a href="index.html">
                                        <img src="<?= base_url(); ?>assets/img/logo/annamiroh.png" alt="" height="60"
                                            width="300"></a>
                                </div>
                            </div>
                            <div class="col-xl-10 col-lg-10 col-md-10">
                                <!-- Main-menu -->
                                <div class="main-menu f-right d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li>
                                                <h4 href="index.html">Admin</h4>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
    </br>
    </br>

    <main>
        <!-- Our Services Start -->
        <!-- <div class="our-services"> -->

        <div class="container">
            <div>
                <a class="button btn-success" href='<?php echo site_url('admin/user')?>'>USER</a>
                <a class="button btn-success" href='<?php echo site_url('admin/paket')?>'>PAKET</a>
                <a class="button btn-success" href='<?php echo site_url('admin/berita')?>'>BERITA</a>
                <a class="button btn-success" href='<?php echo site_url('admin/promo')?>'>PROMO</a>
                <a class="button btn-success" href='<?php echo site_url('admin/comment')?>'>COMMENT</a>
            </div>
            <header class="header">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-10 offset-xl-1">
                            <hr>
                            <a class="button btn-success" style="btn-success"
                                href="<?php echo base_url("welcome/export"); ?>">Export ke
                                Excel</a><br><br>
                            <table border="2" cellpadding="8">
                                <tr>
                                    <th>ID Komentar</th>
                                    <th>Status Komentar</th>
                                    <th>Nama</th>
                                    <th>Isi</th>
                                    <th>ID Paket</th>
                                </tr>
                                <?php
                                if( ! empty($comment)){ // Jika data pada database tidak sama dengan empty (alias ada datanya)
                                     foreach($comment as $data){ // Lakukan looping pada variabel siswa dari controller
                                      echo "<tr>";
                                    echo "<td>".$data->comment_id."</td>";
                                    echo "<td>".$data->comment_status."</td>";
                                    echo "<td>".$data->comment_nama."</td>";
                                    echo "<td>".$data->comment_isi."</td>";
                                    echo "<td>".$data->paket_id."</td>";
                                    echo "</tr>";
                                     }
                                }else{ // Jika data tidak ada
                                     echo "<tr><td colspan='4'>Data tidak ada</td></tr>";
                                }
                                ?>
                            </table>
                            </br>
                        </div> <!-- end of col -->
                    </div> <!-- end of row -->
                </div> <!-- end of container -->
            </header> <!-- end of ex-header -->
        </div>
        </br>
        </div>
        <!-- Our Services End -->
        <a href="<?php echo site_url('welcome/logout')?>" type="button" class="btn btn-danger">Logout</a>
    </main>
    <footer>
        <!-- Footer Start-->
        <div data-background="<?= base_url(); ?>assets/img/service/footer_bg.jpg">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-3 col-lg-3 col-md-5 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <div class="single-footer-caption mb-30">
                                <!-- logo -->
                                <div class="footer-logo">
                                    <a href="index.html"><img src="<?= base_url(); ?>assets/img/logo/logo-2.png" alt=""
                                            height="60" width="300"></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- Footer bottom -->
                <div class="row pt-padding">
                    <div class="col-xl-7 col-lg-7 col-md-7">
                        <div class="footer-copy-right">
                            <p>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>
                                document.write(new Date().getFullYear());
                                </script> All rights reserved | This template is made with <i class="ti-heart"
                                    aria-hidden="true"></i> by <a href="https://colorlib.com"
                                    target="_blank">Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5 col-md-5">
                        <!-- social -->
                        <div class="footer-social f-right">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-behance"></i></a>
                            <a href="#"><i class="fas fa-globe"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->
    </footer>

    <!-- JS here -->

    <!-- All JS Custom Plugins Link Here here -->
    <script src="<?= base_url(); ?>assets/js/vendor/modernizr-3.5.0.min.js"></script>

    <!-- Jquery, Popper, Bootstrap -->
    <!-- <script src="<?= base_url(); ?>assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/popper.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script> -->
    <!-- Jquery Mobile Menu -->
    <script src="<?= base_url(); ?>assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="<?= base_url(); ?>assets/js/owl.carousel.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/slick.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="<?= base_url(); ?>assets/js/wow.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/animated.headline.js"></script>
    <script src="<?= base_url(); ?>assets/js/jquery.magnific-popup.js"></script>

    <!-- Scrollup, nice-select, sticky -->
    <script src="<?= base_url(); ?>assets/js/jquery.scrollUp.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/jquery.nice-select.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/jquery.sticky.js"></script>

    <!-- contact js -->
    <script src="<?= base_url(); ?>assets/js/contact.js"></script>
    <script src="<?= base_url(); ?>assets/js/jquery.form.js"></script>
    <script src="<?= base_url(); ?>assets/js/jquery.validate.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/mail-script.js"></script>
    <script src="<?= base_url(); ?>assets/js/jquery.ajaxchimp.min.js"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="<?= base_url(); ?>assets/js/plugins.js"></script>
    <script src="<?= base_url(); ?>assets/js/main.js"></script>

</body>

</html>