<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page | Orang Dalam</title>
    <!-- favicons -->
	<link rel="apple-touch-icon" sizes="57x57" href="assets/images/favicons/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="assets/images/favicons/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="assets/images/favicons/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="assets/images/favicons/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="assets/images/favicons/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="assets/images/favicons/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="assets/images/favicons/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="assets/images/favicons/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="assets/images/favicons/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/images/favicons/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png">
	<link rel="manifest" href="assets/images/favicons/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="assets/images/favicons/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">

    <!-- plugin styles -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/jquery.bxslider.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/swiper.min.css">
    <link rel="stylesheet" href="assets/css/oapee-icons.css">
    <!-- template styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body>

    <div class="preloader">
        <img src="assets/images/loading.png" class="preloader__image" alt="">
    </div><!-- /.preloader -->

    <div class="page-wrapper">
        <header class="site-header-one stricky site-header-one__fixed-top">
            <div class="container-fluid">
                <div class="site-header-one__logo">
                    <a href="#">
                        <img src="assets/images/logo-1-1.png" width="200" alt="">
                    </a>
                    <span class="side-menu__toggler"><i class="fa fa-bars"></i></span><!-- /.side-menu__toggler -->
                </div><!-- /.site-header-one__logo -->
                <div class="main-nav__main-navigation one-page-scroll-menu">
                    <ul class="main-nav__navigation-box">
                        <li class="scrollToLink">
                            <a href="#home">Home</a>
                        </li>
                        <li class="scrollToLink"><a href="#features">Features</a></li>
                        <li class="scrollToLink"><a href="#about">About</a></li>
						<li class="scrollToLink"><a href="#pricing">Pricing</a></li>
                        <li class="scrollToLink"><a href="#testimonials">Testimonials</a></li>
                        <li class="scrollToLink"><a href="#blog">News</a></li>
                        <!-- <li class="dropdown scrollToLink">
                            <a href="#blog">News</a>
                            <ul>
                                <li><a href="blog.html">News</a></li>
                                <li><a href="blog-details.html">News Details</a></li>
                            </ul>
                        </li> -->
                    </ul>
                </div>
                <div class="main-nav__right">
                    <a href="tel:0812-4028-0088" class="main-nav__cta">
                        <img src="assets/images/shapes/header-phone-1-1.png" alt="">
                        <span>
                            <i>Fast Response </i>
                            <b>0812 4028 0088</b>
                        </span>
                    </a>
                </div>
            </div>
        </header> 

        <?php $this->load->view($content); ?>

        <footer class="site-footer">
            <div class="site-footer__upper">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <div class="footer-widget footer-widget__about">
                                <a href="#" class="logo">
                                    <img src="assets/images/logo-1-2.png" width="200" alt="">
                                </a>
                                <p>Lembaga Bimbingan Belajar UTBK, CPNS, dan KEDINASAN, yang memiliki sistem pengajaran yang akurat dan ampuh, serta memiliki Mentor-mentor yang berkualitas dan 
									berpengalaman, dan yang pertama di Indonesia, yang berani
									menjamin kelulusan dalam perankingan.</p>
                                <a href="#" class="thm-btn"><span>Daftar Sekarang</span></a>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-6">
                            <div class="footer-widget footer-widget__links">
                                <h3 class="footer-widget__title">Explore</h3>
                                <ul class="list-unstyled footer-widget__links-list">
                                    <li><a href="#home">Home</a></li>
                                    <li><a href="#features">Features</a></li>
                                    <li><a href="#about">About</a></li>
                                    <li><a href="#pricing">Pricing</a></li>
									<li><a href="#testimonials">Testimoni</a></li>
									<li><a href="#blog">News</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6">
                            <div class="footer-widget footer-widget__contact">
                                <h3 class="footer-widget__title">Contact</h3><!-- /.footer-widget__title -->
                                <ul class="footer-widget__contact-list list-unstyled">
                                    <li>
                                        <i class="fa fa-phone-square"></i>
                                        <a href="Whatsapp:0812-4028-0088">0812 4028 0088</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-envelope"></i>
                                        <a href="mailto:orangdalamindonesia@gmail.com">orangdalamindonesia@gmail.com</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-map-marker"></i>
                                        Jl. Pengayoman, Kec. Mamuju <br> Mamuju, Sulawesi Barat 91511
                                    </li>
                                </ul><!-- /.footer-widget__contact-list list-unstyled -->
                            </div><!-- /.footer-widget footer-widget__contact -->
                        </div><!-- /.col-lg-2 -->
                        <!-- <div class="col-xl-4 col-lg-6">
                            <div class="footer-widget footer-widget__newsletter">
                                <h3 class="footer-widget__title">Newsletter</h3>
                                <form action="#" class="footer-widget__newsletter-form">
                                    <input type="text" placeholder="Email address" name="email">
                                    <button type="submit"><i class="fa fa-envelope"></i></button>
                                </form>
                                <p>Sign up for our latest news & articles. We won’t give you spam mails.</p>
                            </div>
                        </div> -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.site-footer__upper -->
            <div class="site-footer__bottom">
                <div class="container">
                    <div class="inner-container">
                        <p>© copyright <?= date("Y")?> PT. Orang Dalam Indonesia</p>
                        <div class="footer-social">
                            <a href="https://www.facebook.com/official.orangdalam/"><i class="fab fa-facebook-square"></i></a>
							<a href="https://www.instagram.com/official.orangdalam/"><i class="fab fa-instagram"></i></a>
                            <a href="https://t.me/+px74c4f9_3M2NGZl"><i class="fab fa-telegram"></i></a>
                        </div><!-- /.footer-social -->
                    </div><!-- /.inner-container -->
                </div><!-- /.container -->
            </div><!-- /.site-footer__bottom -->
        </footer><!-- /.site-footer -->
    </div><!-- /.page-wrapper -->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>

    <div class="side-menu__block">
        <div class="side-menu__block-overlay custom-cursor__overlay">
            <div class="cursor"></div>
            <div class="cursor-follower"></div>
        </div><!-- /.side-menu__block-overlay -->
        <div class="side-menu__block-inner ">
            <div class="side-menu__top justify-content-end">

                <a href="#" class="side-menu__toggler side-menu__close-btn"><img
                        src="assets/images/shapes/close-1-1.png" alt=""></a>
            </div><!-- /.side-menu__top -->


            <nav class="mobile-nav__container">
                <!-- content is loading via js -->
            </nav>
            <div class="side-menu__sep"></div><!-- /.side-menu__sep -->
            <div class="side-menu__content">
                <p>Lembaga Bimbingan Belajar UTBK, CPNS, dan KEDINASAN, yang memiliki sistem pengajaran yang akurat dan ampuh, serta memiliki Mentor-mentor yang berkualitas dan 
					berpengalaman, dan yang pertama di Indonesia, yang berani
					menjamin kelulusan dalam perankingan.</p>
                <p><a href="mailto:orangdalamindonesia@gmail.com">orangdalamindonesia@gmail.com</a> <br> <a href="tel:0812-4028-0088">0812 4028 0088</a></p>
                <div class="side-menu__social">
                    <a href="https://www.facebook.com/official.orangdalam/"><i class="fab fa-facebook-square"></i></a>
                    <a href="https://www.instagram.com/official.orangdalam/"><i class="fab fa-twitter"></i></a>
                    <a href="https://t.me/+px74c4f9_3M2NGZl"><i class="fab fa-instagram"></i></a>
                </div>
            </div><!-- /.side-menu__content -->
        </div><!-- /.side-menu__block-inner -->
    </div><!-- /.side-menu__block -->

    <!-- Plugin scripts -->
    <script src="assets/js/jquery-3.5.0.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/bootstrap-datepicker.min.js"></script>
    <script src="assets/js/bootstrap-select.min.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/jquery.ajaxchimp.min.js"></script>
    <script src="assets/js/jquery.bxslider.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/jquery.validate.min.js"></script>
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/swiper.min.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/TweenMax.min.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>