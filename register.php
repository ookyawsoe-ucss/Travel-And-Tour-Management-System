<!DOCTYPE html>

<html lang="en">
 
<head>

  <title>Travel and Tour Management System | register </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap"
    rel="stylesheet">

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

if (isset($_POST['btnregister']))
{

  $name=$_POST['txtname'];  
  $username=$_POST['txtusername'];  
  $phone=$_POST['txtphone'];  
  $email=$_POST['txtemail'];  
  $nrc=$_POST['txtnrc'];  
  $pass=$_POST['txtpass'];  
  $address=$_POST['txtaddress']; 
  $gender = $_POST['gender'];
  $image=$_FILES['txtprofile']['name'];
   $folder="userProfile/";
   if($image)
   {
    $filename=$folder."".$image;
    $copy=copy($_FILES['txtprofile']['tmp_name'],$filename);
   }
   

  $insert="insert into customer (name,username,email,address,gender,phone,nrc_no,profile_image,password) values ('$name','$username','$email','$address','$gender','$phone','$nrc','$image','$pass')";
  $ret=mysqli_query($connect,$insert);

  if($ret)
  {
    echo"<script>alert('Successful Added ');</script>";
    //  echo"<script>window.location='buslist.php';</script>";
  }
  else
  {
    echo mysqli_error($connect);
  }
}

   ?>
  <!-- END nav -->

  <div class="hero-wrap" style="background-image: url('images/bg.jpg');" data-stellar-background-ratio="0.4">
    <div class="overlay"></div>
    <div class="container">
      <form action="register.php" method="post" class="search-property-5"  enctype="multipart/form-data">

        <div class="row no-gutters slider-text justify-content-start align-items-center">
          <div class="col-lg-5 col-md-4 ">
          <div class="form-row">
            <div class="d-flex justify-content-start">
              <div class="image-container">
                <img src="http://placehold.it/150x150" id="imgProfile" style="width: 250px; height: 250px"
                  class="img-thumbnail" />
                <div class="middle mt-4">
                  <input type="button" class="btn btn-secondary" id="btnChangePicture" value="Select Profile"  />

                  <input type="file" style="display: none;" id="profilePicture"  name="txtprofile" required/ >

                  <input type="button" class="btn btn-primary d-none ml-3" id="btnDiscard" value="Discard Changes" />

                </div>
              </div>
            
            </div>
          </div>
          </div>
          <div class="col-lg-7 col-md-4 ">

            <h2 class="text-white">Register Account</h2>
            <div class="form-row">
              <div class="col-6">
                <label for="" class="text-white">Name</label>
                <input type="text" class="form-control" placeholder="Enter name"name="txtname" required>
              </div>
              <div class="col-6">
                <label for="" class="text-white">Username</label>
                <input type="text" class="form-control" placeholder="Enter  Username"name="txtusername">
              </div>
              <div class="col-6 mt-3">
                <label for="" class="text-white">PhoneNumber</label>

                <input type="text" class="form-control" placeholder="Enter Phonenumber"name="txtphone">
              </div>
              <div class="col-6 mt-3"">
                  <label for=""class=" text-white">Email</label>
                <input type="email" class="form-control" placeholder="Enter Email"name="txtemail">
              </div>
              <div class="col-6 mt-3"">
                  <label for=""class=" text-white">Nrc Number</label>
                <input type="text" class="form-control" placeholder="Enter Nrcnumber"name="txtnrc">
              </div>
              <div class="col-6 mt-3"">
                  <label for=""class=" text-white">Password</label>
                <input type="password" class="form-control" placeholder="Last name"name="txtpass">
              </div>
              <div class="col-6 mt-3"">
                  <label for=""class=" text-white">Address</label>
                  <input type="text" class="form-control" placeholder="Last name"name="txtaddress">
              </div>
              <div class="col-6 mt-3">
                <label for="" class="text-white">Select Gender</label>
                <br>

                <div class="form-check form-check-inline mt-3 ml-3">
                  <input class="form-check-input" type="radio" name="gender" id="inlineRadio1"
                    value="Male" checked>
                  <label class="form-check-label text-white" for="inlineRadio1">Male</label>
                </div>

                <div class="form-check form-check-inline ml-5">
                  <input class="form-check-input" type="radio" name="gender" id="inlineRadio2"
                    value="Female">
                  <label class="form-check-label text-white" for="inlineRadio2">Female</label>
                </div>
              </div>
             
            </div>
            <div class="form-group">
              <br>
              <input type="submit" value="Register" name="btnregister" class="btn btn-primary py-2 px-4 ">
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