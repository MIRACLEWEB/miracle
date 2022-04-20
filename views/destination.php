<?php


require '../controller/getwhatever.php';
$destinations=new getwhatever();
$listedestination=$destinations->getdestinationbyid($_GET['id']); 
 $listechauffeur=$destinations-> getchauffeur();

?>
<!doctype html>
<html lang="en">


<!-- Mirrored from demo.themewinter.com/html/vinazine/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 17 Apr 2022 17:40:13 GMT -->
<head>
	<!-- Basic Page Needs =====================================-->
	<meta charset="utf-8">

	<!-- Mobile Specific Metas ================================-->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Site Title- -->
	<title>vinazine - HTML5 Template</title>

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



	<!-- navigation -->
	<link rel="stylesheet" href="css/navigation.css">

	<!-- magnific popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">




	<!-- Style -->
	<link rel="stylesheet" href="css/style.css">

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
	<!-- top bar start -->
	<section class="top-bar v3">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 align-self-center">
					<div class="ts-date">
						<i class="fa fa-clock-o"></i>
						Sunday, August 24
					</div>
					<div class="ts-temperature">
						<i class="icon-weather"></i>
						<span>25.8
							<b>c</b>
						</span>
						<span>Dubai</span>

					</div>



				</div>
				<!-- end col-->

		
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
							<img src="images/banner/banner1.jpg" alt="">
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
					<nav class="navigation ts-main-menu navigation-landscape">
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
	<section class="block-wrapper mt-15">
		<div class="container">
			<div class="row">
				<div class="col-lg-9">
					<?php  foreach($listedestination as $v) {?>
					<div class="contact-box ts-grid-box">
						<h3><?php echo $v['name']; ?></h3>
						<img style="height:500px;width: 700px;" src="<?php echo $v['image']; ?>">
						<br>
						<br>
							<br>
						<br>

							<p><?php echo $v['description']; ?></p>

							<div class="widget contact-info">
							
								<div class="contact-info-box">
									<div class="contact-info-box-content">
										<h4></h4>
									</div>
								</div>
 						
								

								<div class="contact-info-box">
									<div class="contact-info-box-content">
										<h4><?php echo $v['prix']; ?> TND</h4>
								
									</div>
								</div>
	<?php } ?>
							</div><!-- Widget end -->
							<br>
							<br>
							<h3>Reservez </h3>
							 <form action="../controller/reservation.php" id="contact-form" method="post" enctype="multipart/form-data">
								<div class="error-container"></div>
								<input name="id_destination" value="<?php echo $_GET['id']; ?>" hidden>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label>Nom</label>
										<input  minlength="4" maxlength="25" size="25" class="form-control form-control-name" name="name" id="name"  required>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label>Email</label>
											<input class="form-control form-control-email" name="email" id="email" 
											placeholder="" type="email" required>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label>Tel</label>
										<input pattern="\d{8}"   class="form-control" name="tel" id="tel" placeholder="" type="tel" required>
										</div>
									</div>
									<div class="col-md-4">
								<div class="form-group">
									<label >Chauffeur</label>
									 <br>
  								<select class="form-control" name="chauffeur"  required>
   							 <option value="0">Choisir un chauffeur:</option>

    								<?php  foreach($listechauffeur as $v) {?>
   									 <option value="<?php echo $v['id']; ?>"><?php echo $v['nom']; ?></option>
									<?php } ?>
  								</select>

								</div>
								</div>
									<div class="col-md-4">
										<div class="form-group">
											<label>Choisir une date</label>
											<input  class="form-control " type="date" id="datee" name="datee" required>

										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label>Choisir une heure</label>
											<input  class="form-control " type="time" id="heure" name="heure" required>

										</div>
									</div>
								</div>
								
							
								
								<div class="text-right"><br>
									<button class="btn btn-primary solid blank" type="submit"> Réserver</button> 
								</div>
							</form>
					</div><!-- grid box end -->

					 <div id="map"></div>

    <!-- 
     The `defer` attribute causes the callback to execute after the full HTML
     document has been parsed. For non-blocking uses, avoiding race conditions,
     and consistent behavior across browsers, consider loading using Promises
     with https://www.npmjs.com/package/@googlemaps/js-api-loader.
    -->
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyALpGDdPTUYWET7HyTTUVu5NPrg2gnfHZ4&callback=initMap&v=weekly"
      defer
    ></script>
    <script type="text/javascript">
    	let map;
