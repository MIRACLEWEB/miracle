<?php


session_start();
require '../controller/getwhatever.php';
$destinations=new getwhatever();
	$listedestination=$destinations->getdestinationfamiliale(); 

?>
<!doctype html>
<html lang="en">


<!-- Mirrored from demo.themewinter.com/html/vinazine/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 17 Apr 2022 17:39:13 GMT -->
<head>
	<!-- Basic Page Needs =====================================-->
	<meta charset="utf-8">

	<!-- Mobile Specific Metas ================================-->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Site Title- -->
	<title>Vinazine - Multi-Concept News, Magazine and Blog HTML Template</title>

	<!-- CSS
   ==================================================== -->
	<!-- Bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.min.css">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="css/animate.css">

	<!-- IcoFonts -->
	<link rel="stylesheet" href="css/icofonts.css">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owlcarousel.min.css">

	<!-- slick -->
	<link rel="stylesheet" href="css/slick.css">



	<!-- navigation -->
	<link rel="stylesheet" href="css/navigation.css">

	<!-- magnific popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Style -->
	<link rel="stylesheet" href="css/style.css">
	<!-- Style -->
	<link rel="stylesheet" href="css/colors/color-0.css">

	<!-- Responsive -->
	<link rel="stylesheet" href="css/responsive.css">


	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>

