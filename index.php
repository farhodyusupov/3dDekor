<?php

$db = new PDO("mysql:host=localhost; dbname=dekoruz", 'root', '');

$image = $db->query("SELECT * FROM gallery ")->fetchAll();

//$maxsulot = $db->query("SELECT * FROM mahsulotlar ")->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>B-Hero : Home</title>
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

   <!--START SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#">
      <i class="fa fa-angle-up"></i>
    </a>
  <!-- END SCROLL TOP BUTTON -->
  	
  	<!-- Start Header -->
	<header id="mu-hero">
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light mu-navbar">
				<a class="navbar-brand mu-logo" href="index.php"><span>DekorAzm</span></a>

                <!-- image based logo -->
			   	<!-- <a class="navbar-brand mu-logo" href="index.html"><img src="assets/images/logo.png" alt="logo"></a> -->
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="fa fa-bars"></span>
			  </button>

			  <div class="collapse navbar-collapse" id="navbarSupportedContent">
			    <ul class="navbar-nav mr-auto mu-navbar-nav">
			      <li class="nav-item active">
			        <a href="index.php">Home</a>
			      </li>
			      <li class="nav-item"><a href="about-us.php">About us</a></li>
			      <li class="nav-item"><a href="services.php">Services</a></li>
			      <li class="nav-item"><a href="portfolio.php">Portfolio</a></li>
                  <li class="nav-item"><a href="contact.php">Contact us</a></li>
			    </ul>
			  </div>
			</nav>
		</div>
	</header>
	<!-- End Header -->

	<!-- Start slider area -->
	<div id="mu-slider">
		<div class="mu-slide">
			<!-- Start single slide  -->
			<div class="mu-single-slide">
				<img src="dekor/images/home_fasad.jpg" style="height: 30em; width: 60em" alt="slider img">
				<div class="mu-single-slide-content-area">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="mu-single-slide-content">
<!--									<h1>Welcome to b-hero</h1>-->
<!--									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,</p>-->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End single slide  -->

			<!-- Start single slide  -->
			<div class="mu-single-slide">
				<img src="dekor/1431696184-1431696184.jpg"  style="height: 30em; width: 60em" alt="slider img">
				<div class="mu-single-slide-content-area">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="mu-single-slide-content">
<!--									<h1>We Promote Your Business</h1>-->
<!--									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,</p>-->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End single slide  -->

			<!-- Start single slide  -->
			<div class="mu-single-slide">
				<img src="dekor/fasad-1.jpg"  alt="slider img" style="height: 30em;width: 60em">
				<div class="mu-single-slide-content-area">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="mu-single-slide-content">
<!--									<h1>Free Multipurpose Template</h1>-->
<!--									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,</p>-->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End single slide  -->
		</div>
	</div>
	<!-- End Slider area -->

	
	<!-- Start main content -->
	<main>
		<!-- Start About -->
		<section id="mu-about">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-about-area">
							<!-- Title -->
							<div class="row">
								<div class="col-md-12">
									<div class="mu-title">
										<h2>Who we are</h2>
										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa cum sociis.</p>
									</div>
								</div>
							</div>
							<!-- Start Feature Content -->
							<div class="row">
								<div class="col-md-6">
									<div class="mu-about-left">
										<img class="" src="dekor/images/home_fasad.jpg" style="height: 28em;width: 80em"alt="img">
									</div>
								</div>
								<div class="col-md-6">
									<div class="mu-about-right">
										<ul>
											<li>
												<h3>Our Mission</h3>
												<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,</p>
											</li>
											<li>
												<h3>Our Vision</h3>
												<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,</p>
											</li>
											<li>
												<h3>Our Valuse</h3>
												<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,</p>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<!-- End Feature Content -->
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End About -->


		<!-- Start Video -->
		<div id="mu-video">
			<div class="row">
				<div class="col-md-6">
					<div class="mu-video-left">
						<a href="#" class="mu-video-play-btn"><i class="fa fa-play" aria-hidden="true"></i></a>
					</div>
				</div>
				<div class="col-md-6">
					<div class="mu-video-right">
						<p>In this video from our "Talking business" series, our expert discusses the role a business plan can play in the success of your business.</p>
					</div>
				</div>
			</div>

			<!-- Start Video Popup -->
			<div class="mu-video-popup">
				<div class="mu-video-iframe-area">
					<a class="mu-video-close-btn" href="#"><i class="fa fa-times" aria-hidden="true"></i></a>
                    <video src="dekor/dekor.mp4" height="200" width="400">

                    </video>
                </div>
			</div>
			<!-- End Video Popup -->

		</div>
		<!-- End Video -->

		<!-- Start Portfolio -->		<section id="mu-portfolio">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mu-portfolio-area">
                            <!-- Title -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mu-title">
                                        <h2>Bizning oxirgi ishlarimiz</h2>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <!-- Start Portfolio Filter -->
                                <!--									<div class="mu-portfolio-filter-area">-->
                                <!--										<ul class="mu-simplefilter">-->
                                <!--							                <li class="active" data-filter="all">All<span>/</span></li>-->
                                <!--							                <li data-filter="1">Web design<span>/</span> </li>-->
                                <!--							                <li data-filter="2">Mobile Development<span>/</span></li>-->
                                <!--							                <li data-filter="3">E-commerces<span>/</span></li>-->
                                <!--							                <li data-filter="4"> Arts<span>/</span> </li>-->
                                <!--							                <li data-filter="5">Branding</li>-->
                                <!--							            </ul>-->
                                <!--									</div>-->

                                <!-- Start Portfolio Content -->
                                <div class="mu-portfolio-content">
                                    <div class="filtr-container">
                                        <?php foreach ($image as $rasm):?>
                                            <div class="col-xs-6 col-sm-6 col-md-4 filtr-item" data-category="4">
                                                <a class="mu-imglink" href="assets/images/portfolio/img-1.jpg" title="PAINTING">
                                                    <img class="img-responsive" src="dekor/<?php echo $rasm["image"]?>" style="width: 80em; height: 15em" alt="image">
                                                    <div class="mu-filter-item-content">
                                                        <h4 class="mu-filter-item-title">PAINTING</h4>
                                                        <span class="fa fa-long-arrow-right"></span>
                                                    </div>
                                                </a>
                                            </div>

                                        <?php endforeach;?>
                                    </div>
                                </div>
                                <!-- End Portfolio Content -->
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
		<!-- End Portfolio -->


<!--    End main content-->

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
								<li><a href="about-us.php">Biz haqimizda</a></li>
								<li><a href="services.php">Xizmatlar</a></li>
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