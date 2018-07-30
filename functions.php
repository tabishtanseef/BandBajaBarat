<?php

$db = mysqli_connect("localhost","root","","weddingboss");

function getIp(){
	$ip =$_SERVER['REMOTE_ADDR'];
	
	if(!empty($_SERVER['HTTP_CLIENT_IP'])){
		$ip=$_SERVER['HTTP_CLIENT_IP'];
	}
	elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
		$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
	}
	return $ip;
}


session_start();
function total_items(){
	if(isset($_SESSION['id'])){
	if(isset($_GET['add_cart']))
	   {
		//echo "<script>alert('koops $ip $pro_id $id!!');</script>"; 
		$id = $_SESSION['id'];
		global $db;
		$ip = getIp();
		$get_items = "select * from cart where user_id='$id' AND ip_add='$ip'";
		$run_items = mysqli_query($db,$get_items);
		$count_items =mysqli_num_rows($run_items);
	 	
	   }
	else
	   {
		$id = $_SESSION['id'];
		//echo "<script>alert('oops');</script>"; 
		global $db;
		$ip = getIp();
		$get_items = "select * from cart where user_id='$id' AND ip_add='$ip'";
		$run_items = mysqli_query($db,$get_items);
		$count_items =mysqli_num_rows($run_items);	
		}
	echo $count_items;
	
     	}
		
		
}

 
function cart()
{     
     $id =$_SESSION['id']; 
	if(isset($_SESSION['id'])){
		if(isset($_GET['add_cart'])){
			global $db;
			$ip= getIp();
			$pro_id=$_GET['add_cart'];
				$insert_pro="insert into cart (user_id,ip_add,p_id) values ('$id','$ip','$pro_id')";
				$run_pro = mysqli_query($db,$insert_pro);
				if($run_pro){
					echo "<script>alert('Added to cart Successfully!!');</script>";  
				}
				else{
					echo "<script>alert('oops $ip $pro_id $id!!');</script>";  
				}
				
	     }
	}
}
function getPackages(){
	global $db;
	$sel="SELECT * FROM wpackage where profession='Planner'";

    $run=mysqli_query($db,$sel);
	while ($row=mysqli_fetch_array($run))
			    { 
			            
							$p_id = $row['pc_id'];
							$name=$row['pname'];
							$price=$row['price'];
							$city=$row['city'];
							$service=$row['service'];
							$img=$row['img'];
						
				echo "
				    <div id='single_product'>
				    <h3 style=' text-decoration:none;'>$name</h3></br>
				    <img src='profile/$img' width='205px' height='205px'/></br>
				    <p><b>Price: Rs. $price </b></p><br>
					<p style='float:left; color: red;'>$city</p><br>
					<p><b>$service </b></p><br>
				    <a href='wp.php?add_cart=$p_id'><button style='float:right; text-decoration:none color: green;'>Add to Cart</a>
				    </div>
					";
				
				/*echo "<div class='row'>	
					<div class='col-lg-6' data-aos='fade-up'>
						<div class='single_blog'>
							<div class='blog-text wow fadeInLeft'>
								<h4>$name</h4>
                                <h5> City: $city</h5>
                                <h5>Price: &#8377; $price </h5>
                                <p>$service</p>
                                <center><p><a href='wp.php?add_cart=$p_id' class='btn btn-primary btn-lg' style='color:white;'><i class='fa fa-shopping-cart'></i> Add To Cart</a></p></center>
							</div>
							<img class='blog-photo' width='420' height='350'  src='profile/$img'/>
						</div>
					</div><!--- END COL -->	
				</div>"; */
				} 
}


function getCart(){ 
	global $db;
	$id = $_SESSION['id'];
	$sel="SELECT * FROM cart where user_id='$id'";
	$run=mysqli_query($db,$sel);
	while ($row=mysqli_fetch_array($run))
			    {           
							$p_id = $row['p_id'];  
							$gel  = "SELECT * FROM wpackage where pc_id='p_id'";
							$fun  = mysqli_query($db,$gel);  
							$fow  = mysqli_fetch_array($fun);  
							$name = $fow['0'];
							$price = $fow['1'];
							$city = $fow['2'];
							$service=$fow['3'];
							$img = $fow['4'];
							echo "<div class='row'>	
									<div class='col-lg-6' data-aos='fade-up'>
										<div class='single_blog'>
											<div class='blog-text wow fadeInLeft'>
												<h4>$name</h4>
												<h5> City: $city</h5>
												<h5>Price: &#8377; $price </h5>
												<p>$service</p>
												<center><p><a href='delete.php?del_id=$p_id' class='btn btn-primary btn-lg' style='color:white;'><i class='fa fa-shopping-cart'></i> Remove</a></p></center>
											</div>
											<img class='blog-photo' width='420' height='350'  src='profile/$img'/>
										</div>
									</div>	
								</div>"; 	
				} 
}




