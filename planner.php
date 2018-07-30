<?php
include("db.php");
include("functions.php");

if (!isset($_SESSION['id'])) 
{	
header("location:index.php");
}
   $id = $_SESSION['id'];
   $prof = $_SESSION['profession'];
   $get = "SELECT * FROM wpackage WHERE user_id = '$id'";
   $run = mysqli_query($con,$get);
   

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
		<title>FZ - Tour & Travel Agency Template</title>			
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
			  <a class="navbar-brand" href="index.php"><img src="assets/img/logo.png" alt=""></a>          
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
		
		

		

		<!-- START WHY CHOOSE US -->	
		<section data-stellar-background-ratio="0.3" class="why_choose section-padding"  style="background-image: url(assets/img/bg/service-bg.jpg);  background-size:cover; background-position: center center;">			
			<div class="container">
				<br>
				<br>
				<br>
				<br>
				<br>
				<div class="row text-center">		
					<div class="col-sm-4 col-xs-12" data-aos="fade-up">
						<div class="single-choose">
							<i class="fa fa-star"></i>
							<a class="btn" data-toggle="modal" data-target=".email-checker">ADD PACKAGE</a>
						</div>
					</div><!-- END COL -->
					<div class="col-sm-4 col-xs-12" data-aos="fade-up">
						<div class="single-choose">
							<i class="fa fa-globe"></i>
							<a class="btn" data-toggle="modal" name="removepackage">REMOVE PACKAGE</a>
						</div>
					</div><!-- END COL -->
					<div class="col-sm-4 col-xs-12" data-aos="fade-up">
						<div class="single-choose">
							<i class="fa fa-globe"></i>
							<a class="btn" data-toggle="modal" name="orders">ORDERS</a>
						</div>
					</div><!-- END COL -->
						
				</div><!-- END ROW -->
			</div><!-- END CONTAINER -->			
		</section>
		<!-- END WHY CHOOSE US -->
		
		<div id="emailModal" class="modal fade email-checker" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                   <h4 class="modal-title" >Add Package</h4>
                </div>
                <div class="modal-body">
				
				
				<form action="home.php" method="post" enctype="multipart/form-data">
                    <input class="text-center" class="form-control"type="text" placeholder="Package Name" name="p_name" id="id_email"/><br><br>
                    
					<input class="text-center" type="text" placeholder="Package Price" name="p_price" id="id_email"/><br><br>
                    
					<input class="text-center" type="text" placeholder="City" name="p_city" id="id_email"/><br><br>
                    
					<input type="text" name="p_ser" placeholder="Enter your sevices"width="100px" height="50px"/><br><br>
					
					
					<label> Package Image</label> 
					<input type="file" name="pic">
                
				</div>
                <div class="modal-footer">
                    <input  id="btn_email" type="submit" class="btn btn-primary"  value="upload package" name="submit"/>
					                </div>
									</form>


            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
<br>             
  <?php 
	  if($run){
		  echo "<h2 style='padding:10px; background-color:#d0e0d3;'>Remove Old Packages</h2>";
	  }
	  else{
		  echo "<h2>Start Your Business By adding Packages</h2>";
	  }
	  
	  ?>       

			 <table class="table " style="margin-top:-100px;">
						<thead>
						<tr style="background-color:#e2edff;">
						<th>Package Name</th>
						<th>Price</th>
						<th>Service</th>
						<th>Remove Old Packages</th>
						</tr>
						</thead>
			  <?php 
			  
			  
	            while ( $row = mysqli_fetch_array($run))
			    { 
					$id = $row['pc_id'];
					$name = $row['pname'];
				    $price=$row['price'];
				    $city=$row['city'];
				    $service=$row['service'];
				    $pic = $row['img']; ?>
			    <div id = "remove" class="row">	
			        <div class='col-lg-12' data-aos='fade-up'>
						<div class='single_blog'>
						
						
						</tr>
					    <?php echo "
						<tr>
								<td><h4>$name</h4></td>
                                
                                <td><h4>$price</h4></td>
                                <td><h4>$service</h4></td>
							<td><center><p><a href='delete.php?del_id=$id' class='btn btn-primary btn-lg' style='color:white;'>Delete</a></p></center></td>
						</tr>";?>	
						
						</div>
					
					</div><!--- END COL -->
			    </div><!--- END ROW -->
			    <?php 
				}
				?></table>

		
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
	$pname=$_POST['p_name'];
	$pprice=$_POST['p_price'];
	$city=$_POST['p_city'];
	$text=$_POST['p_ser'];
$url = "profile/" ; //for compression

function compress_image($source_url, $destination_url, $quality) {

		$info = getimagesize($source_url);

    		if ($info['mime'] == 'image/jpeg')
        			$image = imagecreatefromjpeg($source_url);

    		elseif ($info['mime'] == 'image/gif')
        			$image = imagecreatefromgif($source_url);

   		elseif ($info['mime'] == 'image/png')
        			$image = imagecreatefrompng($source_url);

    		imagejpeg($image, $destination_url, $quality);
		return $destination_url;
	}	
//function ends here :) 
  $file = rand(1000,100000)."-".$_FILES['pic']['name'] ;
 $files = preg_replace('/\s+/', '_', $file);
	$temp_file = $_FILES['pic']['tmp_name'] ;
	$file_size = $_FILES['pic']['size'];
    $file_type = $_FILES['pic']['type'];
	$folder="udp/";
	$target_file = $folder.basename($_FILES["pic"]["name"]);
    $FileType = pathinfo($target_file,PATHINFO_EXTENSION);

	if($FileType != "jpg" && $FileType != "JPG" && $FileType != "png" && $FileType != "jpeg" && $FileType != "gif" )  
    {
     echo "<script>alert('it seems your image format is not supported by our system, we are sorry for trouble!!!');</script>"; 
}
 else
 {  $filename = compress_image($temp_file, $url.$files, 10); //for compression 
compress_image($temp_file, $folder.$files, 40); //for compression 
//move_uploaded_file($temp_file,$folder.$files);  
  	
	$ins="insert into wpackage(user_id,pname,price,city,service,img) values('$id','$pname','$pprice','$city','$text','$files')";
	$run_user=mysqli_query($con,$ins);
	if($run_user)
	{
		
		echo "<script>alert('your package added successfully')</script>";
		echo "<script>alert('redirecting'); window.location.assign('home.php)'</script>";
	}
	else
	{
		echo "<script>alert('something went wrong')";
	}
	
}
}
?>