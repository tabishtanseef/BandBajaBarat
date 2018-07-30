<?php

       if(isset($_SESSION['id'])){
		if(isset($_GET['del_id'])){
			$del_id=$_GET['del_id'];
				echo "<script>alert('Your Request for delete is accepted. It will be deleted shortly!!');</script>";  
	      header('location:index.php');
		 }
	   }
?>