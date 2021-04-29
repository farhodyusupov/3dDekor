<?php

$db = new PDO("mysql:host=localhost; dbname=dekoruz", 'root', '');

$hamkor = $db->query("SELECT * FROM hamkorlar ")->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>B-Hero : Services</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="assets/images/favicon.ico"/>
    <!-- Font Awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
     <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <!-- Slick slider -->
    <link href="assets/css/slick.css" rel="stylesheet">
    <!-- Gallery Lightbox -->
    <link href="assets/css/magnific-popup.css" rel="stylesheet">
    <!-- Skills Circle CSS  -->
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/circlebars@1.0.3/dist/circle.css">
    

    <!-- Main Style -->
    <link href="style.css" rel="stylesheet">

    <!-- Fonts -->

    <!-- Google Fonts Raleway -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,400i,500,500i,600,700" rel="stylesheet">
	<!-- Google Fonts Open sans -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,700,800" rel="stylesheet">
 
 
	</head>
  <body>

  	<!-- Font Awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
     <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <!-- Slick slider -->
    <link href="assets/css/slick.css" rel="stylesheet">
    <!-- Gallery Lightbox -->
    <link href="assets/css/magnific-popup.css" rel="stylesheet">
    <!-- Skills Circle CSS  -->
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/circlebars@1.0.3/dist/circle.css">
    

    <!-- Main Style -->
    <link href="style.css" rel="stylesheet">

    <!-- Fonts -->

    <!-- Google Fonts Raleway -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,400i,500,500i,600,700" rel="stylesheet">
	<!-- Google Fonts Open sans -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,700,800" rel="stylesheet">

   	<!--START SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#">
      <i class="fa fa-angle-up"></i>
    </a>
 	<!-- END SCROLL TOP BUTTON -->
  	
  	<!-- Start Header -->
	<header id="mu-hero">
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light mu-navbar">
				<!-- Text based logo -->
				<a class="navbar-brand mu-logo" href="index.php"><span>DekorAzm</span></a>
				<!-- image based logo -->
			   	<!-- <a class="navbar-brand mu-logo" href="index.html"><img src="assets/images/logo.png" alt="logo"></a> -->
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="fa fa-bars"></span>
			  </button>

			  <div class="collapse navbar-collapse" id="navbarSupportedContent">
			    <ul class="navbar-nav mr-auto mu-navbar-nav">
			      <li class="nav-item">
			        <a href="index.php">Home</a>
			      </li>
			      <li class="nav-item"><a href="about-us.php">About us</a></li>
			      <li class="nav-item active"><a href="services.php">Services</a></li>
			      <li class="nav-item"><a href="portfolio.php">Portfolio</a></li>
			      <li class="nav-item"><a href="contact.php">Contact us</a></li>
			    </ul>
			  </div>
			</nav>
		</div>
	</header>
	<!-- End Header -->

	<!-- Start Page Header area -->
	<div id="mu-page-header">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="mu-page-header-area">
						<h1 class="mu-page-header-title">Our exclusive services</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Page Header area -->

	<!-- Start Breadcrumb -->
	<div id="mu-breadcrumb">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<nav aria-label="breadcrumb" role="navigation">
					  <ol class="breadcrumb mu-breadcrumb">
					    <li class="breadcrumb-item"><a href="#">Home</a></li>
					    <li class="breadcrumb-item active" aria-current="page">Services</li>
					  </ol>
					</nav>
				</div>
			</div>
		</div>
	</div>
	<!-- End Breadcrumb -->
	
	<!-- Start main content -->
	<main>
		
		<!-- Start Services -->
		<section id="mu-service">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-service-area">
							<!-- Title -->
							<div class="row">
								<div class="col-md-12">
									<div class="mu-title">
										<h2>Our exclusive services</h2>
										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa cum sociis.</p>
									</div>
								</div>
							</div>
							<!-- Start Service Content -->
							<div class="row">
								<div class="col-md-12">
									<div class="mu-service-content">
										<div class="row">
											<!-- Start single service -->
											<div class="col-md-4">
												<div class="mu-single-service">
													<div class="mu-single-service-icon"><i class="fa fa-shopping-cart" aria-hidden="true"></i></div>
													<div class="mu-single-service-content">
														<h3>E-Commerce</h3>
														<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor commodo .</p>
													</div>
												</div>
											</div>
											<!-- End single service -->
											<!-- Start single service -->
											<div class="col-md-4">
												<div class="mu-single-service">
													<div class="mu-single-service-icon"><i class="fa fa-bullhorn" aria-hidden="true"></i></div>
													<div class="mu-single-service-content">
														<h3>Online Marketing</h3>
														<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor commodo .</p>
													</div>
												</div>
											</div>
											<!-- End single service -->
											<!-- Start single service -->
											<div class="col-md-4">
												<div class="mu-single-service">
													<div class="mu-single-service-icon"><i class="fa fa-laptop" aria-hidden="true"></i></div>
													<div class="mu-single-service-content">
														<h3>Web Design</h3>
														<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor commodo .</p>
													</div>
												</div>
											</div>
											<!-- End single service -->
											<!-- Start single service -->
											<div class="col-md-4">
												<div class="mu-single-service">
													<div class="mu-single-service-icon"><i class="fa fa-mobile" aria-hidden="true"></i></div>
													<div class="mu-single-service-content">
														<h3>Mobile Development</h3>
														<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor commodo .</p>
													</div>
												</div>
											</div>
											<!-- End single service -->
											<!-- Start single service -->
											<div class="col-md-4">
												<div class="mu-single-service">
													<div class="mu-single-service-icon"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
													<div class="mu-single-service-content">
														<h3>Customer Support</h3>
														<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor commodo .</p>
													</div>
												</div>
											</div>
											<!-- End single service -->
											<!-- Start single service -->
											<div class="col-md-4">
												<div class="mu-single-service">
													<div class="mu-single-service-icon"><i class="fa fa-cog" aria-hidden="true"></i></div>
													<div class="mu-single-service-content">
														<h3>Customization</h3>
														<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor commodo .</p>
													</div>
												</div>
											</div>
											<!-- End single service -->
										</div>
									</div>
								</div>
							</div>
							<!-- End Service Content -->
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Services -->	


		<!-- Start Pricing Table -->
		<section id="mu-pricing">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-pricing-area">
							<!-- Title -->
							<div class="row">
								<div class="col-md-12">
									<div class="mu-title">
										<h2>Bizning hamkorlar</h2>
									</div>
								</div>
								<div class="col-md-12">
									<div class="mu-pricing-content">

										<ul class="mu-pricing-table">
                                            <?php foreach ($hamkor as $hamkor1):?>

                                            <li>
                                                <div class="mu-pricing-single">
													<div class="mu-pricing-single-icon">
														<span class="fa fa-user"></span>
													</div>
													<div class="mu-pricing-single-title">
                                                        <h3><?php echo $hamkor1["name"]?></h3>
													</div>
													<div class="mu-pricing-single-content">
                                                        <ul class="list-unstyled" style="padding: 0% 10%">

                                                            <li class="media">
                                                                <span class="fa fa-phone"></span>
                                                                <div class="media-body">
                                                                    <p><?php echo $hamkor1["phone_number"]?></p>
                                                                </div>

                                                            </li>
                                                            <li class="media">
                                                                <span class="fa fa-home"></span>
                                                                <div class="media-body">
                                                                    <p><?php echo $hamkor1["addres"]?></p>
                                                                </div>
                                                            </li>
                                                        </ul>								</div>
												</div>
											</li>
                                            <?php endforeach;?>


										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Pricing Table -->