function total_price(){
	
	$total=0;
	$id = $_SESSION['id'];
	global $db;
	$ip = getIp();
	$sel_price = "select * from cart where user_id='$id' AND ip_add='$ip'";
	
	$run_price = mysqli_query($db,$sel_price);
	while($p_price=mysqli_fetch_array($run_price)){
		$pro_id=$p_price['p_id'];
		$pro_price= "select * from products where product_id='$pro_id'";
		$run_pro_price = mysqli_query($db,$pro_price);
		while($pp_price = mysqli_fetch_array($run_pro_price)){
			
			$product_cost = array($pp_price['product_cost']);
			$values = array_sum($product_cost);
			
			$total+=$values;
		}
	}
	echo "Rs.".$total;
}






function getPro()

{
	global $db;

	    if(!isset($_GET['cat'])){
	
               if(!isset($_GET['price'])){
				   
				   
				$get_products="select * from products order by rand() LIMIT 0,6";
				$run_products= mysqli_query($db, $get_products);
				 
				while($row_products=mysqli_fetch_array($run_products))
				{
					$pro_id = $row_products['product_id'];
					$pro_title = $row_products['product_title'];
					$pro_cat = $row_products['cat_id'];
					$pro_price = $row_products['price_id'];
					$pro_desc = $row_products['product_desc'];
					$pro_cost = $row_products['product_cost'];
					$pro_image = $row_products['product_img1'];
					
					
				    echo "
				    <div id='single_product'>
				       <h3 style='color:white; text-decoration:none;'>$pro_title</h3></br>
				    <img src='admin_area/product_images/$pro_image' width='205px' height='205px'/></br>
				    <p><b style='color:white;'>Price: Rs. $pro_cost </b></p><br>
					
					
					<a href=details.php?pro_id=$pro_id style='float:left; color: red;'>Details</a>
				    
					<a href=index.php?add_cart=$pro_id><button style='float:right; text-decoration:none color: green;'>Add to Cart</a>
				
					
					</div>
					";
				   
				}
				
				
			
			
			}	
		}	

	}
	
function getCatPro()

{
	global $db;

	    if(isset($_GET['cat'])){
	
              
				$cat_id= $_GET['cat'];  
				   
				$get_cat_pro="select * from products where cat_id='$cat_id' order by rand()";
				$run_cat_pro= mysqli_query($db, $get_cat_pro);
				 
				 $count = mysqli_num_rows($run_cat_pro);
				 if($count==0){
					echo "<h1>No Products found in this category!</h1>" ;
				 }
				 
				 
				while($row_cat_pro=mysqli_fetch_array($run_cat_pro))
				{
					$pro_id = $row_cat_pro['product_id'];
					$pro_title = $row_cat_pro['product_title'];
					$pro_cat = $row_cat_pro['cat_id'];
					$pro_price = $row_cat_pro['price_id'];
					$pro_desc = $row_cat_pro['product_desc'];
					$pro_cost = $row_cat_pro['product_cost'];
					$pro_image = $row_cat_pro['product_img1'];
					
					
				    echo "
				    <div id='single_product'>
				       <h3 style='color:white; text-decoration:none;'>$pro_title</h3></br>
				    <img src='admin_area/product_images/$pro_image' width='205px' height='205px'/></br>
				    <p><b style='color:white;'>Price: Rs. $pro_cost </b></p><br>
					
					
					<a href=details.php?pro_id=$pro_id style='float:left; color: red;'>Details</a>
				    
					<a href=index.php?add_cart=$pro_id><button style='float:right; text-decoration:none color: green;'>Add to Cart</a>
				
					
					</div>
					";
				   
				}
				
				
			
			
				
		}	
	
	}	
	
	function getPricePro()

{
	global $db;

	    if(isset($_GET['price'])){
	
              
				$price_id= $_GET['price'];  
				   
				$get_price_pro="select * from products where price_id='$price_id' order by rand()";
				$run_price_pro= mysqli_query($db, $get_price_pro);
				 
				 $count = mysqli_num_rows($run_price_pro);
				 if($count==0){
					echo "<h1>No Products found in this Price category!</h1>" ;
				 }
				 
				 
				while($row_price_pro=mysqli_fetch_array($run_price_pro))
				{
					$pro_id = $row_price_pro['product_id'];
					$pro_title = $row_price_pro['product_title'];
					$pro_cat = $row_price_pro['cat_id'];
					$pro_price = $row_price_pro['price_id'];
					$pro_desc = $row_price_pro['product_desc'];
					$pro_cost = $row_price_pro['product_cost'];
					$pro_image = $row_price_pro['product_img1'];
					
					
				    echo "
				    <div id='single_product'>
				       <h3 style='color:white; text-decoration:none;'>$pro_title</h3></br>
				    <img src='admin_area/product_images/$pro_image' width='205px' height='205px'/></br>
				    <p><b style='color:white;'>Price: Rs. $pro_cost </b></p><br>
					
					
					<a href=details.php?pro_id=$pro_id style='float:left; color: red;'>Details</a>
				    
					<a href=index.php?add_cart=$pro_id><button style='float:right; text-decoration:none; color: green;'>Add to Cart</a>
				
					
					</div>
					";
				   
				}
				
				
			
			
				
		}	
	
	}
	
	
