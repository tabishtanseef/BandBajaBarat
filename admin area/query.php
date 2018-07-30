<?php
include("db.php");
session_start(); 
 
 $get = "SELECT * FROM contact";
 $run = mysqli_query($con,$get);
 $row = mysqli_fetch_array($run);
 if($row)
 {
  $_SESSION['id'] = $row['id'];
  $_SESSION['name'] = $row['name'];
  $_SESSION['phone'] = $row['phone'];
  $_SESSION['date'] = $row['date'];
  $_SESSION['city'] = $row['place'];
 }
 
?>





<!DOCTYPE HTML>
<html>
    <head>
    
    <title>WB | Wedding Boss</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
    
        <div class="well text-center" style="font-size:25px; color:#FF2F2F; font-weight:600;">
        
            <div class="row">
            
                <div class="col-sm-4"></div>
                 <div class="col-sm-4" style="background:#FF2F2F; color:white; border:4px solid gray; height:50px;"> Admin Panel</div>
                 <div class="col-sm-4"></div>
            
            </div><!-- end of row-->
        
        </div><!-- end of well-->
    
        <div class="container">
        
        
        <h2>Query Table</h2>
             
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>S.No</th>
        <th>Name</th>
        <th>Mobile</th>
        <th>Wedding Date</th>
        <th>Place</th>
        
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?php echo $_SESSION['id']; ?> </td>
        <td><?php echo $_SESSION['name']; ?> </td>
        <td><?php echo $_SESSION['phone']; ?> </td>
        <td><?php echo $_SESSION['date']; ?> </td>
        <td><?php echo $_SESSION['city']; ?> </td>
        
        
      </tr>
         
    </tbody>
  </table>
</div>

        
        </div>
        
        
    
    </body>
    
    
</html>