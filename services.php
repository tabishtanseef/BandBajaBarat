<?php

include("db.php");
include("functions.php");
?>
<!DOCTYPE html>
<html lang="en">

	<head>
		<!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<!-- SITE TITLE -->
		<title>WB | Wedding Boss</title>			
		<!-- Latest Bootstrap min CSS -->
		<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">		
		<!-- Google Font -->
		<link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300i,400,400i,600,600i,700,700i" rel="stylesheet"> 
		<!-- Font Awesome CSS -->
		<link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
		<!--- owl carousel Css-->
		<link rel="stylesheet" href="assets/owlcarousel/css/owl.carousel.css">
		<link rel="stylesheet" href="assets/owlcarousel/css/owl.theme.css">	
 	    <!--Flex slider-->
        <link rel="stylesheet" href="assets/css/flexslider.css">
		<!--ytp player-->
		<link rel="stylesheet" href="assets/css/YTPlayer.css">		
		<!-- component CSS -->	
		<link rel="stylesheet" href="assets/css/aos.css">			
		<!-- Style CSS -->
		<link rel="stylesheet" href="assets/css/style.css">	
		<!-- CSS FOR COLOR SWITCHER -->
		<link rel="stylesheet" href="assets/css/switcher/switcher.css"> 	
		<link rel="stylesheet" href="assets/css/switcher/style1.css" id="colors">			
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	
    <body data-spy="scroll" data-offset="80">

		<!-- START PRELOADER -->
		<div class="preloader">
			<div class="status">
				<div class="status-mes"></div>
			</div>
		</div>
		<!-- END PRELOADER -->		

		<!-- START NAVBAR -->
		  <nav class="navbar navbar-toggleable-sm fixed-top navbar-light bg-faded site-navigation">
			<div class="container">
			  <a class="navbar-brand" href="index.php"><img height="50px" width="10px" src="assets/img/logo.png" alt=""></a>          
			 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
				<i class="fa fa-bars"></i>
			  </button>
			  <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
