<!DOCTYPE html>

<html lang="en">
  <head>

    <title>BHW - Bus Company </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    
  <?php
   include 'common/header.php';
   session_start();
   include 'Connection.php'; 

   if(isset($_POST['btnsave']))
{
  $name=$_POST['txtname'];
  $password=$_POST['txtpassword'];
  $insert=
  "SELECT * from admin
  where email='$name'and password='$password'
   ";
  $ret=mysqli_query($connect,$insert);
  $count=mysqli_num_rows($ret);
  if($count)
  {
          $file = mysqli_fetch_assoc($ret);
          $_SESSION['id']=$file['id'];
          $_SESSION['name']=$file['name'];

            echo"<script>alert(' Login Success');
            window.location='admin/index.php';</script>"; 
   
  }
    
      else 
       {
          $insert1="SELECT * from customer where email='$name' and password='$password'";
         $ret1=mysqli_query($connect,$insert1);
         $count1=mysqli_num_rows($ret1);
              
        if ($count1)
              {
                   $row=mysqli_fetch_array($ret1);
                  // $customerid=$row['customerid'];
                  // $SESSION['CUID11']=$customerid;
                   $UserName=$row['email'];
                     $uid=$row['id'];
                    echo"<script>alert('Customer Login Success, Welcome $UserName');window.location='admin/index.php?id=$uid';</script>";
              }
            else 
            {
                    echo"<script>alert('Login Fail');window.location='login.php';</script>";
            }
        }
  
  }
   ?>

   
    <!-- END nav -->
    
    <div class="hero-wrap" style="background-image: url('images/bg.jpg');" data-stellar-background-ratio="0.4">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text justify-content-start align-items-center">
          <div class="col-lg-6 col-md-6 ftco-animate d-flex align-items-end">
          	<div class="text">

	           
            </div>
          </div>
          <div class="col-lg-1 col"></div>
          <div class="col-lg-5 col-md-4 ">
          	<form action="login.php"  method="post" class="search-property-5">
             
          		<h2 class="text-white">Login Your Account</h2>
              <br>

	    				<div class="form-group">
	    					<label for="" class="mb-4" style="font-size: 30px;"class="label"> <h4 class="text-white">Email</h4></label>
	    					<input type="email" placeholder="Enter User Email" class="form-control" name="txtname" required="" >
	    				</div>
              <br>
	    				<div class="form-group">
	    					<label for="" class="mb-4" style="font-size: 30px;" class="label"><h4 class="text-white"> Password</h4></label>
	    					<input type="password" placeholder="Enter Password" class="form-control" name="txtpassword" required="">
	    				</div>
	    				
	            <div class="form-group" >

	              <input  type="submit" value="Login" name="btnsave" class="btn btn-primary py-2 px-4 ">
	            </div>
                <p>If you don't have account <a href="register.php" style="color:dodgerblue">Register</a> here !</p>
	    			</form>

          </div>

        </div>
      </div>

    </div>

    
    

   

  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>