function getCats(){
	
			  global $db; 
			   $get_cats = "select * from categories";
			   $run_cats = mysqli_query($db, $get_cats);
			   while($row_cats = mysqli_fetch_array($run_cats))
			   {   
			   $cat_id= $row_cats['cat_id']; 
			   $cat_title=$row_cats['cat_title'];
			   echo " <li></br></br><a href='index.php?cat=$cat_id' style='font-size: 20px';>$cat_title</a></li>";
			   
			   }
			   
}

function getPrice(){
	
			   global $db;
			   $get_price = "select * from price";
			   $run_price = mysqli_query($db, $get_price);
			   while($row_price = mysqli_fetch_array($run_price))
			   {   
			   $price_id= $row_price['price_id']; 
			   $price_title=$row_price['price_title'];
			   echo " <li></br></br><a href='index.php?price=$price_id'>$price_title</a></li>";
			   
			   }
			   
}

function getCars(){
	global $db;
	$sel="SELECT * FROM wpackage where profession='Cars'";

    $run=mysqli_query($db,$sel);
	while ($row=mysqli_fetch_array($run))
			    { 
			            
							$p_id = $row['pc_id'];
							$name=$row['pname'];
							$price=$row['price'];
							$city=$row['city'];
							$service=$row['service'];
							$img=$row['img'];
				
				echo "
				    <div id='single_product'>
				    <h3 style=' text-decoration:none;'>$name</h3></br>
				    <img src='profile/$img' width='205px' height='205px'/></br>
				    <p><b>Price: Rs. $price </b></p><br>
					<p style='float:left; color: red;'>$city</p><br>
					<p><b>$service </b></p><br>
				    <a href='cb.php?add_cart=$p_id'><button style='float:right; text-decoration:none color: green;'>Add to Cart</a>
				    </div>
					";				

				
				/*echo "<div class='row'>	
					<div class='col-lg-6' data-aos='fade-up'>
						<div class='single_blog'>
							<div class='blog-text wow fadeInLeft'>
								<h4>$name</h4>
                                <h5> City: $city</h5>
                                <h5>Price: &#8377; $price </h5>
                                <p>$service</p>
                                <center><p><a href='cb.php?add_cart=$p_id' class='btn btn-primary btn-lg' style='color:white;'><i class='fa fa-shopping-cart'></i> Add To Cart</a></p></center>
							</div>
							<img class='blog-photo' width='420' height='350'  src='profile/$img'/>
						</div>
					</div><!--- END COL -->	
				</div>"; */
				} 
}

function getHall(){
	global $db;
	$sel="SELECT * FROM wpackage where profession='Hall'";

    $run=mysqli_query($db,$sel);
	while ($row=mysqli_fetch_array($run))
			    { 
			            
							$p_id = $row['pc_id'];
							$name=$row['pname'];
							$price=$row['price'];
							$city=$row['city'];
							$service=$row['service'];
							$img=$row['img'];
				echo "
				    <div id='single_product'>
				    <h3 style=' text-decoration:none;'>$name</h3></br>
				    <img src='profile/$img' width='205px' height='205px'/></br>
				    <p><b>Price: Rs. $price </b></p><br>
					<p style='float:left; color: red;'>$city</p><br>
					<p><b>$service </b></p><br>
				    <a href='fb.php?add_cart=$p_id'><button style='float:right; text-decoration:none color: green;'>Add to Cart</a>
				    </div>
					";		

				
				/*echo "<div class='row'>	
					<div class='col-lg-6' data-aos='fade-up'>
						<div class='single_blog'>
							<div class='blog-text wow fadeInLeft'>
								<h4>$name</h4>
                                <h5> City: $city</h5>
                                <h5>Price: &#8377; $price </h5>
                                <p>$service</p>
                                <center><p><a href='fb.php?add_cart=$p_id' class='btn btn-primary btn-lg' style='color:white;'><i class='fa fa-shopping-cart'></i> Add To Cart</a></p></center>
							</div>
							<img class='blog-photo' width='420' height='350'  src='profile/$img'/>
						</div>
					</div><!--- END COL -->	
				</div>"; */
				} 
}

