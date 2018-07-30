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
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
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
		<!-- animate CSS -->		
		<link rel="stylesheet" href="assets/css/animate.css"> 		
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
	
    <body data-spy="" data-offset="80">

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
			  <a class="navbar-brand" href="index.php"><img height="50px" width="50px" src="assets/img/logo.png" alt=""></a>          
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
				  
				   <li class="nav-item"><a  class="nav-link" href="cart.php"> <i class="fa fa-shopping-cart"></i>  cart( )</a></li>
                      
				</ul>
			  </div>
			</div>
		  </nav>      
		<!-- END NAVBAR -->
	
		<!-- START TITLE TOP -->
		<section class="section-content section-padding" style="background-image: url(assets/img/bg/wedding-couple.jpg);  background-size:cover; background-position: center center;">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						
					</div>
				</div>
			</div>
		</section>
		<!-- END TITLE TOP -->

		<!-- START BLOG -->
		<section class="tour_details section-padding">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-sm-8 col-xs-12">
						<div class="single_tour_details">
							<img src="assets/img/bg/brother-marriage.jpg" class="img-responsive" alt="image" />
								<span></span>						
							<h2 class="title">creativity is intelligence having fun</h2>
							<p>Lorem ipsum dosectetur adipisicing elit, sed doLorem ipsum dolor sit amet, consectetur Nulla fringilla purus at leo dignissim congue. Mauris elementum accumsan leo vel tempo Sit amet cursus nisl aliquam. Aliquam et elit eu nunc rhoncus viverra quis at felis. Seddo Lorem ipsum dolor sit amet, consectetur Nulla fringilla purus Lorem ipsum dosectetur a dipisicing elit at leo dignissim congue.</p><br>
							</div>						
					</div><!--- END COL -->
					<div class="col-md-4 col-sm-4 col-xs-12">
						<div class="book_now">
							<h4>Query Form</h4>
							<form action="contact.php" method="post" enctype="multipart/form-data">
								<div class="row">
								
									<div class="form-group col-md-12">
										<input type="text" name="name" class="form-control" id="first-name" placeholder="Name" required="required">
									</div>
									
									<div class="form-group col-md-12">
										<input type="text" name="mobile" class="form-control" id="phone" placeholder="Phone" required="required">
									</div>
									<div class="form-group col-md-12">
										<input type="date" name="date" class="form-control" id="date" placeholder="Wedding Date" required="required">
									</div>
									<div class="form-group col-md-12">
										<input type="text" name="person" class="form-control" id="person" placeholder="Place" required="required">
									</div>
									<div class="col-md-12">
										<div class="actions">
											<input type="submit" value="Submit" name="submit" id="submitButton" class="btn btn-lg btn-contact-bg" title="Submit Your Message!" />
										</div>
                                        <span style="font-size:25px; color:#408080;">We will contacts you soon.</span>
    
									</div>
								</div>
							</form>	
						</div>
                    
						<div class="tag">
							<h4 class="blog_sidebar_title">Tag cloud</h4>
							<a class="btn btn-default btn-tag-bg" href="#">Music & Sound</a>
							<a class="btn btn-default btn-tag-bg" href="#">D.J</a>
							<a class="btn btn-default btn-tag-bg" href="#">Car</a>
							<a class="btn btn-default btn-tag-bg" href="#">Photopgraphy</a>		
							<a class="btn btn-default btn-tag-bg" href="#">Video Recording</a>
							<a class="btn btn-default btn-tag-bg" href="#">Tent House</a>
						</div>
					</div><!--- END COL -->
				</div><!--- END ROW -->
                
			</div><!--- END CONTAINER -->
		</section>
		<!-- END BLOG -->
		
		<!-- START DEALS & DISCOUNT -->
		<section id="deals_discount" class="deals_discount section-padding">
			<div class="container">		
				<div class="row">
					<div class="col-md-12">
						<div class="section-title text-center">
							<h2>Deals &amp; discount</h2>
							<span></span>
							<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.</p>
						</div>
					</div><!-- END COL -->
				</div><!-- END ROW -->					
				<div class="row">	
					<div class="col-md-12">
						<div id="discount-slider" class="owl-carousel">
							<div class="single-discount">
								<div class="single-img">
									<img src="assets/img/discount/banquet.jpg" class="img-fluid" alt=""/>
																
								</div>	
								<div class="single_discount_dsc">
									<h3>Banquet Hall</h3>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore.</p>
									<a href="tour-details.html" target="_blank">View details</a>
								</div>
							</div><!-- END SINGLE DISCOUNT -->
							<div class="single-discount">
								<div class="single-img">
									<img src="assets/img/discount/wedding-car.jpg" class="img-fluid" alt="" style="height:215px; width:400px;"/>
															
								</div>	
								<div class="single_discount_dsc">
									<h3>Car</h3>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore.</p>
									<a href="tour-details.html" target="_blank">View details</a>
								</div>
							</div><!-- END SINGLE DISCOUNT -->
							<div class="single-discount">
								<div class="single-img">
									<img src="assets/img/discount/fullplan.jpg" class="img-fluid" alt=""/>
															
								</div>	
								<div class="single_discount_dsc">
									<h3>Full Wedding Plan</h3>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore.</p>
									<a href="tour-details.html" target="_blank">View details</a>
								</div>
							</div><!-- END SINGLE DISCOUNT -->
							<div class="single-discount">
								<div class="single-img">
									<img src="assets/img/discount/dj.jpg" class="img-fluid" alt=""/>
																
								</div>	
								<div class="single_discount_dsc">
									<h3>D.J</h3>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore.</p>
									<a href="tour-details.html" target="_blank">View details</a>
								</div>
							</div><!-- END SINGLE DISCOUNT -->
							<div class="single-discount">
								<div class="single-img">
									<img src="assets/img/discount/tenthouse.jpg" class="img-fluid" alt="" style="height:215px;"/>

								</div>	
								<div class="single_discount_dsc">
									<h3>Tent House</h3>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore.</p>
									<a href="tour-details.html" target="_blank">View details</a>
								</div>
							</div><!-- END SINGLE DISCOUNT -->
							<div class="single-discount">
								<div class="single-img">
									<img src="assets/img/discount/video.jpg" class="img-fluid" alt=""/>
																
								</div>	
								<div class="single_discount_dsc">
									<h3>Video Rcording</h3>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore.</p>
									<a href="tour-details.html" target="_blank">View details</a>
								</div>
							</div><!-- END SINGLE DISCOUNT -->	
						</div>	
					</div>												
				</div><!-- END ROW -->
			</div><!-- END CONTAINER -->
		</section>
		<!-- END DEALS & DISCOUNT -->
		
		<!-- START MAP -->
		
		<!-- END MAP -->
		
		<!-- START FOOTER -->
		<div class="footer">
			<div class="container">
				<div class="row">					
					<div class="col-xs-12 text-center">
						<div class="copyright">
							<p>Copyright &copy; 2018 |  All Rights Reserved.</p>
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
<?php


if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	
	$mobile=$_POST['mobile'];
	
	$date=$_POST['date'];
	
	$place=$_POST['person'];
	
	$ins="insert into contact(name,phone,date,place) values('$name','$mobile','$date','$place')";
	$run_user=mysqli_query($con,$ins);
	
	if($run_user)
	{
		echo "<script>alert('information has been sent successfully')</script>";
		echo "<script>alert('redirecting'); window.location.assign('index.php')</script>";
	}
	else
	{
		echo "<script>alert('something wrong while you filling data ')</script>";
	}
}


















?>