<!DOCTYPE html>

<html lang="en">

<head>

  <title>BHW - Bus Company </title>
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
   ?>
  <!-- END nav -->

  <div class="hero-wrap" style="background-image: url('images/bg.jpg');" data-stellar-background-ratio="0.4">
    <div class="overlay"></div>
    <div class="container">
      <form action="register.php" method="post" class="search-property-5">

        <div class="row no-gutters slider-text justify-content-start align-items-center">
          <div class="col-lg-5">

            <div class="d-flex justify-content-start">
              <div class="image-container">
                <img src="http://placehold.it/150x150" id="imgProfile" style="width: 250px; height: 250px"
                  class="img-thumbnail" />
                <div class="middle mt-4">
                  <input type="button" class="btn btn-secondary" id="btnChangePicture" value="Select Profile" />
                  <input type="file" style="display: none;" id="profilePicture" name="file" />
                  <input type="button" class="btn btn-primary d-none ml-3" id="btnDiscard" value="Discard Changes" />

                </div>
              </div>

            
            </div>

          </div>
          <div class="col-lg-7 col-md-4 ">

            <h2 class="text-white">Register Account</h2>
            <div class="form-row">
              <div class="col-6">
                <label for="" class="text-white">Name</label>
                <input type="text" class="form-control" placeholder="First name">
              </div>
              <div class="col-6">
                <label for="" class="text-white">Username</label>
                <input type="text" class="form-control" placeholder="Last name">
              </div>
              <div class="col-6 mt-3">
                <label for="" class="text-white">PhoneNumber</label>

                <input type="text" class="form-control" placeholder="First name">
              </div>
              <div class="col-6 mt-3"">
                  <label for=""class=" text-white">Email</label>
                <input type="text" class="form-control" placeholder="Last name">
              </div>
              <div class="col-6 mt-3"">
                  <label for=""class=" text-white">Nrc Number</label>
                <input type="text" class="form-control" placeholder="Last name">
              </div>

              <div class="col-6 mt-3">
                <label for="" class="text-white">Select Gender</label>
                <br>
                <div class="form-check form-check-inline mt-3 ml-3">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                    value="option1">
                  <label class="form-check-label text-white" for="inlineRadio1">Male</label>
                </div>
                <div class="form-check form-check-inline ml-5">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                    value="option2">
                  <label class="form-check-label text-white" for="inlineRadio2">Female</label>
                </div>
              </div>
              <div class="col-12 mt-3"">
                  <label for=""class=" text-white">Address</label>
                <textarea class="form-control" id="exampleFormControlTextarea4" rows="2"></textarea>
              </div>
            </div>
            <div class="form-group">
              <br>
              <input type="submit" value="Register" name="btnsave" class="btn btn-primary py-2 px-4 ">
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