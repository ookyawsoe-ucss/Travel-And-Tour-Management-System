<!DOCTYPE html>
<html lang="en">

<head>
    <title>Travel and Tour Management System</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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

        include 'Connection.php';

            $id = $_GET['id'];
            $delete = "select * from package  where p_name='$id'";
            $ret = mysqli_query($connect, $delete);
            $row = mysqli_fetch_array($ret);
            $pid=$row['id'];
            $name = $row['p_name'];
            $date = $row['departure_date'];
            $day = $row['duration'];
            $price = $row['price'];
            $desc = $row['description'];
            $image = $row['package_image'];
            $ddate = date("Y-M-d", strtotime($date));


    ?>
    


    <div class="hero-wrap" style="background-image: url('images/bg.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <br>
            <br><br>
            <div class="row no-gutters slider-text justify-content-start align-items-center">
                <div class="col-lg-7 col-md-7  ftco-animate d-flex align-items-end">
                   
                <img class=" w-50 h-50 rounded" src="packageImage/<?php echo"$image"?>">
                            
                </div>
               
                <div class="col-lg-4 col-md-4 m-1   ftco-animate d-flex align-items-end">
                    <div class="row">
                        <div class="col-12 text-white mb-2">
                            &nbsp;  &nbsp;  &nbsp;  &nbsp;   Package Name : <?php echo"$name"?>
                        </div>
                        <div class="col-12 text-white mt-2">
                        &nbsp;  &nbsp;  &nbsp;  &nbsp;    Depature Date   :<?php echo"$ddate"?>
                        </div>
                        <div class="col-12 text-white mt-2">
                            &nbsp;  &nbsp;  &nbsp;  &nbsp;    Duriation    :<?php echo"$day"?> days
                        </div>
                        <div class="col-12 text-white mt-2">
                        &nbsp;  &nbsp;  &nbsp;  &nbsp;     Price        :<?php echo"$price"?> MMK
                        </div>
                        <div class="col-12 text-white mt-2">
                            &nbsp;  &nbsp;  &nbsp;  &nbsp;    Description   : <?php echo"$desc"?>
                        </div>
                        <div class="col-12 mt-4 ml-5">
                            <a href="index.php?">Back </a>
                    </div>
                    </div>
                    
                </div>

            </div>
            
        </div>
        
    </div>

    









    
    <?php
    include 'common/footer.php';
    ?>


    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
        </svg></div>


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