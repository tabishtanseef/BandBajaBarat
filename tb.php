<?php

include("db.php");
include("functions.php");
if(!isset($_SESSION['id'])){
	header("location:signup.php");	
}
$id = $_SESSION['id'];

?>
<!DOCTYPE html>
<html lang="en">

	<head>
		<!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<!-- SITE TITLE -->
		<title>Wedding Boss|Tent House</title>			
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
				  
				   <li class="nav-item"><a  class="nav-link" href="cart.php"> <i class="fa fa-shopping-cart"></i>  cart(<?php total_items();?> )</a></li>
                      
				</ul>
			  </div>
			</div>
		  </nav>     
		<!-- END NAVBAR -->
		
		<!-- START HOME -->
		<section id="home" class="home-area">	
			<div id="home-slider" class="flexslider text-center loading">
			  <ul class="slides">
				<li style="background: url('assets/img/bg/marriage.jpg'); height:200px; no-repeat center center;">
					<div class="slider-info">
							
		</section>
		<!-- END  HOME DESIGN -->	

						 
		<?php cart(); ?>
        
		<!-- START BLOG -->
		<section id="blog" class="blog_section">						
			<div class="container">
				
				
				<?php getTent(); ?> <!--- END ROW -->
			</div><!--- END CONTAINER -->
		</section> 
		<!-- END BLOG -->
		
		
		
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
		<!-- jquery nav JS -->		
			<script src="assets/js/jquery.nav.js"></script>
		<!-- jquery smooth-scroll JS -->
			<script src="assets/js/smooth-scroll.js"></script>																	
		<!-- owl-carousel min js  -->
			<script src="assets/owlcarousel/js/owl.carousel.min.js"></script>
		<!-- stellar js -->
			<script src="assets/js/jquery.stellar.min.js"></script>
		<!-- countTo js -->
			<script src="assets/js/jquery.inview.min.js"></script>	
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