<ul class="navbar-nav">
				  <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
				  <li class="nav-item"><a class="nav-link" href="services.php">Service</a></li>
				 <li class="nav-item"><a class="nav-link" href="joinus.php">partner with us</a></li>
				  <li class="nav-item"><a class="nav-link" href="contact.php">Contact us</a></li>
				  <li class="nav-item"><a class="nav-link" href="signup.php">Login</a></li>
				  
				   <li class="nav-item"><a  class="nav-link" href="cart.php"> <i class="fa fa-shopping-cart"></i>  cart( <?php echo total_items();?>)</a></li>
                      
				</ul>
			  </div>
			</div>
		  </nav>     
		<!-- END NAVBAR -->

		<!-- START HOME -->
		<section id="home" class="home_video html-video"style="background-image: url(assets/img/bg/particle-bg.jpg); height:400px; background-size:cover; background-position: center center;">>			
			 
			<div class="hero-text slider-caption text-center">
				<h1>Yeyy It's Your Wedding Time</h1>
				<h3 style="color:white;">Some people are worth melting for.</h3>
				<a href="#top_deals" class="btn btn-default btn-home-bg">Best Deals</a>						
			</div>
		</section>
		<!-- END  HOME DESIGN -->

		<!-- START SERVICES -->
		<section id="service" class="our_services">
		   <div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<div class="section-title">
							<h2>Services</h2>
							<span></span>
							<p>Your Comfort is our duty and we make sure to give you all pleasure in every service of ours.</p>
						</div>	
					</div>
				</div>
				<div class="row text-center">					
					<div class="col-lg-4 col-sm-6 col-xs-12" data-aos="fade-up">
						<a href="wp.php"><div class="service">
							<div class="icon"><i class="fa fa-bed"></i></div>
							<h4>Marriage Hall Booking </h4>
							<p></p>
						</div></a>
					</div><!-- END COL -->
					<div class="col-lg-4 col-sm-6 col-xs-12" data-aos="fade-up">
						<a href="cb.php"><div class="service">
							<div class="icon"><i class="fa fa-car"></i></div>
							<h4>Car Booking</h4>
							<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat labore et dolore magna aliquyam erat.</p>
						</div></a>
					</div><!-- END COL -->
					<div class="col-lg-4 col-sm-6 col-xs-12" data-aos="fade-up">
						<a href="fb.php"><div class="service">
							<div class="icon"><i class="fa fa-ticket"></i></div>
							<h4>Farmhouse Booking</h4>
							<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat labore et dolore magna aliquyam erat.</p>
						</div></a>
					</div><!-- END COL -->
					<div class="col-lg-4 col-sm-6 col-xs-12" data-aos="fade-up">
						<a href="ms.php"><div class="service">
							<div class="icon"><i class="fa fa-ship"></i></div>
							<h4>Music System</h4>
							<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat labore et dolore magna aliquyam erat.</p>
						</div></a>
					</div><!-- END COL -->
					<div class="col-lg-4 col-sm-6 col-xs-12" data-aos="fade-up">
						<a href="vp.php"><div class="service">
							<div class="icon"><i class="fa fa-train"></i></div>
							<h4>Videography</h4>
							<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat labore et dolore magna aliquyam erat.</p>
						</div></a>
					</div><!-- END COL -->
					<div class="col-lg-4 col-sm-6 col-xs-12" data-aos="fade-up">
						<a href="tb.php"><div class="service">
							<div class="icon"><i class="fa fa-home"></i></div>
							<h4>Tent booking</h4>
							<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat labore et dolore magna aliquyam erat.</p>
						</div></a>
					</div><!-- END COL -->
				</div><!-- END ROW -->
			</div><!-- END CONTAINER -->
		</section>
		<!-- END SERVICES -->	
		
		
		
		
		<!-- START TOP DEALS -->
		<section id="top_deals" class="top_deals section-padding">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12" data-aos="fade-up">
						<div class="section-title text-center">
							<h2>Best Deals</h2>
							<span></span>
							<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.</p>
						</div>
					</div><!-- END COL -->
				</div><!-- END ROW -->				
				<div class="row" data-aos="fade-up">
					<div class="col-sm-4 col-xs-12 no-padding">
						<div class="grid">
							<figure class="effect-sadie">
								<img src="assets/img/portfolio/6.jpg" alt=""/>
								<figcaption>
									<h4>Wedding Planner</h4>
									<p><a href="wp.php">Book Now</a></p>
								</figcaption>			
							</figure>
						</div><!--- END GRID -->
					</div><!--- END COL -->
					<div class="col-sm-4 col-xs-12 no-padding">
						<div class="grid">
							<figure class="effect-sadie">
								<img src="assets/img/portfolio/8.jpg" alt=""/>
								<figcaption>
									<h4>Photo & Video</h4>
									<p><a href="wp.php">Book Now</a></p>
								</figcaption>			
							</figure>
						</div><!--- END GRID -->
					</div><!--- END COL -->
					<div class="col-sm-4 col-xs-12 no-padding">
						<div class="grid">
							<figure class="effect-sadie">
								<img src="assets/img/portfolio/9.jpg" alt=""/>
								<figcaption>
									<h4>Wedding Cars</h4>
									<p><a href="wp.php">Book Now</a></p>
								</figcaption>			
							</figure>
						</div><!--- END GRID -->
					</div><!--- END COL -->
					<div class="col-sm-4 col-xs-12 no-padding">
						<div class="grid">
							<figure class="effect-sadie">
								<img src="assets/img/portfolio/10.jpg" alt=""/>
								<figcaption>
									<h4>Wedding Resort</h4>
									<p><a href="wp.php">Book Now</a></p>
								</figcaption>			
							</figure>
						</div><!--- END GRID -->
					</div><!--- END COL -->
					<div class="col-sm-4 col-xs-12 no-padding">
						<div class="grid">
							<figure class="effect-sadie">
								<img src="assets/img/portfolio/11.jpg" alt=""/>
								<figcaption>
									<h4>Music System</h4>
									<p><a href="wp.php">Book Now</a></p>
								</figcaption>			
							</figure>
						</div><!--- END GRID -->
					</div><!--- END COL -->
					<div class="col-sm-4 col-xs-12 no-padding">
						<div class="grid">
							<figure class="effect-sadie">
								<img src="assets/img/portfolio/7.jpg" alt=""/>
								<figcaption>
									<h4>Wedding Tent</h4>
									<p><a href="wp.php">Book Now</a></p>
								</figcaption>			
							</figure>
						</div><!--- END GRID -->
					</div><!--- END COL -->
				</div><!--- END ROW -->				
			</div><!--- END CONTAINER-FLUID -->
		</section>
		<!-- END TOP DEALS -->				 
		
		

		
		
		
		
		
		
		
		<!-- START FOOTER -->
		<div class="footer">
			<div class="container">
				<div class="row">					
					<div class="col-xs-12 text-center">
						<div class="copyright">
							<p>Copyright &copy; 2017 |  All Rights Reserved.</p>
						</div><!--- END FOOTER COPYRIGHT -->
					</div><!--- END COL -->			
				</div><!--- END ROW -->				
			</div><!--- END CONTAINER -->
		</div>
		<!-- END FOOTER -->		

		<!-- STYLE SWITCHER -->
		 <div id="style-switcher">
			<h2>Your Awesome Color<a href="#"><i class="fa fa-cog fa-spin"></i></a></h2>
			<div>
			  <ul class="colors" id="color1">
				<li><a href="#" class="style1"></a></li>
				<li><a href="#" class="style2"></a></li>
				<li><a href="#" class="style3"></a></li>
				<li><a href="#" class="style4"></a></li>
				<li><a href="#" class="style5"></a></li>
				<li><a href="#" class="style6"></a></li>
				<li><a href="#" class="style7"></a></li>
				<li><a href="#" class="style8"></a></li>
				<li><a href="#" class="style9"></a></li>
				<li><a href="#" class="style10"></a></li>
				<li><a href="#" class="style11"></a></li>
				<li><a href="#" class="style12"></a></li>
			  </ul>
			</div>
		 </div>  
		 <!-- END OF STYLE SWITCHER -->
							
		<!-- Latest jQuery -->
			<script src="assets/js/jquery-1.12.4.min.js"></script>
		<!-- Latest compiled and minified Bootstrap -->
			<script src="assets/bootstrap/js/bootstrap.min.js"></script>
		<!-- modernizer JS -->		
			<script src="assets/js/modernizr-2.8.3.min.js"></script>																	
		<!-- owl-carousel min js  -->
			<script src="assets/owlcarousel/js/owl.carousel.min.js"></script>
		<!-- stellar js -->
			<script src="assets/js/jquery.stellar.min.js"></script>
		<!-- countTo js -->
			<script src="assets/js/jquery.inview.min.js"></script>
		<!-- video scripts -->
			<script src="assets/js/jquery.mb.YTPlayer.min.js"></script>	
			<script type="text/javascript">
				$('.player').mb_YTPlayer();
			</script>					
		<!-- jquery flexslider min js -->
			<script src="assets/js/jquery.flexslider-min.js"></script>				
		<!-- scrolltopcontrol js -->
			<script src="assets/js/scrolltopcontrol.js"></script>									
		<!-- form-contact js -->
			<script src="assets/js/form-contact.js"></script>	
		<!-- aos js -->
			<script src="assets/js/aos.js"></script>
		<!-- switcher js -->
			<script src="assets/js/switcher.js"></script>					
		<!-- map js -->
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwIQh7LGryQdDDi-A603lR8NqiF3R_ycA"></script>				
		<!-- scripts js -->
			<script src="assets/js/scripts.js"></script>
    </body>
</html>