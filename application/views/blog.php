<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Paket Detail | PT An Namiroh Travelindo</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url(); ?>assets/img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <!-- <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/slicknav.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/animate.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/magnific-popup.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/themify-icons.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/slick.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/nice-select.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/responsive.css">
</head>

<body>
    <!-- Preloader Start -->
    <!-- <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="<?= base_url(); ?>assets/img/logo/annamiroh.png" alt="">
                </div>
            </div>
        </div>
    </div> -->
    <!-- Preloader Start -->
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
                                            <li><a href="<?php echo site_url('welcome/home')?>">Beranda</a></li>
                                            <li><a href="<?php echo site_url('blog/detail')?>">Paket</a></li>
                                            <li><a href="<?php echo site_url('welcome/home')?>">Destinasi</a></li>
                                            <li><a href="<?php echo site_url('blog/detail')?>">Berita</a>
                                                <ul class="submenu">
                                                    <!-- <li><a href="blog.html">Blog</a></li> -->
                                                    <li><a href="single-blog.html">Berita Detail</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="contact.html">Contact</a></li>
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
    <!-- slider Area Start-->
    <div class="slider-area ">
        <!-- Mobile Menu -->
        <div class="single-slider slider-height2 d-flex align-items-center"
            data-background="<?= base_url(); ?>assets/img/hero/contact_hero.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>Paket Detail</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider Area End-->
    <!--================Blog Area =================-->
    <section class="single-post-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 posts-list">
                    <div class="single-post">
                        <div class="feature-img">
                            <img class="img-fluid"
                                src="<?php echo base_url(); ?>/assets/uploads/paket/<?php echo $gambar;?>" alt="">
                        </div>
                        <div class="blog_details">
                            <h2><?php echo $nama;?>
                            </h2>
                            <h4 class="excert">
                                <?php echo $harga;?>
                            </h4>
                        </div>
                    </div>
                    <div class="navigation-top">
                        <div class="d-sm-flex justify-content-between text-center">
                            <p class="like-info"><span class="align-middle"><i class="fa fa-heart"></i></span> Lily and
                                4
                                people like this</p>
                            <div class="col-sm-4 text-center my-2 my-sm-0">
                            </div>
                            <ul class="social-icons">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fab fa-behance"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="comments-area">
                        <h4>Komentar</h4>



                        <!-- <div class="comment-list">
                            <div class="single-comment justify-content-between d-flex">
                                <div class="user justify-content-between d-flex">
                                    <div class="desc">
                                        <p class="comment">
                                            <?php echo $utama->isi?>
                                        </p>
                                        <div class="d-flex justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <h5>
                                                    <a href="#"><?php echo $utama->nama?></a>
                                                </h5>

                                            </div>
                                            <div class="reply-btn">
                                                <a onclick="document.getElementById('<?php echo $utama->comment_id?>').style.display='block'"
                                                    class="btn-reply text-primary">Balas</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <?php
                         $content_id =  $paket_id;
                         $query = $this->db->query("SELECT * FROM comment WHERE status='0' AND paket_id = '$content_id'");
                         foreach ($query->result() as $utama):
                        ?>
                        <div class="container">

                            <div class="w3-panel w3-pale-blue w3-leftbar w3-border-blue">
                                <p>
                                    <b><?php echo $utama->nama?></b>
                                    <br><?php echo $utama->isi?>
                                    <br><button class="w3-button w3-tiny w3-blue"
                                        onclick="document.getElementById('<?php echo $utama->comment_id?>').style.display='block'">Balas</button>
                                </p>
                            </div>
                        </div>
                        <?php
                        $content_id = $content_id;
                        $comment_id=$utama->comment_id;
                        $query = $this->db->query("SELECT * FROM comment WHERE status='$comment_id' AND paket_id = '$content_id'");
                         foreach ($query->result() as $balasan):
                        ?>
                        <div class="container">

                            <div class="w3-panel w3-pale-blue w3-leftbar w3-border-blue child">
                                <p>
                                    <b><?php echo $balasan->nama?></b>
                                    <br><?php echo $balasan->isi?></br>
                                </p>
                            </div>
                        </div>


                        <?php endforeach;?>
                        <div id="<?php echo $utama->comment_id?>" class="w3-modal">
                            <div class="w3-modal-content modal">
                                <header class="w3-container w3-blue">
                                    <span
                                        onclick="document.getElementById('<?php echo $utama->comment_id?>').style.display='none'"
                                        class="w3-button w3-display-topright">&times;</span>
                                    <h2>Balas Komentar</h2>
                                </header>
                                <div class="w3-container">
                                    <form class="w3-container" method="POST"
                                        action="<?php echo site_url('blog/balas') ?>">
                                        <input type="hidden" name="comment_id" value="<?php echo $utama->comment_id?>">
                                        <input type="hidden" name="content_id" value="<?php echo $content_id?>">
                                        <div class="w3-section">
                                            <input class="w3-input w3-border w3-margin-bottom" type="text"
                                                placeholder="Nama" name="nama" required>
                                            <input class="w3-input w3-border" type="email" placeholder="Email"
                                                name="email" required>
                                            <br>
                                            <textarea style="width: 100%;" name="isi"></textarea>
                                            <button class="w3-button w3-block w3-blue w3-section w3-padding"
                                                type="submit">Kirim</button>
                                        </div>
                                    </form>
                                </div>
                                <footer class="w3-container w3-blue w3-border-top w3-padding-16"></footer>
                            </div>
                        </div>
                        <?php endforeach;?>
                    </div>
                    <div class="comment-form">
                        <!-- <h4>Tulis Komen</h4> -->
                        <form method="POST" action="<?php echo site_url('blog/kirim') ?>"
                            class="form-contact comment_form" action="#" id="commentForm">
                            <div class="row">
                                <input type="hidden" value="<?php echo $paket_id;?>" name="id">
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="w3-input w3-border" name="isi" id="isi" cols="30" rows="9"
                                            placeholder="Write Comment"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input class="w3-input w3-border" name="nama" id="nama" type="text"
                                            placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input class="w3-input w3-border" name="email" id="email" type="email"
                                            placeholder="Email">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="button button-contactForm btn_1 boxed-btn">Kirim</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ Blog Area end =================-->

    <footer>
        <!-- Footer Start-->
        <div class="footer-area footer-padding footer-bg"
            data-background="<?= base_url(); ?>assets/img/service/footer_bg.jpg">
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
                <!-- <div class="mb-2">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Name" required>
                    </div>
                    </br>
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Email" required>
                    </div>
                    </br>
                    <div class="form-group">
                        <textarea class="form-control" rows="4" placeholder="Message" required></textarea>
                    </div>
                    </br>
                    <div class="form-group">
                        <input class="btn btn-success" type="submit" value="Submit">
                    </div>
                </div> -->
            </div>


            <!-- Footer bottom -->
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <!-- <div class="col-xl-3 col-lg-3 col-md-5 col-sm-6"> -->
                    <div class="row pt-padding">
                        <!-- <div class="col-xl-7 col-lg-7 col-md-7"> -->
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
        </div>
        <!-- Footer End-->
    </footer>

    <!-- JS here -->

    <!-- All JS Custom Plugins Link Here here -->
    <script src="<?= base_url(); ?>assets/js/vendor/modernizr-3.5.0.min.js"></script>

    <!-- Jquery, Popper, Bootstrap -->
    <script src="<?= base_url(); ?>assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/popper.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="<?= base_url(); ?>assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="<?= base_url(); ?>assets/js/owl.carousel.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/slick.min.js"></script>
    <!-- Date Picker -->
    <script src="<?= base_url(); ?>assets/js/gijgo.min.js"></script>
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