<body class="body-color">

	<!-- <div id="preloader">
		<div class="spinner">
			<div class="double-bounce1"></div>
			<div class="double-bounce2"></div>
		</div>
		<div class="preloader-cancel-btn-wraper">
			<a href="#" class="btn btn-primary preloader-cancel-btn">Cancel Preloader</a>
		</div>
	</div> -->


	<!-- top bar start -->
	<section class="top-bar">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 align-self-center md-center-item">
					<div class="ts-temperature">
						<i class="icon-weather"></i>
						<span>25.8
							<b>c</b>
						</span>
						<span>Dubai</span>

					</div>

					<ul class="ts-top-nav">
						<li>
							<a href="#">Blog</a>
						</li>
						<li>
							<a href="#">Forums</a>
						</li>
						<li>
							<a href="#">Contact</a>
						</li>
						<li>
							<a href="#">Advertisement</a>
						</li>
					</ul>

				</div>
				<!-- end col-->

				<div class="col-lg-6 text-right align-self-center">
					<ul class="top-social">
						<li>
							<a href="#">
								<i class="fa fa-twitter"></i>
							</a>
							<a href="#">
								<i class="fa fa-facebook"></i>
							</a>
							<a href="#">
								<i class="fa fa-google-plus"></i>
							</a>
							<a href="#">
								<i class="fa fa-pinterest"></i>
							</a>
							<a href="#">
								<i class="fa fa-vimeo-square"></i>
							</a>
						</li>
						<li class="ts-date">
							<i class="fa fa-clock-o"></i>
							Sunday, August 24
						</li>
					</ul>
				</div>
				<!--end col -->


			</div>
			<!-- end row -->
		</div>
	</section>
	<!-- end top bar-->

	<!-- ad banner start -->
	<section class="header-middle">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="banner-img">
						<a href="index.html">
							<img class="img-fluid" src="images/banner/banner1.jpg" alt="">
						</a>
					</div>
				</div>
				<!-- col end -->
			</div>
			<!-- row  end -->
		</div>
		<!-- container end -->
	</section>
	<!-- ad banner end -->

	<!-- header nav start-->
	<header class="header-default">
		<div class="container">
			<div class="row">
				<div class="col-lg-2 pr-0">
					<div class="logo">
						<a href="index.html">
							<img src="images/logo/banner_logo.png" alt="">
						</a>
					</div>

				</div>
				<!-- logo end-->
				<div class="col-lg-10 header-nav-item">
					<div class="ts-breaking-news clearfix">
						<h2 class="breaking-title float-left">
							<i class="fa fa-bolt"></i> Breaking News :</h2>
						<div class="breaking-news-content owl-carousel float-left" id="breaking_slider">
							<div class="breaking-post-content">
								<p>
									<a href="#">Netcix cuts out the chill with an integrated personal trainer on running.</a>
								</p>
							</div>
							<div class="breaking-post-content">
								<p>
									<a href="#">Parquet Courts on Resisting Nihilism & Why Tourism in Dubai is booming the world.</a>
								</p>
							</div>
							<div class="breaking-post-content">
								<p>
									<a href="#">Parquet Courts on Resisting Nihilism & Why Tourism in Dubai is booming the world.</a>
								</p>
							</div>
						</div>
					</div>
					<!--nav top end-->
					<nav class="navigation ts-main-menu ts-menu-sticky navigation-landscape">
						<div class="nav-header">
							<a class="nav-brand mobile-logo visible-xs" href="index.html">
								<img src="images/logo/footer_logo.png" alt="">
							</a>
							<div class="nav-toggle"></div>
						</div>
						<!--nav brand end-->

						<div class="nav-menus-wrapper clearfix">
							<!--nav right menu start-->
							<ul class="right-menu align-to-right">
								<li>
									<a href="#">
										<i class="fa fa-user-circle-o"></i>
									</a>
								</li>
								<li class="header-search">
									<div class="nav-search">
										<div class="nav-search-button">
											<i class="icon icon-search"></i>
										</div>
										<form>
											<span class="nav-search-close-button" tabindex="0">✕</span>
											<div class="nav-search-inner">
												<input type="search" name="search" placeholder="Type and hit ENTER">
											</div>
										</form>
									</div>
								</li>
							</ul>
							<!--nav right menu end-->

							<!-- nav menu start-->
							<ul class="nav-menu">
								<li class="active">
									<a href="#">Sorties</a>
									<div class="megamenu-panel ts-mega-menu">
										<div class="megamenu-lists">
											<ul class="megamenu-list list-col-2">
													<li class="active">
													<a href="familiale.php">Sortie familiale</a>
												</li>
												<li>
													<a href="amicale.php">Sortie Amicale</a>
												</li>
												
												
											</ul>
											
										</div>
									</div>
								</li>
								<li>
									<a href="#">Lifestyle</a>
									<div class="megamenu-panel">
										<div class="megamenu-tabs">
											<ul class="megamenu-tabs-nav">
												<li class="active">
													<a href="#">Health</a>
												</li>
												<li>
													<a href="#">Food</a>
												</li>
												<li>
													<a href="#">Fashion</a>
												</li>
												<li>
													<a href="#">Travel</a>
												</li>
											</ul>
											<div class="megamenu-tabs-pane active">
												<div class="row">
													<div class="col-12 col-lg-4">
														<div class="item">

															<div class="ts-post-thumb">
																<a class="post-cat ts-purple-bg" href="#">Health</a>
																<a href="#">
																	<img class="img-fluid" src="images/news/health/health1.jpg" alt="">
																</a>
															</div>
															<div class="post-content">
																<h3 class="post-title">
																	<a href="#">Can't shed those Gym? The problem might be in</a>
																</h3>
															</div>
														</div>
													</div>
													<div class="col-12 col-lg-4">
														<div class="item">

															<div class="ts-post-thumb">
																<a class="post-cat ts-purple-bg" href="#">Health</a>
																<a href="#">
																	<img class="img-fluid" src="images/news/health/health2.jpg" alt="">
																</a>
															</div>
															<div class="post-content">
																<h3 class="post-title">
																	<a href="#">Smart packs parking sensor tech and beeps</a>
																</h3>
															</div>
														</div>
													</div>
													<div class="col-12 col-lg-4">
														<div class="item">

															<div class="ts-post-thumb">
																<a class="post-cat ts-purple-bg" href="#">Health</a>
																<a href="#">
																	<img class="img-fluid" src="images/news/health/health3.jpg" alt="">
																</a>
															</div>
															<div class="post-content">
																<h3 class="post-title">
																	<a href="#">Deleting fears from the brain means you might never</a>
																</h3>
															</div>
														</div>
													</div>

												</div>

											</div>
											<!-- mega menu end-->
											<div class="megamenu-tabs-pane">
												<div class="row">
													<div class="col-12 col-lg-4">
														<div class="item">

															<div class="ts-post-thumb">
																<a class="post-cat ts-yellow-bg" href="#">Food</a>
																<a href="#">
																	<img class="img-fluid" src="images/news/foods/food1.jpg" alt="">
																</a>
															</div>
															<div class="post-content">
																<h3 class="post-title">
																	<a href="#">Tourism in Dubai is booming by international tourist</a>
																</h3>
															</div>
														</div>
													</div>
													<div class="col-12 col-lg-4">
														<div class="item">

															<div class="ts-post-thumb">
																<a class="post-cat ts-yellow-bg" href="#">Food</a>
																<a href="#">
																	<img class="img-fluid" src="images/news/foods/food2.jpg" alt="">
																</a>
															</div>
															<div class="post-content">
																<h3 class="post-title">
																	<a href="#">Tourism in Dubai is booming by international tourist</a>
																</h3>
															</div>
														</div>
													</div>
													<div class="col-12 col-lg-4">
														<div class="item">

															<div class="ts-post-thumb">
																<a class="post-cat ts-yellow-bg" href="#">Food</a>
																<a href="#">
																	<img class="img-fluid" src="images/news/foods/food3.jpg" alt="">
																</a>
															</div>
															<div class="post-content">
																<h3 class="post-title">
																	<a href="#">Tourism in Dubai is booming by international tourist</a>
																</h3>
															</div>
														</div>
													</div>

												</div>

											</div>
											<!-- mega menu end-->
											<div class="megamenu-tabs-pane">
												<div class="row">
													<div class="col-12 col-lg-4">
														<div class="item">

															<div class="ts-post-thumb">
																<a class="post-cat ts-pink-bg" href="#">Fashion</a>
																<a href="#">
																	<img class="img-fluid" src="images/news/tech/tech1.jpg" alt="">
																</a>
															</div>
															<div class="post-content">
																<h3 class="post-title">
																	<a href="#">Tourism in Dubai is booming by international tourist</a>
																</h3>
															</div>
														</div>
													</div>
													<div class="col-12 col-lg-4">
														<div class="item">

															<div class="ts-post-thumb">
																<a class="post-cat ts-pink-bg" href="#">Fashion</a>
																<a href="#">
																	<img class="img-fluid" src="images/news/tech/tech2.jpg" alt="">
																</a>
															</div>
															<div class="post-content">
																<h3 class="post-title">
																	<a href="#">Tourism in Dubai is booming by international tourist</a>
																</h3>
															</div>
														</div>
													</div>
													<div class="col-12 col-lg-4">
														<div class="item">

															<div class="ts-post-thumb">
																<a class="post-cat ts-pink-bg" href="#">Fashion</a>
																<a href="#">
																	<img class="img-fluid" src="images/news/tech/tech3.jpg" alt="">
																</a>
															</div>
															<div class="post-content">
																<h3 class="post-title">
																	<a href="#">Tourism in Dubai is booming by international tourist</a>
																</h3>
															</div>
														</div>
													</div>

												</div>

											</div>
											<!-- mega menu end-->
											<div class="megamenu-tabs-pane">
												<div class="row">
													<div class="col-12 col-lg-4">
														<div class="item">

															<div class="ts-post-thumb">
																<a class="post-cat ts-orange-bg" href="#">Travel</a>
																<a href="#">
																	<img class="img-fluid" src="images/news/travel/travel2.jpg" alt="">
																</a>
															</div>
															<div class="post-content">
																<h3 class="post-title">
																	<a href="#">Tourism in Dubai is booming by international tourist</a>
																</h3>
															</div>
														</div>
													</div>
													<div class="col-12 col-lg-4">
														<div class="item">

															<div class="ts-post-thumb">
																<a class="post-cat ts-orange-bg" href="#">Travel</a>
																<a href="#">
																	<img class="img-fluid" src="images/news/travel/travel3.jpg" alt="">
																</a>
															</div>
															<div class="post-content">
																<h3 class="post-title">
																	<a href="#">Tourism in Dubai is booming by international tourist</a>
																</h3>
															</div>
														</div>
													</div>
													<div class="col-12 col-lg-4">
														<div class="item">

															<div class="ts-post-thumb">
																<a class="post-cat ts-orange-bg" href="#">Travel</a>
																<a href="#">
																	<img class="img-fluid" src="images/news/travel/travel4.jpg" alt="">
																</a>
															</div>
															<div class="post-content">
																<h3 class="post-title">
																	<a href="#">Tourism in Dubai is booming by international tourist</a>
																</h3>
															</div>
														</div>
													</div>

												</div>

											</div>
											<!-- mega menu end-->

										</div>
									</div>
								</li>
								<li>
									<a href="category-1.html">Technology</a>
								</li>
								<li>
									<a href="#">Video</a>
									<div class="megamenu-panel">
										<div class="row">
											<div class="col-12 col-lg-3">
												<div class="item">
													<div class="ts-post-thumb">
														<a href="#">
															<img class="img-fluid" src="images/news/tech/tech1.jpg" alt="">
														</a>
														<a href="https://www.youtube.com/watch?v=uZmz6fGRVW4" class="fa fa-play-circle-o ts-video-icon"></a>
													</div>
													<div class="post-content">
														<h3 class="post-title">
															<a href="#">Tourism in Dubai tourist favorite place</a>
														</h3>
													</div>
												</div>
											</div>
											<div class="col-12 col-lg-3">
												<div class="item">
													<div class="ts-post-thumb">
														<a href="#">
															<img class="img-fluid" src="images/news/tech/tech2.jpg" alt="">

														</a>
														<a href="https://www.youtube.com/watch?v=uZmz6fGRVW4" class="fa fa-play-circle-o ts-video-icon"></a>

													</div>
													<div class="post-content">
														<h3 class="post-title">
															<a href="#">Tourism in Dubai tourist favorite place</a>
														</h3>
													</div>
												</div>
											</div>
											<div class="col-12 col-lg-3">
												<div class="item">
													<div class="ts-post-thumb">
														<a href="#">
															<img class="img-fluid" src="images/news/tech/tech3.jpg" alt="">

														</a>
														<a href="https://www.youtube.com/watch?v=uZmz6fGRVW4" class="fa fa-play-circle-o ts-video-icon"></a>

													</div>
													<div class="post-content">
														<h3 class="post-title">
															<a href="#">Tourism in Dubai tourist favorite place</a>
														</h3>
													</div>
												</div>
											</div>
											<div class="col-12 col-lg-3">
												<div class="item">
													<div class="ts-post-thumb">
														<a href="#">
															<img class="img-fluid" src="images/news/tech/tech4.jpg" alt="">
														</a>
														<a href="https://www.youtube.com/watch?v=uZmz6fGRVW4" class="fa fa-play-circle-o ts-video-icon"></a>
													</div>
													<div class="post-content">
														<h3 class="post-title">
															<a href="#">Tourism in Dubai tourist favorite place</a>
														</h3>
													</div>
												</div>
											</div>
										</div>
									</div>
								</li>
								<li>
									<a href="category-2.html">Travel</a>
								</li>
								<li>
									<a href="#">Features</a>
									<ul class="nav-dropdown">
										<li>
											<a href="#">Category layout</a>
											<ul class="nav-dropdown">
												<li>
													<a href="category-1.html">Category layout 1</a>
												</li>
												<li>
													<a href="category-2.html">Category layout 2 </a>
												</li>
												<li>
													<a href="category-3.html">Category layout 3</a>
												</li>
												<li>
													<a href="category-4.html">Category layout 4</a>
												</li>
												<li>
													<a href="category-5.html">Category layout 5</a>
												</li>
												<li>
													<a href="category-6.html">Category layout 6</a>
												</li>
											</ul>
										</li>
										<li>
											<a href="#">Posts Formate</a>
											<ul class="nav-dropdown">
												<li>
													<a href="single-post-1.html">Single Post 1</a>
												</li>
												<li>
													<a href="single-post-2.html">Single Post 2 </a>
												</li>
												<li>
													<a href="single-post-3.html">Single Post 3 </a>
												</li>
												<li>
													<a href="single-post-4.html">Single Post 4 </a>
												</li>
												<li>
													<a href="single-post-5.html">Single Post 5</a>
												</li>
												<li>
													<a href="single-post-6.html">Single Post 6</a>
												</li>
												<li>
													<a href="single-post-7.html">Single Post 7</a>
												</li>
												<li>
													<a href="single-post-8.html">Single Post 8</a>
												</li>
												<li>
													<a href="single-post-9.html">Single Post 9</a>
												</li>
												<li>
													<a href="single-post-10.html">Single Post 10</a>
												</li>
											</ul>
										</li>
										<li>
											<a href="#">Pages</a>
											<ul class="nav-dropdown">
												<li>
													<a href="author.html">Author</a>
												</li>
												<li>
													<a href="contact.html">Contact Us</a>
												</li>
												<li>
														<a href="login.html">Log In</a>
												</li>
												<li>
														<a href="registration.html">registration</a>
												</li>
												<li>
													<a href="404.html">404 </a>
												</li>
											</ul>
										</li><!--Pages end-->
									</ul>
								</li>

							</ul>
							<!--nav menu end-->
						</div>
					</nav>
					<!-- nav end-->
				</div>
			</div>
		</div>
	</header>
	<!-- header nav end-->

	



	<!-- post wraper start-->
	<section class="block-wrapper mb-30 hot-topics-heighlight">
		<div class="container">

			<div class="ts-grid-box">
				<h2 class="ts-title">Nos destinations</h2>

				<div class="owl-carousel" id="hot-topics-slider">
					 <?php  foreach($listedestination as $v) {?>
					<div class="item ts-blue-light-heighlight heighlight">
						<div class="ts-post-thumb">
							<a href="destination.php?id=<?php echo $v['id']; ?>">
								<img class="img-fluid" src="<?php echo $v['image']; ?>" alt="">
							</a>
							<a class="post-cat" href="destination.php?id=<?php echo $v['id']; ?>"><?php echo $v['name']; ?></a>
						</div>

						<div class="post-content">

							<h3 class="post-title">
								<a href="destination.php?id=<?php echo $v['id']; ?>"><?php echo substr($v['description'], 0, 25);  ?> ..</a>
							</h3>
							<span class="post-date-info">
								<i class="fa fa-angle-up"></i>
								<?php echo $v['prix']; ?> TND
							</span>
						</div>
					</div>
				 <?php } ?>

					<!-- ts-grid-box end-->

					

					<!-- ts-grid-box end-->
				</div>
				<!-- most-populers end-->
			</div>
			<!-- ts-populer-post-box end-->
		</div>
		<!-- container end-->
	</section>
	<!-- post wraper end-->

	<!-- ad banner 2 start-->
	<section class="block-wrapper">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="banner-img text-center">
						<a href="index.html">
							<img class="img-fluid" src="images/banner/banner2.jpg" alt="">
						</a>
					</div>
				</div>
				<!-- col end -->
			</div>
			<!-- row  end -->
		</div>
		<!-- container end -->
	</section>
	<!-- ad banner 2 end-->

	<!-- footer social list start-->
	<section class="ts-footer-social-list">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<div class="footer-logo">
						<a href="#">
							<img src="images/logo/footer_logo.png" alt="">
						</a>
					</div>
					<!-- footer logo end-->
				</div>
				<!-- col end-->

				<div class="col-lg-8 align-self-center">
					<ul class="footer-social">
						<li class="ts-facebook">
							<a href="#">
								<i class="fa fa-facebook"></i>
								<span>Facebook</span>
							</a>
						</li>
						<li class="ts-google-plus">
							<a href="#">
								<i class="fa fa-google-plus"></i>
								<span>Google Plus</span>
							</a>
						</li>
						<li class="ts-twitter">
							<a href="#">
								<i class="fa fa-twitter"></i>
								<span>Twitter</span>
							</a>
						</li>
						<li class="ts-pinterest">
							<a href="#">
								<i class="fa fa-pinterest-p"></i>
								<span>pinterest</span>
							</a>
						</li>
						<li class="ts-linkedin">
							<a href="#">
								<i class="fa fa-linkedin"></i>
								<span>Linkedin</span>
							</a>

						</li>
					</ul>
				</div>
				<!-- col end-->

			</div>
		</div>
	</section>
	<!-- footer social list end-->

	<!-- newslater start -->
	<section class="ts-newslatter">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="ts-newslatter-content">
						<h2>
							Sign up for the Newsletter
						</h2>
						<p>
							Join our newsletter and get updates in your inbox. We won’t spam you and we respect your privacy.
						</p>
					</div>
				</div>
				<!-- col end-->

				<div class="col-lg-6 align-self-center">
					<div class="newsletter-form">
						<form action="#" method="post" class="media align-items-end">
							<div class="email-form-group media-body">
								<i class="fa fa-paper-plane" aria-hidden="true"></i>
								<input type="email" name="email" id="newsletter-form-email" class="form-control" placeholder="Enter Your Email" autocomplete="off"
								 required>
							</div>
							<div class="d-flex ts-submit-btn">
								<button class="btn btn-primary">Subscribe</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- newslater end -->

	<!-- footer start -->
	<footer class="ts-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="footer-menu text-center">
						<ul>
							<li>
								<a href="#">Support</a>
							</li>
							<li>
								<a href="#">Suggestion</a>
							</li>
							<li>
								<a href="#">Privacy</a>
							</li>
							<li>
								<a href="#">About</a>
							</li>
							<li>
								<a href="#">Our Ads </a>
							</li>
							<li>
								<a href="#">Terms</a>
							</li>
						</ul>
					</div>
					<div class="copyright-text text-center">
						<p>&copy; 2018, Vinazine. All rights reserved</p>
					</div>
				</div><!-- col end -->
			</div><!-- row end -->
			<div id="back-to-top" class="back-to-top">
				<button class="btn btn-primary" title="Back to Top">
					<i class="fa fa-angle-up"></i>
				</button>
			</div><!-- Back to top end -->
		</div><!-- Container end-->
	</footer>
	<!-- footer end -->




	<!-- javaScript Files
	=============================================================================-->

	<!-- initialize jQuery Library -->
	<script src="js/jquery.min.js"></script>
	<!-- navigation JS -->
	<script src="js/navigation.js"></script>
	<!-- Popper JS -->
	<script src="js/popper.min.js"></script>

	<!-- magnific popup JS -->
	<script src="js/jquery.magnific-popup.min.js"></script>



	<!-- Bootstrap jQuery -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Owl Carousel -->
	<script src="js/owl-carousel.2.3.0.min.js"></script>
	<!-- slick -->
	<script src="js/slick.min.js"></script>

	<!-- smooth scroling -->
	<script src="js/smoothscroll.js"></script>

	<script src="js/main.js"></script>
</body>


<!-- Mirrored from demo.themewinter.com/html/vinazine/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 17 Apr 2022 17:39:35 GMT -->
</html>