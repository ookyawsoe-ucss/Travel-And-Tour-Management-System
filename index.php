<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Travel and Tour Management System</title>
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
    <style>
      /* .warpp .img {
    width: 300px;
    height: 300px; !important
    position: absolute;
    margin: 0 auto;
    -moz-border-radius: 50%;
    -ms-border-radius: 50%;
} */
    </style>
  </head>
  <body>
    
  <?php
   include 'common/header.php';
   ?>
   
    
    <div class="hero-wrap" style="background-image: url('images/bg.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text justify-content-start align-items-center">
          <div class="col-lg-6 col-md-6 ftco-animate d-flex align-items-end">
          	<div class="text ">
	            <h1 class="mb-3">Life is a Journey <span>Make The Best It</span> <span>Travelling Around The World With Us</span></h1>

	    
            </div>
          </div>
        
        </div>
      </div>
    </div>

   

    <section class="ftco-section" id="packages">
    	<div class="container-fluid px-4">
    		<div class="row justify-content-center">
          <div class="col-md-12 heading-section text-center ftco-animate mb-5">
            <h2 class="mb-2" >Our Packages</h2>
          </div>
        </div>
       
    		<div class="row">
        <?php
         include "Connection.php";
         $select = "select * from package";
         $ret = mysqli_query($connect, $select);
         $count = mysqli_num_rows($ret);
 
         for ($i = 0; $i < $count; $i++) {
             $row = mysqli_fetch_array($ret);
             $id = $row['id'];
             $pname = $row['p_name'];
             $image = $row['package_image'];


             
        echo"
    			<div class='col-md-3'>
    				<div class='car-wrap ftco-animate'>
    					<div class='img d-flex align-items-end' style='background-image: url(packageImage/$image);'>
    		
    					</div>
    					<div class='text p-4 text-center'>
    						<h2 class='mb-0'><a href='#'>$pname</a></h2>
    						<span>''</span>
    						<p class='d-flex mb-0 d-block'><a href='#' class='btn btn-black btn-outline-black mr-1'>Book now</a> <a href='#' class='btn btn-black btn-outline-black ml-1'>Details</a></p>
    					</div>
    				</div>
    			</div>
          ";
         }
    		?>
    		</div>
    	</div>
    </section>

 
    <section class="ftco-section testimony-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2 class="mb-3">Hotels</h2>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
              <div class="item">
                <div class="warpp text-center py-4 pb-5">
                  <div class="img mb-4" style="background-image: url(images/hotel1.jpg)">
                  
                  </div>
                  <div class="text pt-4">
                    <p class="mb-4">Shwe Yee Pwint Hotel</p>
                    <p class="name">Bagan, Myanmar</p>
                    <a href="https://www.hotels.com/ho654100896/?q-check-in=2022-02-17&q-check-out=2022-02-18&q-rooms=1&q-room-0-adults=2&q-room-0-children=0&sort-order=BEST_SELLER&WOD=4&WOE=5&JHR=1&FPQ=2&MGT=1&ZSX=0&SYE=3&YGF=2" target="_blank"  class="btn btn-info">View Details</a>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="warpp text-center py-4 pb-5">
                  <div class="img mb-4" style="background-image: url(images/hotel2.jpg)">
                  </div>
                  <div class="text pt-4">
                    <p class="mb-4">Novotel Inle Lake Myat Min</p>
                    <p class="name">Nyaungshwe, Myanmar</p>
                    <a href="https://www.hotels.com/ho477172/?q-check-in=2022-02-17&q-check-out=2022-02-18&q-rooms=1&q-room-0-adults=2&q-room-0-children=0&f-hotel-id=492964&sort-order=BEST_SELLER&WOD=4&WOE=5&JHR=1&FPQ=2&MGT=1&ZSX=0&SYE=3&YGF=2" target="_blank"  class="btn btn-info">View Details</a>

                  </div>
                </div>
              </div>
              <div class="item">
                <div class="warpp text-center py-4 pb-5">
                  <div class="img mb-4" style="background-image: url(images/hotel3.jpg)">
                  </div>
                  <div class="text pt-4">
                    <p class="mb-4">Bayview The Beach Resort</p>
                    <p class="name">Ngapali, Myanmar</p>
                    <a href="https://www.hotels.com/ho508626/?q-check-in=2022-02-17&q-check-out=2022-02-18&q-rooms=1&q-room-0-adults=2&q-room-0-children=0&f-lid=1729087&sort-order=DISTANCE_FROM_LANDMARK&WOD=4&WOE=5&JHR=1&FPQ=2&MGT=1&ZSX=0&SYE=3&YGF=2" target="_blank"  class="btn btn-info">View Details</a>

                  </div>
                </div>
              </div>
              <div class="item">
                <div class="warpp text-center py-4 pb-5">
                  <div class="img mb-4" style="background-image: url(images/hotel4.jpg)">
                  </div>
                  <div class="text pt-4">
                    <p class="mb-4">Royal Kalaw Hills Resort</p>
                    <p class="name">Kalaw, Myanmar</p>
                    <a href="https://www.hotels.com/ho580726/?q-check-in=2022-02-17&q-check-out=2022-02-18&q-rooms=1&q-room-0-adults=2&q-room-0-children=0&sort-order=BEST_SELLER&WOD=4&WOE=5&JHR=2&FPQ=3&MGT=1&ZSX=0&SYE=3&YGF=2" target="_blank" class="btn btn-info">View Details</a>
                  </div>
                </div>
              </div>
         
            </div>
          </div>
        </div>
      </div>
    </section>



    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2>Recent Activity</h2>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <a href="" class="block-20" style="background-image: url('images/trip1.jpg');">
              </a>
              <div class="text pt-4">
              	<div class="meta mb-3">
                  <div><a href="#">July. 24, 2019</a></div>
                 
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading mt-2"><a href="#">Ka Law Trip</a></h3>
                <p>Kalaw Trip was a wonderful trip for our passenger</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <a href="" class="block-20" style="background-image: url('images/trip2.jpg');">
              </a>
              <div class="text pt-4">
              	<div class="meta mb-3">
                  <div><a href="#">July. 24, 2019</a></div>
             
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading mt-2"><a href="#">Kyite Htee Yoe Trip</a></h3>
                <p>Kmd Students are very Happy in kyite htee yoe trip </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry">
              <a href="" class="block-20" style="background-image: url('images/trip3.jpg');">
              </a>
              <div class="text pt-4">
              	<div class="meta mb-3">
                  <div><a href="#">July. 24, 2019</a></div>
               
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading mt-2"><a href="#">Bagan Trip </a></h3>
                <p>They were in the heaven </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>		

 
    <?php
   include 'common/footer.php';
   ?>
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


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
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>