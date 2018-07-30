<?php
include("db.php");
session_start(); 
if(isset($_SESSION['id'])){
header("location:services.php");	
}
 if(isset($_POST['login']))
{
	
 $email = $_POST['email'];
 $pass = $_POST['password'];
 $get = "SELECT * FROM user WHERE email ='$email' AND pass ='$pass'";
 $run = mysqli_query($con,$get);
 $row = mysqli_fetch_array($run);
 if($row)
 {
  $_SESSION['id'] = $row['user_id'];
  $_SESSION['name'] = $row['name'];
  $_SESSION['email'] = $row['email'];
  $_SESSION['mob'] = $row['mob'];
  $_SESSION['city'] = $row['city'];
  $_SESSION['user'] = 'Buyer';
  header("Location: index.php");
 }
 else
 {
    echo  "<script>alert('wrong details');</script>";      
 }
}
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
			  <a class="navbar-brand" href="index.php"><img height="50px" width="50px"src="assets/img/logo.png" alt=""></a>          
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

		<!-- START HOME -->
		<section id="home" class="home_parallax ripple" style="background-color:black ; height:70px; background-size:cover; background-position: center center;">			
			<div class="container">
				<div class="row">
				  <div class="col-md-12 text-center">
					<div class="hero-text">
						
						<!--<h2 style="color:white;"> We Know its your WEDDING <br />Making it Grand is our JOB</h2>
						<a href="#contact" class="btn btn-default btn-home-bg">Start Booking Your Wedding</a>	-->					
					</div>
				  </div><!--- END COL -->			  
				</div><!--- END ROW -->
			</div><!--- END CONTAINER -->
		</section>
		<!-- END  HOME DESIGN -->
	

		
		
		<!-- START CONTACT FORM-->
		<section id="contact" class="contact_area">
			<div class="container">
				<div class="row">		
					<div class="col-lg-6 col-sm-12 " data-aos="fade-up">
						<div class="contact">
						<h3>Login Your Account</h3>
							<form action="signup.php"  method="post" enctype="multipart/form-data">
								<div class="row">
									<div class="form-group col-md-12">
										<input type="email" name="email" class="form-control" id="first-email" placeholder="Email" required="required">
									</div>
									<div class="form-group col-md-12">
										<input type="password" name="password" class="form-control" id="password" placeholder="Password" required="required">
									</div>
									<div class="col-md-12">
										<input type="submit" value="Log In" name="login"  class="btn btn-lg btn-contact-bg" title="Submit Your Message!" />
									</div>
								</div>
							</form>
						</div>
					</div><!-- END COL -->						
					<div class="col-lg-6 col-sm-12 col-xs-12 no-padding" data-aos="fade-up">
						<div class="contact">
						<h3>Create New Account</h3>
							<form action="signup.php"  method="post" enctype="multipart/form-data">
								<div class="row">
									<div class="form-group col-md-12">
										<input type="text" name="name" class="form-control" id="first-name" placeholder="Name" required="required">
									</div>
									<div class="form-group col-md-12">
										<input type="email" name="email" class="form-control" id="first-email" placeholder="Email" required="required">
									</div>
									<div class="form-group col-md-12">
										<input type="text" name="city" class="form-control" id="city" placeholder="City" required="required">
									</div>
									<div class="form-group col-md-12">
										<input type="text" name="mob" class="form-control" id="mob" placeholder="Mobile No." required="required">
									</div>
									<div class="form-group col-md-12">
										<input type="password" name="password" class="form-control" id="password" placeholder="Password" required="required">
									</div>
									<div class="col-md-12">
										
											<input type="submit" value="Sign Up" name="submit"  class="btn btn-lg btn-contact-bg" title="Submit Your Message!" />
										
									</div>
								</div>
							</form>
						</div>
					</div><!-- END COL -->
				</div><!--- END ROW -->				
			</div><!--- END CONTAINER -->	
		</section>
		<!-- END CONTACT FORM -->	
		
		
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
		<!-- switcher js -->
			<script src="assets/js/switcher.js"></script>					
		<!-- scrolltopcontrol js -->
			<script src="assets/js/scrolltopcontrol.js"></script>									
		<!-- form-contact js -->
			<script src="assets/js/form-contact.js"></script>	
		<!-- aos js -->
			<script src="assets/js/aos.js"></script>
		<!-- ripples js -->	
		<!--	<script src="assets/js/ripples-min.js"></script>	-->		
		<!-- map js -->
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwIQh7LGryQdDDi-A603lR8NqiF3R_ycA"></script>				
		<!-- scripts js -->
			<script src="assets/js/scripts.js"></script>
    </body>
</html>


<?php

if(isset($_POST['submit']))
{ 	
 $name = $_POST['name'];
 $email = $_POST['email'];
 $city = $_POST['city'];
 $mob = $_POST['mob'];
 $g = "SELECT email  FROM user WHERE  email ='$email'";
 $r = mysqli_query($con,$g);
 $ch = mysqli_fetch_array($r);
if (strlen($ch['email']) != 0)
     {
	   echo "<script>alert('This email id is already registered...!!!');</script>"; 
}
else {
    $pass = $_POST['password'];
} 
 $insert_user = "INSERT INTO user (name,email,pass,city,mob) VALUES('$name','$email','$pass','$city','$mob')";
 $run_user = mysqli_query($con, $insert_user);
		
if($run_user)
 {
	  echo "<script>alert('successfully registered!!');</script>";  
	  echo "<script> alert('Please Log In to Continue'); window.location.assign('signup.php'); </script>"; 
 }
else
 {
       echo "<script>alert('error while registering you...');</script>";
 }

}

?>