let marker;
let geocoder;
let responseDiv;
let response;

function initMap() {
	<?php  foreach($listedestination as $v) {?>
  map = new google.maps.Map(document.getElementById("map"), {
    zoom: 10,
    center: { lat: <?php echo $v['lat']; ?>, lng: <?php echo $v['lng']; ?> },
    mapTypeControl: false,
  });
  <?php } ?>
  geocoder = new google.maps.Geocoder();

  
  submitButton.classList.add("button", "button-primary");

  const clearButton = document.createElement("input");

  clearButton.type = "button";
  clearButton.value = "Clear";
  clearButton.classList.add("button", "button-secondary");
  response = document.createElement("pre");
  response.id = "response";
  response.innerText = "";
  responseDiv = document.createElement("div");
  responseDiv.id = "response-container";
  responseDiv.appendChild(response);

  const instructionsElement = document.createElement("p");

  instructionsElement.id = "instructions";
  
  map.controls[google.maps.ControlPosition.TOP_LEFT].push(inputText);
  map.controls[google.maps.ControlPosition.TOP_LEFT].push(submitButton);
  map.controls[google.maps.ControlPosition.TOP_LEFT].push(clearButton);
  map.controls[google.maps.ControlPosition.LEFT_TOP].push(instructionsElement);
  map.controls[google.maps.ControlPosition.LEFT_TOP].push(responseDiv);
  marker = new google.maps.Marker({
    map,
  });
  map.addListener("click", (e) => {
    geocode({ location: e.latLng });
  });
  submitButton.addEventListener("click", () =>
    geocode({ address: inputText.value })
  );
  clearButton.addEventListener("click", () => {
    clear();
  });
  clear();
}

function clear() {
  marker.setMap(null);
  responseDiv.style.display = "none";
}

function geocode(request) {
  clear();
  geocoder
    .geocode(request)
    .then((result) => {


      const { results } = result;

      map.setCenter(results[0].geometry.location);
      marker.setPosition(results[0].geometry.location);
      marker.setMap(map);
      responseDiv.style.display = "block";
      response.innerText = JSON.stringify(result, null, 2);
      var aa=results[0].geometry.location;
      var b=aa.toString().replace(/[\])}[{(]/g, '') ;
      var	lat = b.split(",")[0];
        var lng = b.split(",")[1];
          	      document.cookie="profile_viewer_uid="+lng;
          	 
      return results;
    })
    .catch((e) => {
      alert("Geocode was not successful for the following reason: " + e);
    });
}

window.initMap = initMap;
    </script>
<style type="text/css">
				/* 
 * Always set the map height explicitly to define the size of the div element
 * that contains the map. 
 */
#map {
  height: 30%;
}

/* 
 * Optional: Makes the sample page fill the window. 
 */


input[type=text] {
  background-color: #fff;
  border: 0;
  border-radius: 2px;
  box-shadow: 0 1px 4px -1px rgba(0, 0, 0, 0.3);
  margin: 10px;
  padding: 0 0.5em;
  font: 400 18px Roboto, Arial, sans-serif;
  overflow: hidden;
  line-height: 40px;
  margin-right: 0;
  min-width: 25%;
}

input[type=button] {
  background-color: #fff;
  border: 0;
  border-radius: 2px;
  box-shadow: 0 1px 4px -1px rgba(0, 0, 0, 0.3);
  margin: 10px;
  padding: 0 0.5em;
  font: 400 18px Roboto, Arial, sans-serif;
  overflow: hidden;
  height: 40px;
  cursor: pointer;
  margin-left: 5px;
}
input[type=button]:hover {
  background: rgb(235, 235, 235);
}
input[type=button].button-primary {
  background-color: #1a73e8;
  color: white;
}
input[type=button].button-primary:hover {
  background-color: #1765cc;
}
input[type=button].button-secondary {
  background-color: white;
  color: #1a73e8;
}
input[type=button].button-secondary:hover {
  background-color: #d2e3fc;
}

