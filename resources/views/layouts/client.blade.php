<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
		<!-- Animate CSS -->
		<link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
		<!-- IcoFont CSS -->
		<link rel="stylesheet" href="{{ asset('assets/css/icofont.min.css') }}">
		<!-- Owl Carousel CSS -->
		<link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.css') }}">
		<!-- Magnific Popup CSS -->
		<link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
		<!-- Owl Theme Default CSS -->
		<link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
		<!-- Style CSS -->
		<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
		<!-- Responsive CSS -->
		<link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">

		<title>{{ config('app.name', 'Boora Narsaiah Goud') }}</title>
	</head>

	<body>
		<!-- Start Preloader Area -->
		<div class="preloader-area">
			<div class="sk-folding-cube">
				<div class="sk-cube1 sk-cube"></div>
				<div class="sk-cube2 sk-cube"></div>
				<div class="sk-cube4 sk-cube"></div>
				<div class="sk-cube3 sk-cube"></div>
			</div>
		</div>
		<!-- End Preloader Area -->

        <!-- Top Header Area -->
        <header class="header-area">
            <div class="top-header">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <ul class="header-info">
                                <li><a href="#">Help</a></li>
                                <li><a href="#">Issues</a></li>
                                <li><a href="#">Volunter</a></li>
                                <li><a href="#">Policy</a></li>
                            </ul>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <ul class="social-link">
                                <li><a href="#"><i class="icofont-facebook"></i></a></li>
                                <li><a href="#"><i class="icofont-twitter"></i></a></li>
                                <li><a href="#"><i class="icofont-linkedin"></i></a></li>
                                <li><a href="#"><i class="icofont-skype"></i></a></li>
                                <li><a href="#"><i class="icofont-youtube-play"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- End Header Area -->
        <!-- Start Main Menu Area -->
        <div class="main-menu-area main-menu-two header-sticky">
            <div class="container">
                <nav class="main-navbar-nav">
                    <div class="logo">
                        <a href="{{ url('/') }}"><img src="assets/img/logo.png" alt="logo"></a>
                    </div>

                    <ul class="main-nav">
                        <li><a href="#" class="active">Home</a>
                            <ul class="dropdown-menu">
                                <li><a href="index.html">Home demo One</a></li>
                                <li class="active"><a href="index-2.html">Home demo Two</a></li>
                                <li><a href="index-3.html">Home demo Three</a></li>
                            </ul>
                        </li>

                        <li><a href="about.html">About</a></li>

                        <li><a href="#">Events</a>
                            <ul class="dropdown-menu">
                                <li><a href="events.html">Events</a></li>
                                <li><a href="events-details.html">Events details</a></li>
                            </ul>
                        </li>

                        <li><a href="history.html">History</a></li>

                        <li><a href="#">Pages</a>
                            <ul class="dropdown-menu">
                                <li><a href="about.html">About</a></li>

                                <li><a href="history.html">History</a></li>

                                <li><a href="#">Volunteer</a>
                                    <ul class="sub-menu">
                                        <li><a href="volunteer.html">Volunteer</a></li>
                                        <li><a href="volunteer-details.html">Volunteer details</a></li>
                                    </ul>
                                </li>

                                <li><a href="gallery.html">Gallery</a></li>

                                <li><a href="#">Events</a>
                                    <ul class="sub-menu">
                                        <li><a href="events.html">Events</a></li>
                                        <li><a href="events-details.html">Events details</a></li>
                                    </ul>
                                </li>

                                <li><a href="#">News</a>
                                    <ul class="sub-menu">
                                        <li><a href="blog-right-sidebar.html">Blog right sidebar</a></li>
                                        <li><a href="blog-left-sidebar.html">Blog left sidebar</a></li>
                                        <li><a href="blog-details.html">Blog details</a></li>
                                    </ul>
                                </li>

                                <li><a href="donate.html">Donate now</a></li>

                                <li><a href="become-a-volunteer.html">Become a volunteer</a></li>

                                <li><a href="faq.html">FAQ</a></li>

                                <li><a href="error.html">404 error</a></li>
                            </ul>
                        </li>

                        <li><a href="gallery.html">Gallery</a></li>

                        <li><a href="#">News</a>
                            <ul class="dropdown-menu">
                                <li><a href="blog-right-sidebar.html">Blog right sidebar</a></li>
                                <li><a href="blog-left-sidebar.html">Blog left sidebar</a></li>
                                <li><a href="blog-details.html">Blog details</a></li>
                            </ul>
                        </li>

                        <li><a href="contact.html">Contact</a></li>

                        <li>
                            <div class="search-wrapper">
                                <div class="searchline-wrapper">
                                    <input class="searchline" type="text" placeholder="Search...">
                                </div>
                                <button class="search-button">
                                    <i class="icofont-search-1"></i>
                                    <i class="icofont-close"></i>
                                </button>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- End Main Menu Area -->

        @section('banner')

        @show

        @section('main-content')

        @show

          <!-- Start Footer Area -->
          <footer class="footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 ptb-100 bg">
                        <div class="footer-widget">
                            <div class="logo">
                                <a href="index-2.html"><img src="assets/img/footer-logo.png" alt="logo"></a>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>

                            <ul class="social-links">
                                <li><a href="#"><i class="icofont-facebook"></i></a></li>
                                <li><a href="#"><i class="icofont-twitter"></i></a></li>
                                <li><a href="#"><i class="icofont-linkedin"></i></a></li>
                                <li><a href="#"><i class="icofont-skype"></i></a></li>
                                <li><a href="#"><i class="icofont-youtube-play"></i></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 ptb-100">
                        <div class="footer-widget quick-links-widget">
                            <h3>Quick links</h3>

                            <ul class="quick-links">
                               <li><a href="#">Home</a></li>
                               <li><a href="#">About</a></li>
                               <li><a href="#">Gallery</a></li>
                               <li><a href="#">Events</a></li>
                               <li><a href="#">Volunteers</a></li>
                               <li><a href="#">Campaigns</a></li>
                               <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 ptb-100">
                        <div class="footer-widget">
                            <h3>Recent post</h3>

                            <ul class="recent-post">
                                <li><a href="#">New laws deliver a fairer and more sustainable GST system</a></li>
                                <li><a href="#">Fast tracking TAX relife for small and medium businesses</a></li>
                                <li><a href="#">$50 million to provide life-saving support to cancer patients</a></li>
								<li><a href="#">New laws deliver a fairer and more sustainable GST system</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 ptb-100">
                        <div class="footer-widget">
                            <h3>Instagram</h3>

                            <ul class="instagram-post">
                                <li><a href="#"><img src="assets/img/blog-img1.jpg" alt=""></a></li>
                                <li><a href="#"><img src="assets/img/blog-img2.jpg" alt=""></a></li>
                                <li><a href="#"><img src="assets/img/blog-img3.jpg" alt=""></a></li>
                                <li><a href="#"><img src="assets/img/blog-img3.jpg" alt=""></a></li>
                                <li><a href="#"><img src="assets/img/blog-img2.jpg" alt=""></a></li>
                                <li><a href="#"><img src="assets/img/blog-img1.jpg" alt=""></a></li>
                                <li><a href="#"><img src="assets/img/blog-img1.jpg" alt=""></a></li>
                                <li><a href="#"><img src="assets/img/blog-img2.jpg" alt=""></a></li>
                                <li><a href="#"><img src="assets/img/blog-img3.jpg" alt=""></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="copyright-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 col-md-5">
                            <p>KyleHope<i class="icofont-copyright"></i> 2019. All Rights Reserved</p>
                        </div>

                        <div class="col-lg-7 col-md-7">
                            <ul>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer Area -->

		<div class="go-top"><i class="icofont-stylish-up"></i></div>

		<!-- jQuery Min JS -->
		<script src="assets/js/jquery.min.js"></script>
		<!-- Popper Min JS -->
		<script src="assets/js/popper.min.js"></script>
		<!-- Bootstrap Min JS -->
		<script src="assets/js/bootstrap.min.js"></script>
		<!-- Owl Carousel Min Js -->
        <script src="assets/js/owl.carousel.min.js"></script>
        <!-- Magnific Popup JS -->
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <!-- MixitUp JS -->
        <script src="assets/js/jquery.mixitup.min.js"></script>
		<!-- Jquery Menu JS -->
		<script src="assets/js/jquery.meanmenu.js"></script>
		<!-- Jquery CounterUp JS -->
		<script src="assets/js/jquery.counterup.min.js"></script>
		<!-- Waypoints JS -->
		<script src="assets/js/waypoints.min.js"></script>
		<!-- WoW JS -->
		<script src="assets/js/wow.js"></script>
		<!-- Main JS -->
		<script src="assets/js/main.js"></script>
	</body>
</html>