function getTent(){
	global $db;
	$sel="SELECT * FROM wpackage where profession='Tent'";

    $run=mysqli_query($db,$sel);
	while ($row=mysqli_fetch_array($run))
			    { 
			            
							$p_id = $row['pc_id'];
							$name=$row['pname'];
							$price=$row['price'];
							$city=$row['city'];
							$service=$row['service'];
							$img=$row['img'];
				echo "
				    <div id='single_product'>
				    <h3 style=' text-decoration:none;'>$name</h3></br>
				    <img src='profile/$img' width='205px' height='205px'/></br>
				    <p><b>Price: Rs. $price </b></p><br>
					<p style='float:left; color: red;'>$city</p><br>
					<p><b>$service </b></p><br>
				    <a href='tb.php?add_cart=$p_id'><button style='float:right; text-decoration:none color: green;'>Add to Cart</a>
				    </div>
					";		

				
				/*echo "<div class='row'>	
					<div class='col-lg-6' data-aos='fade-up'>
						<div class='single_blog'>
							<div class='blog-text wow fadeInLeft'>
								<h4>$name</h4>
                                <h5> City: $city</h5>
                                <h5>Price: &#8377; $price </h5>
                                <p>$service</p>
                                <center><p><a href='tb.php?add_cart=$p_id' class='btn btn-primary btn-lg' style='color:white;'><i class='fa fa-shopping-cart'></i> Add To Cart</a></p></center>
							</div>
							<img class='blog-photo' width='420' height='350'  src='profile/$img'/>
						</div>
					</div><!--- END COL -->	
				</div>"; */
				} 
}

function getSound(){
	global $db;
	$sel="SELECT * FROM wpackage where profession='Sound'";

    $run=mysqli_query($db,$sel);
	while ($row=mysqli_fetch_array($run))
			    { 
			            
							$p_id = $row['pc_id'];
							$name=$row['pname'];
							$price=$row['price'];
							$city=$row['city'];
							$service=$row['service'];
							$img=$row['img'];
				echo "
				    <div id='single_product'>
				    <h3 style=' text-decoration:none;'>$name</h3></br>
				    <img src='profile/$img' width='205px' height='205px'/></br>
				    <p><b>Price: Rs. $price </b></p><br>
					<p style='float:left; color: red;'>$city</p><br>
					<p><b>$service </b></p><br>
				    <a href='ms.php?add_cart=$p_id'><button style='float:right; text-decoration:none color: green;'>Add to Cart</a>
				    </div>
					";		

				
				/*echo "<div class='row'>	
					<div class='col-lg-6' data-aos='fade-up'>
						<div class='single_blog'>
							<div class='blog-text wow fadeInLeft'>
								<h4>$name</h4>
                                <h5> City: $city</h5>
                                <h5>Price: &#8377; $price </h5>
                                <p>$service</p>
                                <center><p><a href='ms.php?add_cart=$p_id' class='btn btn-primary btn-lg' style='color:white;'><i class='fa fa-shopping-cart'></i> Add To Cart</a></p></center>
							</div>
							<img class='blog-photo' width='420' height='350'  src='profile/$img'/>
						</div>
					</div><!--- END COL -->	
				</div>"; */
				} 
}
function getPhoto(){
	global $db;
	 $sel = "SELECT * FROM wpackage where profession='Photo'";

    $run=mysqli_query($db,$sel);
	while ($row=mysqli_fetch_array($run))
			    { 
			            
							$p_id = $row['pc_id'];
							$name=$row['pname'];
							$price=$row['price'];
							$city=$row['city'];
							$service=$row['service'];
							$img=$row['img'];
				echo "
				    <div id='single_product'>
				    <h3 style=' text-decoration:none;'>$name</h3></br>
				    <img src='profile/$img' width='205px' height='205px'/></br>
				    <p><b>Price: Rs. $price </b></p><br>
					<p style='float:left; color: red;'>$city</p><br>
					<p><b>$service </b></p><br>
				    <a href='vp.php?add_cart=$p_id'><button style='float:right; text-decoration:none color: green;'>Add to Cart</a>
				    </div>
					";		

				
				/*echo "<div class='row'>	
					<div class='col-lg-6' data-aos='fade-up'>
						<div class='single_blog'>
							<div class='blog-text wow fadeInLeft'>
								<h4>$name</h4>
                                <h5> City: $city</h5>
                                <h5>Price: &#8377; $price </h5>
                                <p>$service</p>
                                <center><p><a href='vp.php?add_cart=$p_id' class='btn btn-primary btn-lg' style='color:white;'><i class='fa fa-shopping-cart'></i> Add To Cart</a></p></center>
							</div>
							<img class='blog-photo' width='420' height='350'  src='profile/$img'/>
						</div>
					</div><!--- END COL -->	
				</div>"; */
				} 
}


?>