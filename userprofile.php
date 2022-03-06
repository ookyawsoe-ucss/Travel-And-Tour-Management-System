<!DOCTYPE html>

<html lang="en">

<head>

  <title>Travel and Tour Management System | register </title>
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
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <link rel="stylesheet" href="css/flaticon.css">
  <link rel="stylesheet" href="css/icomoon.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="profile.css">
  <script src="./js/profile.js"></script>
</head>

<body>

  <?php
  include 'common/header.php';
  //  session_start();
  include 'Connection.php';

  $uid = $_SESSION['id'] ?? "";

            $select = "select * from customer WHERE id ='$uid'";
        
            $ret=mysqli_query($connect,$select);
            $row=mysqli_fetch_array($ret);
           
             
              $name = $row['name'];
              $username = $row['username'];
              $gender = $row['gender'];
              $email = $row['email'];
              $phone = $row['phone'];
              $nrc = $row['nrc_no'];
              $address = $row['address'];
              $password = $row['password'];
              $profile_image = $row['profile_image'];


              if (isset($_POST['btnregister'])) {

                $name = $_POST['txtname'];
                $username = $_POST['txtusername'];
                $phone = $_POST['txtphone'];
                $email = $_POST['txtemail'];
                $nrc = $_POST['txtnrc'];
                $pass = $_POST['txtpass'];
                $address = $_POST['txtaddress'];
                $image = $_FILES['txtprofile']['name'];
                $folder = "userProfile/";
                if ($image) {
                  $filename = $folder . "" . $image;
                  $copy = copy($_FILES['txtprofile']['tmp_name'], $filename);
                }
            
                $insert="update  customer 
              set name='$name' ,          
              username='$username' ,
              email='$email' ,
              address='$address' ,
              phone='$phone' ,
              nrc_no='$nrc' ,
              profile_image='$image' ,
              password='$pass' 
            
              where id='$uid'
              ";
               
                $ret = mysqli_query($connect, $insert);
            
                if ($ret) {
                  echo "<script>alert('Successful Added ');</script>";
                  //  echo"<script>window.location='buslist.php';</script>";
                } else {
                  echo mysqli_error($connect);
                }
              }

  ?>
  <!-- END nav -->

  <div class="hero-wrap" style="background-image: url('images/bg.jpg');" data-stellar-background-ratio="0.4">
    <div class="overlay"></div>
    <div class="container">
      <form action="userprofile.php" method="post" class="" enctype="multipart/form-data">

        <div class="row no-gutters slider-text justify-content-start align-items-center">
          <div class="col-lg-5 col-md-4 ">
            <div class="form-row">
              <div class="d-flex justify-content-start">
                <div class="image-container">
                  <img src="userProfile/<?php echo "$profile_image" ?>" id="imgProfile" style="width: 250px; height: 250px" class="img-thumbnail" />
                  <div class="middle mt-4">
                    <input type="button" class="btn btn-secondary" id="btnChangePicture" value="Select Profile" />

                    <input type="file" style="display: none;" id="profilePicture" name="txtprofile" />

                    <input type="button" class="btn btn-primary d-none ml-3" id="btnDiscard" value="Discard Changes" />

                  </div>
                </div>

              </div>
            </div>
          </div>
          <div class="col-lg-7 col-md-4 ">
           

             
             <?php
          echo "
          <h2 class='text-white'>Your Information</h2>
          <div class='form-row'>
            <div class='col-6'>
              <label for='' class='text-white'>Name</label>
              <input type='text' class='form-control' value='$name' name='txtname' required>
            </div>
            <div class='col-6'>
              <label for='' class='text-white'>Username</label>
              <input type='text' class='form-control' value='$username' name='txtusername'>
            </div>
            <div class='col-6 mt-3'>
              <label for='' class='text-white'>Phone Number</label>

              <input type='text' class='form-control' value='$phone' name='txtphone'>
            </div>
            <div class='col-6 mt-3''>
                <label for=''class=' text-white'>Email</label>
              <input type='email' class='form-control' value='$email' name='txtemail'>
            </div>
            <div class='col-6 mt-3''>
                <label for=''class=' text-white'>Nrc Number</label>
              <input type='text' class='form-control' value='$nrc' name='txtnrc'>
            </div>
            <div class='col-6 mt-3''>
                <label for=''class=' text-white'>Password</label>
              <input type='password' class='form-control' value='$password' name='txtpass'>
            </div>
            <div class='col-6 mt-3''>
                <label for=''class=' text-white'>Address</label>
              <input type='text' class='form-control' value='$address' name='txtaddress'>
            </div>
            <div class='col-6 mt-3'>
              
          </div>
          ";
         ?>
            <div class="form-group">
              <br>
              <input type="submit" value="Update" name="btnregister" class="btn btn-primary py-2 px-4 ">

            </div>
          </div>
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