<!---->
		<!-- Start Client Testimonials -->
<!--		<section id="mu-testimonials">-->
<!--			<div class="container">-->
<!--				<div class="row">-->
<!--					<div class="col-md-12">-->
<!--						<div class="mu-testimonials-area">-->
<!--							<h2>What Our Client Says</h2>-->
<!---->
<!--							<div class="mu-testimonials-block">-->
<!--								<ul class="mu-testimonial-slide">-->
<!---->
<!--									<li>-->
<!--										<img class="mu-rt-img" src="assets/images/traveler-1.jpg" alt="img">-->
<!--										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa</p>-->
<!--										<h5 class="mu-rt-name">Emma Marshall</h5>-->
<!--										<span class="mu-rt-title">Web Developer </span>-->
<!--									</li>-->
<!---->
<!--									<li>-->
<!--										<img class="mu-rt-img" src="assets/images/traveler-2.jpg" alt="img">-->
<!--										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa</p>-->
<!--										<h5 class="mu-rt-name">Jhon Doe</h5>-->
<!--										<span class="mu-rt-title">UI/UX Designer</span>-->
<!--									</li>-->
<!---->
<!--									<li>-->
<!--										<img class="mu-rt-img" src="assets/images/traveler-3.jpg" alt="img">-->
<!--										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa</p>-->
<!--										<h5 class="mu-rt-name">Jessica Doe</h5>-->
<!--										<span class="mu-rt-title">Web Designer </span>-->
<!--									</li>-->
<!---->
<!--								</ul>-->
<!--							</div>-->
<!---->
<!--						</div>-->
<!--					</div>-->
<!--				</div>-->
<!--			</div>-->
<!--		</section>-->
		<!-- End Client Testimonials -->

		<!-- Start Clients -->
<!--		<div id="mu-clients">-->
<!--			<div class="container">-->
<!--				<div class="row">-->
<!--					<div class="col-md-12">-->
<!--						<div class="mu-clients-area">-->
<!---->
							<!-- Start Clients brand logo -->