#response-container {
  background-color: #fff;
  border: 0;
  border-radius: 2px;
  box-shadow: 0 1px 4px -1px rgba(0, 0, 0, 0.3);
  margin: 10px;
  padding: 0 0.5em;
  font: 400 18px Roboto, Arial, sans-serif;
  overflow: hidden;
  overflow: auto;
  max-height: 50%;
  max-width: 90%;
  background-color: rgba(255, 255, 255, 0.95);
  font-size: small;
}

#instructions {
  background-color: #fff;
  border: 0;
  border-radius: 2px;
  box-shadow: 0 1px 4px -1px rgba(0, 0, 0, 0.3);
  margin: 10px;
  padding: 0 0.5em;
  font: 400 18px Roboto, Arial, sans-serif;
  overflow: hidden;
  padding: 1rem;
  font-size: medium;
}
			</style>		
				</div>
				<!-- col end-->
				<div class="col-lg-3">
					<div class="right-sidebar">
						<div class="ts-grid-box widgets">
							<h2 class="ts-title">Follow us</h2>
							<ul class="ts-social-list">
								<li class="ts-facebook">
									<a href="#">
										<i class="fa fa-facebook"></i>
									</a>
									<label>12.5 k </label>
									<span>Likes</span>
								</li>
								<li class="ts-google-plus">
									<a href="#">
										<i class="fa fa-google-plus"></i>
									</a>
									<label>12.5 k </label>
									<span>Follwers</span>
								</li>
								<li class="ts-twitter">
									<a href="#">
										<i class="fa fa-twitter"></i>
									</a>
									<label>12.5 k </label>
									<span>Follwers</span>
								</li>
								<li class="ts-pinterest">
									<a href="#">
										<i class="fa fa-pinterest-p"></i>
									</a>
									<label>12.5 k </label>
									<span>Photos</span>
								</li>
								<li class="ts-linkedin">
									<a href="#">
										<i class="fa fa-linkedin"></i>
									</a>
									<label>12.5 k </label>
									<span>Follwers</span>
								</li>
								<li class="ts-youtube">
									<a href="#">
										<i class="fa fa-youtube"></i>
									</a>
									<label>12.5 k </label>
									<span>Follwers</span>
								</li>
							</ul>
						</div>
						<!-- widgets end-->

						<div class="widgets widget-banner">
							<a href="#">
								<img class="img-fluid" src="images/banner/sidebar-banner2.jpg" alt="">
							</a>
						</div>
						<!-- widgets end-->
						<div class="post-list-item widgets">
							<!-- Nav tabs -->
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation">
									<a class="active" href="#home" aria-controls="home" role="tab" data-toggle="tab">
										<i class="fa fa-clock-o"></i>
										Recent
									</a>
								</li>
								<li role="presentation">
									<a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">
										<i class="fa fa-heart"></i>
										Favorites
									</a>
								</li>
							</ul>

							<!-- Tab panes -->
							<div class="tab-content">
								<div role="tabpanel" class="tab-pane active ts-grid-box post-tab-list" id="home">
									<div class="post-content media">
										<img class="d-flex sidebar-img" src="images/news/sports/sports2.jpg" alt="">
										<div class="media-body">
											<span class="post-tag">
												<a href="#" class="green-color"> sports</a>
											</span>
											<h4 class="post-title">
												<a href="#">18 month old shoots himself by gun </a>
											</h4>
										</div>
									</div>
									<!--post-content end-->
									<div class="post-content media ">
										<img class="d-flex sidebar-img" src="images/news/tech/tech4.jpg" alt="">
										<div class="media-body">
											<span class="post-tag">
												<a href="#" class="yellow-color"> Technology</a>
											</span>
											<h4 class="post-title">
												<a href="#">18 month old shoots himself by gun </a>
											</h4>
										</div>
									</div>
									<!--post-content end-->
									<div class="post-content media">
										<img class="d-flex sidebar-img" src="images/news/sports/sports4.jpg" alt="">
										<div class="media-body">
											<span class="post-tag">
												<a href="#" class="blue-color"> Lifestyle</a>
											</span>
											<h4 class="post-title">
												<a href="#">18 month old shoots himself by gun </a>
											</h4>
										</div>
									</div>
									<!--post-content end-->
									<div class="post-content media">
										<img class="d-flex sidebar-img" src="images/news/fashion/fashion4.jpg" alt="">
										<div class="media-body">
											<span class="post-tag">
												<a href="#" class="pink-color"> Fashion</a>
											</span>
											<h4 class="post-title">
												<a href="#">18 month old shoots himself by gun </a>
											</h4>
										</div>
									</div>
									<!--post-content end-->
									<div class="post-content  media">
										<img class="d-flex sidebar-img" src="images/news/travel/travel6.jpg" alt="">
										<div class="media-body">
											<span class="post-tag">
												<a href="#" class="yellow-color"> Travel</a>
											</span>
											<h4 class="post-title">
												<a href="#">18 month old shoots himself by gun </a>
											</h4>
										</div>
									</div>
									<!--post-content end-->

								</div>
								<!--ts-grid-box end -->

								<div role="tabpanel" class="tab-pane ts-grid-box post-tab-list" id="profile">
									<div class="post-content media">
										<img class="d-flex sidebar-img" src="images/news/travel/travel6.jpg" alt="">
										<div class="media-body">
											<span class="post-tag">
												<a href="#" class="green-color"> sports</a>
											</span>
											<h4 class="post-title">
												<a href="#">18 month old shoots himself by gun </a>
											</h4>
										</div>
									</div>
									<!--post-content end-->
									<div class="post-content media ">
										<img class="d-flex sidebar-img" src="images/news/fashion/fashion4.jpg" alt="">
										<div class="media-body">
											<span class="post-tag">
												<a href="#" class="yellow-color"> Technology</a>
											</span>
											<h4 class="post-title">
												<a href="#">18 month old shoots himself by gun </a>
											</h4>
										</div>
									</div>
									<!--post-content end-->
									<div class="post-content media">
										<img class="d-flex sidebar-img" src="images/news/sports/sports4.jpg" alt="">
										<div class="media-body">
											<span class="post-tag">
												<a href="#" class="blue-color"> Lifestyle</a>
											</span>
											<h4 class="post-title">
												<a href="#">18 month old shoots himself by gun </a>
											</h4>
										</div>
									</div>
									<!--post-content end-->
									<div class="post-content media">
										<img class="d-flex sidebar-img" src="images/news/sports/sports2.jpg" alt="">
										<div class="media-body">
											<span class="post-tag">
												<a href="#" class="pink-color"> Fashion</a>
											</span>
											<h4 class="post-title">
												<a href="#">18 month old shoots himself by gun </a>
											</h4>
										</div>
									</div>
									<!--post-content end-->
									<div class="post-content  media">
										<img class="d-flex sidebar-img" src="images/news/travel/travel6.jpg" alt="">
										<div class="media-body">
											<span class="post-tag">
												<a href="#" class="yellow-color"> Travel</a>
											</span>
											<h4 class="post-title">
												<a href="#">18 month old shoots himself by gun </a>
											</h4>
										</div>
									</div>
									<!--post-content end-->
								</div>
								<!--ts-grid-box end -->
							</div>
							<!-- tab content end-->
						</div>
						<!-- widgets end-->

					</div>
					<!-- right sidebar end-->
				</div>
				<!-- col end-->
			</div>
			<!-- row end-->
		</div>
		<!-- container end-->
	</section>
	<!-- post wraper end-->




	<!-- footer social list start-->
	
	<!-- footer social list end-->

	<!-- newslater start -->
	
	<!-- newslater end -->

	<!-- footer start -->	
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>

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
				</div>
			</div>
		</div>
	</footer>
	<!-- footer end -->




	<!-- javaScript Files
	=============================================================================-->

	<!-- initialize jQuery Library -->
	<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/jquery.min.js"></script>
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

	<script src="js/main.js"></script>
</body>


<!-- Mirrored from demo.themewinter.com/html/vinazine/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 17 Apr 2022 17:40:13 GMT -->
</html>