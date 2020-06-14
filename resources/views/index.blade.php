@extends('layouts.client')

@section('banner')
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{ asset('assets/img/boora1.jpg') }}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                {{-- <div class="d-table">
                    <div class="d-table-cell">
                        <div class="container">
                            <div class="row">
                                <div class="home-slides home-slides-two">
                                    <div class="col-lg-7 col-md-12">
                                        <h1>Vote for democracy & freedom</h1>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,  do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
                                        <a href="#" class="btn btn-primary">Contact Us</a>
                                        <a href="#" class="btn btn-secondary">Donate Now</a>
                                    </div>

                                    <div class="col-lg-7 col-md-12">
                                        <h1>Vote for democracy & freedom</h1>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,  do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
                                        <a href="#" class="btn btn-primary">Contact Us</a>
                                        <a href="#" class="btn btn-secondary">Donate Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{ asset('assets/img/boora1.jpg') }}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Second slide label</h5>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{ asset('assets/img/boora1.jpg') }}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Third slide label</h5>
              <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
@endsection

@section('main-content')
    <!-- Start Boxes Area -->
    <section class="boxes-area ptb-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="boxes-content">
                        <h3>Contribution for the party</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>

                        <a href="#" class="btn btn-primary">Donate for us</a>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="boxes-content">
                        <h3>Become a volunteer</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>

                        <a href="#" class="btn btn-secondary">Join now!</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Boxes Area -->


        <!-- Start About Area -->
        <section class="about-area ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="about-box mt-0">
                            <i class="icofont-diamond"></i>
                            <h3>Who we are</h3>
                            <p>Lorem ipsum dolor sit amet, adipiscing elit, eiusmod tempor incididunt abore dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
                            <a href="#" class="read-more">Read More</a>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="about-box">
                            <i class="icofont-diamond"></i>
                            <h3>What we do</h3>
                            <p>Lorem ipsum dolor sit amet, adipiscing elit, eiusmod tempor incididunt abore dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
                            <a href="#" class="read-more">Read More</a>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="about-box">
                            <i class="icofont-diamond"></i>
                            <h3>How we do</h3>
                            <p>Lorem ipsum dolor sit amet, adipiscing elit, eiusmod tempor incididunt abore dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
                            <a href="#" class="read-more">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End About Area -->

         <!-- Start Volunteer Area -->
         <section class="volunteer-area ptb-100">
            <div class="container">
                <div class="section-title">
                    <h2>Our volunteers</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>

                <div class="row">
                    <div class="team-slides">
                        <div class="col-lg-12 col-md-12">
                            <div class="single-team">
                                <div class="video text-center">
                                    <img src="assets/img/team-img1.jpg" alt="team">
                                    <a href="https://youtu.be/HvIC16sYGis" class="video-play-btn popup-video">
                                        <i class="icofont-ui-play"></i>
                                        <span class="ripple"></span>
                                        <span class="ripple"></span>
                                        <span class="ripple"></span>
                                    </a>
                                </div>

                                <div class="team-content">
                                    <h4>Alex Maxwel</h4>
                                    <span>CEO & President</span>

                                    <ul>
                                        <li><a href="#"><i class="icofont-share"></i></a>
                                            <ul class="social-dropdown">
                                                <li><a href="#"><i class="icofont-facebook"></i></a></li>
                                                <li><a href="#"><i class="icofont-twitter"></i></a></li>
                                                <li><a href="#"><i class="icofont-instagram"></i></a></li>
                                                <li><a href="#"><i class="icofont-linkedin"></i></a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <div class="single-team">
                                <div class="video text-center">
                                    <img src="assets/img/team-img2.jpg" alt="team">
                                    <a href="https://www.youtube.com/watch?v=Ef_0tmgEJYE" class="video-play-btn popup-video">
                                        <i class="icofont-ui-play"></i>
                                        <span class="ripple"></span>
                                        <span class="ripple"></span>
                                        <span class="ripple"></span>
                                    </a>
                                </div>

                                <div class="team-content">
                                    <h4>Alex Maxwel</h4>
                                    <span>CEO & President</span>

                                    <ul>
                                        <li><a href="#"><i class="icofont-share"></i></a>
                                            <ul class="social-dropdown">
                                                <li><a href="#"><i class="icofont-facebook"></i></a></li>
                                                <li><a href="#"><i class="icofont-twitter"></i></a></li>
                                                <li><a href="#"><i class="icofont-instagram"></i></a></li>
                                                <li><a href="#"><i class="icofont-linkedin"></i></a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <div class="single-team">
                                <div class="video text-center">
                                    <img src="assets/img/team-img3.jpg" alt="team">
                                    <a href="https://www.youtube.com/watch?v=OcbOKdzKfSA" class="video-play-btn popup-video">
                                        <i class="icofont-ui-play"></i>
                                        <span class="ripple"></span>
                                        <span class="ripple"></span>
                                        <span class="ripple"></span>
                                    </a>
                                </div>

                                <div class="team-content">
                                    <h4>Alex Maxwel</h4>
                                    <span>CEO & President</span>

                                    <ul>
                                        <li><a href="#"><i class="icofont-share"></i></a>
                                            <ul class="social-dropdown">
                                                <li><a href="#"><i class="icofont-facebook"></i></a></li>
                                                <li><a href="#"><i class="icofont-twitter"></i></a></li>
                                                <li><a href="#"><i class="icofont-instagram"></i></a></li>
                                                <li><a href="#"><i class="icofont-linkedin"></i></a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <div class="single-team">
                                <div class="video text-center">
                                    <img src="assets/img/team-img4.jpg" alt="team">
                                    <a href="https://youtu.be/HvIC16sYGis" class="video-play-btn popup-video">
                                        <i class="icofont-ui-play"></i>
                                        <span class="ripple"></span>
                                        <span class="ripple"></span>
                                        <span class="ripple"></span>
                                    </a>
                                </div>

                                <div class="team-content">
                                    <h4>Alex Maxwel</h4>
                                    <span>CEO & President</span>

                                    <ul>
                                        <li><a href="#"><i class="icofont-share"></i></a>
                                            <ul class="social-dropdown">
                                                <li><a href="#"><i class="icofont-facebook"></i></a></li>
                                                <li><a href="#"><i class="icofont-twitter"></i></a></li>
                                                <li><a href="#"><i class="icofont-instagram"></i></a></li>
                                                <li><a href="#"><i class="icofont-linkedin"></i></a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Volunteer Area -->

         <!-- Start Upcoming Campaigns -->
         <section class="upcoming-campaigns ptb-100">
            <div class="container">
               <div class="section-title">
                    <h2>Upcoming campaigns</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>

                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="single-campaigns">
                            <div class="campaigns-img">
                                <img src="assets/img/campaign-img1.jpg" alt="campaign">

                                <div class="date">
                                    <span>31</span>
                                    Dec, 2018
                                </div>
                            </div>

                            <div class="campaigns-content">
                                <h3><a href="#">Purposeful aging town hall for Neighborhood Councils</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="campaigns-box">
                            <div class="single-campaigns">
                                <div class="campaigns-content">
                                    <div class="date">
                                        <span>31</span>
                                        Dec, 2018
                                    </div>

                                    <h3><a href="#">How to Publish Your Book in Today's Political Climate</a></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                                </div>
                            </div>

                            <div class="single-campaigns">
                                <div class="campaigns-content">
                                    <div class="date">
                                        <span>31</span>
                                        Dec, 2018
                                    </div>

                                    <h3><a href="#">How should conservatives address perceptions of political bias online?</a></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                                </div>
                            </div>

                            <div class="single-campaigns">
                                <div class="campaigns-content">
                                    <div class="date">
                                        <span>31</span>
                                        Dec, 2018
                                    </div>

                                    <h3><a href="#">RISE UP VIRGINIANS: Join us for a training on getting money out of politics</a></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                                </div>
                            </div>

                            <div class="single-campaigns">
                                <div class="campaigns-content">
                                    <div class="date">
                                        <span>31</span>
                                        Dec, 2018
                                    </div>

                                    <h3><a href="#">China's Military and Geopolitical Rise and its Challenge to the US</a></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                                </div>
                            </div>

                            <div class="single-campaigns mb-0">
                                <div class="campaigns-content">
                                    <div class="date">
                                        <span>31</span>
                                        Dec, 2018
                                    </div>

                                    <h3><a href="#">The Israel Lobby and American Policy 2019 Conference</a></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Upcoming Campaigns -->

         <!-- Start Gallery CSS -->
         <section class="gallery-area ptb-100">
            <div class="container">
                <div class="section-title">
                    <h2>Gallery</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
				<div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="shorting-menu">
                            <button class="filter" data-filter="all">All activities</button>
                            <button class="filter" data-filter=".campaign">Campaign</button>
                            <button class="filter" data-filter=".event">Event</button>
                            <button class="filter" data-filter=".speech">Speech</button>
                            <button class="filter" data-filter=".vote">Vote</button>
                        </div>
                    </div>
                </div>

				<div class="shorting">
					<div class="row m-0">
						<div class="col-lg-4 col-md-6 mix campaign p-0">
                            <div class="single-photo">
                                <a href="assets/img/gallery-1.jpg" class="popup-gallery"><img src="assets/img/gallery-1.jpg" alt="photo"></a>
                            </div>
                        </div>

						<div class="col-lg-4 col-md-6 mix event p-0">
                            <div class="single-photo">
                                <a href="assets/img/gallery-2.jpg" class="popup-gallery"><img src="assets/img/gallery-2.jpg" alt="photo"></a>
                            </div>
                        </div>

						<div class="col-lg-4 col-md-6 mix speech p-0">
                            <div class="single-photo">
                                <a href="assets/img/gallery-3.jpg" class="popup-gallery"><img src="assets/img/gallery-3.jpg" alt="photo"></a>
                            </div>
                        </div>

						<div class="col-lg-4 col-md-6 mix vote p-0">
                            <div class="single-photo">
                                <a href="assets/img/gallery-4.jpg" class="popup-gallery"><img src="assets/img/gallery-4.jpg" alt="photo"></a>
                            </div>
                        </div>

						<div class="col-lg-4 col-md-6 mix campaign p-0">
                            <div class="single-photo">
                                <a href="assets/img/gallery-5.jpg" class="popup-gallery"><img src="assets/img/gallery-5.jpg" alt="photo"></a>
                            </div>
                        </div>

						<div class="col-lg-4 col-md-6 mix event p-0">
                            <div class="single-photo">
                                <a href="assets/img/gallery-6.jpg" class="popup-gallery"><img src="assets/img/gallery-6.jpg" alt="photo"></a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 mix campaign p-0">
                            <div class="single-photo">
                                <a href="assets/img/gallery-1.jpg" class="popup-gallery"><img src="assets/img/gallery-1.jpg" alt="photo"></a>
                            </div>
                        </div>

						<div class="col-lg-4 col-md-6 mix event p-0">
                            <div class="single-photo">
                                <a href="assets/img/gallery-2.jpg" class="popup-gallery"><img src="assets/img/gallery-2.jpg" alt="photo"></a>
                            </div>
                        </div>

						<div class="col-lg-4 col-md-6 mix speech p-0">
                            <div class="single-photo">
                                <a href="assets/img/gallery-3.jpg" class="popup-gallery"><img src="assets/img/gallery-3.jpg" alt="photo"></a>
                            </div>
                        </div>

						<div class="col-lg-4 col-md-6 mix vote p-0">
                            <div class="single-photo">
                                <a href="assets/img/gallery-4.jpg" class="popup-gallery"><img src="assets/img/gallery-4.jpg" alt="photo"></a>
                            </div>
                        </div>

						<div class="col-lg-4 col-md-6 mix campaign p-0">
                            <div class="single-photo">
                                <a href="assets/img/gallery-5.jpg" class="popup-gallery"><img src="assets/img/gallery-5.jpg" alt="photo"></a>
                            </div>
                        </div>

						<div class="col-lg-4 col-md-6 mix event p-0">
                            <div class="single-photo">
                                <a href="assets/img/gallery-6.jpg" class="popup-gallery"><img src="assets/img/gallery-6.jpg" alt="photo"></a>
                            </div>
                        </div>
					</div>
                </div>
            </div>
        </section>
        <!-- End Gallery CSS -->

        <!-- Start News Area -->
        <section class="news-area ptb-100">
            <div class="container">
                <div class="section-title">
                    <h2>News</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
                <div class="row">
					<div class="col-lg-12 col-md-12">
						<div class="row">
							<div class="col-lg-4 col-md-4">
								<div class="single-blog-post">
									<a href="#"><img src="assets/img/blog-img1.jpg" alt="blog"></a>

									<div class="blog-content">
										<h4><a href="#">New laws deliver a fairer and more sustainable GST system</a></h4>

										<ul class="post-meta">
											<li><a href="#"><i class="icofont-clock-time"></i> 23 Jan, 2019</a></li>
											<li><a href="#"><i class="icofont-comment"></i> 15</a></li>
										</ul>

										<ul class="share-social">
											<li><a href="#"><i class="icofont-share"></i></a>
												<ul class="social-dropdown">
													<li><a href="#"><i class="icofont-facebook"></i></a></li>
													<li><a href="#"><i class="icofont-twitter"></i></a></li>
													<li><a href="#"><i class="icofont-instagram"></i></a></li>
													<li><a href="#"><i class="icofont-linkedin"></i></a></li>
												</ul>
											</li>
										</ul>
									</div>
								</div>
							</div>

							<div class="col-lg-4 col-md-4">
								<div class="single-blog-post">
									<a href="#"><img src="assets/img/blog-img2.jpg" alt="blog"></a>

									<div class="blog-content">
										<h4><a href="#">Fast tracking TAX relife for small and medium businesses</a></h4>

										<ul class="post-meta">
											<li><a href="#"><i class="icofont-clock-time"></i> 23 Jan, 2019</a></li>
											<li><a href="#"><i class="icofont-comment"></i> 15</a></li>
										</ul>

										<ul class="share-social">
											<li><a href="#"><i class="icofont-share"></i></a>
												<ul class="social-dropdown">
													<li><a href="#"><i class="icofont-facebook"></i></a></li>
													<li><a href="#"><i class="icofont-twitter"></i></a></li>
													<li><a href="#"><i class="icofont-instagram"></i></a></li>
													<li><a href="#"><i class="icofont-linkedin"></i></a></li>
												</ul>
											</li>
										</ul>
									</div>
								</div>
							</div>

							<div class="col-lg-4 col-md-4">
								<div class="single-blog-post">
									<a href="#"><img src="assets/img/blog-img3.jpg" alt="blog"></a>

									<div class="blog-content">
										<h4><a href="#">$50 million to provide life-saving support to cancer patients</a></h4>

										<ul class="post-meta">
											<li><a href="#"><i class="icofont-clock-time"></i> 23 Jan, 2019</a></li>
											<li><a href="#"><i class="icofont-comment"></i> 15</a></li>
										</ul>

										<ul class="share-social">
											<li><a href="#"><i class="icofont-share"></i></a>
												<ul class="social-dropdown">
													<li><a href="#"><i class="icofont-facebook"></i></a></li>
													<li><a href="#"><i class="icofont-twitter"></i></a></li>
													<li><a href="#"><i class="icofont-instagram"></i></a></li>
													<li><a href="#"><i class="icofont-linkedin"></i></a></li>
												</ul>
											</li>
										</ul>
									</div>
								</div>
                            </div>
						</div>
					</div>


                </div>
            </div>
        </section>
        <!-- End News Area -->
@endsection