<!--							<div class="mu-clients-slider">-->
<!---->
<!--								<div class="mu-clients-single">-->
<!--									<img src="assets/images/client-brand-1.jpg" alt="Brand Logo">-->
<!--								</div>-->
<!---->
<!--								<div class="mu-clients-single">-->
<!--									<img src="assets/images/client-brand-2.jpg" alt="Brand Logo">-->
<!--								</div>-->
<!---->
<!--								<div class="mu-clients-single">-->
<!--									<img src="assets/images/client-brand-3.jpg" alt="Brand Logo">-->
<!--								</div>-->
<!---->
<!--								<div class="mu-clients-single">-->
<!--									<img src="assets/images/client-brand-4.jpg" alt="Brand Logo">-->
<!--								</div>-->
<!---->
<!--								<div class="mu-clients-single">-->
<!--									<img src="assets/images/client-brand-5.jpg" alt="Brand Logo">-->
<!--								</div>-->
<!---->
<!--								<div class="mu-clients-single">-->
<!--									<img src="assets/images/client-brand-6.jpg" alt="Brand Logo">-->
<!--								</div>-->
<!--							</div>-->
							<!-- End Clients brand logo -->
<!---->
<!--						</div>-->
<!--					</div>-->
<!--				</div>-->
<!--			</div>-->
<!--		</div>-->
		<!-- End Clients -->

	</main>
	
	<!-- End main content -->


    <!-- Start footer -->
    <footer id="mu-footer">
        <div class="mu-footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="mu-single-footer">
                            <h3>DekorAzm</h3>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus. </p>
                            <div class="mu-social-media">
                                <a href="https://www.facebook.com/nodir.jumaniyazov.9"><i class="fa fa-facebook"></i></a>
                                <!--								<a class="mu-twitter" href="#"><i class="fa fa-twitter"></i></a>-->
                                <a class="mu-pinterest" href="https://telegram.me/Dekorazm"><i class="fa fa-pinterest-p"></i></a>
                                <a class="mu-google-plus" href="https://instagram.com/dekorpenoplastuz?igshid=ojo0uhfvv7i3"><i class="fa fa-google-plus"></i></a>
                                <!--								<a class="mu-youtube" href="#"><i class="fa fa-youtube"></i></a>-->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="mu-single-footer">
                            <h3>Tezkor sahifalar</h3>
                            <ul class="mu-useful-links">
                                <li><a href="index.php">Asosiy</a></li>
                                <li><a href="about-us.php">Biz haqimizda</a></li>
                                <li><a href="portfolio.php">Mahsulotlar</a></li>
                                <li><a href="contact.php">Biz bilan bog`lanish</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="mu-single-footer">
                            <h3>Kontakt ma'lumotlari</h3>
                            <ul class="list-unstyled">

                                <li class="media">
                                    <span class="fa fa-phone"></span>
                                    <div class="media-body">
                                        <p>+998 94 140 36 06</p>
                                    </div>

                                </li>
                                <li class="media">
                                    <span class="fa fa-phone"></span>
                                    <div class="media-body">
                                        <p>+998 94 140 36 06</p>
                                    </div>

                                </li>
                                <li class="media">
                                    <span class="fa fa-envelope"></span>
                                    <div class="media-body">
                                        <p>dekorazm@mail.ru</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="mu-single-footer">
                            <h3>Bizning adres</h3>
                            <ul class="list-unstyled">

                                <li class="media">
                                    <span class="fa fa-home"></span>
                                    <div class="media-body">
                                        <p>Xorazm viloyati, Yangiariqtumani, Qarmish qishlog`i</p>
                                    </div>
                                </li>
                                <li class="media">
                                    <span class="fa fa-home"></span>
                                    <div class="media-body">
                                        <p>Xorazm viloyati, Urganch tuman, G`aybu qishlog`i</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="mu-footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mu-footer-bottom-area">
                            <!--							<p class="mu-copy-right">&copy; Copyright <a rel="nofollow" href="http://markups.io">markups.io</a>. All right reserved.</p>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <!-- End footer -->

	
	<!-- JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	<!-- Slick slider -->
    <script type="text/javascript" src="assets/js/slick.min.js"></script>
    <!-- Progress Bar -->
    <script src="https://unpkg.com/circlebars@1.0.3/dist/circle.js"></script>
    <!-- Filterable Gallery js -->
    <script type="text/javascript" src="assets/js/jquery.filterizr.min.js"></script>
    <!-- Gallery Lightbox -->
    <script type="text/javascript" src="assets/js/jquery.magnific-popup.min.js"></script>
    <!-- Counter js -->
    <script type="text/javascript" src="assets/js/counter.js"></script>
    <!-- Ajax contact form  -->
    <script type="text/javascript" src="assets/js/app.js"></script>
    
	
    <!-- Custom js -->
	<script type="text/javascript" src="assets/js/custom.js"></script>

	<!-- About us Skills Circle progress  -->
	<script>
		// First circle
	    new Circlebar({
        element : "#circle-1",
        type : "progress",
	      maxValue:  "90"
	    });
		
		// Second circle
	    new Circlebar({
        element : "#circle-2",
        type : "progress",
	      maxValue:  "84"
	    });

	    // Third circle
	    new Circlebar({
        element : "#circle-3",
        type : "progress",
	      maxValue:  "60"
	    });

	    // Fourth circle
	    new Circlebar({
        element : "#circle-4",
        type : "progress",
	      maxValue:  "74"
	    });

	</script>
    
  </body>
</html>