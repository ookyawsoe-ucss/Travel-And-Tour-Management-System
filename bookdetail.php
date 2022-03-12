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



    </style>
    <?php
    include 'common/header.php';
    include 'Connection.php';
    include 'autoid.php';


    $id = $_GET['id'];

    $delete = "select * from package  where id='$id'";
    $ret = mysqli_query($connect, $delete);
    $row = mysqli_fetch_array($ret);
    $pid = $row['id'];
    $pname = $row['p_name'];
    $date = $row['departure_date'];
    $day = $row['duration'];
    $price = $row['price'];
    $desc = $row['description'];
    $image = $row['package_image'];
    $ddate = date("d-M-Y", strtotime($date));
    $pcount = $row['available_count'];




    $name = $_SESSION['name'] ?? "";
    $uid = $_SESSION['id'] ?? "";

    if (!isset($_SESSION['name'])) {
        echo "<script>alert('You Need To Login');</script>";
        echo "<script>
                     window.location='login.php';
                     </script>";
    }







    ?>
</head>

<body>

    

    <?php



    if (isset($_POST['btnregister'])) {

        $cuid = $_POST['txtuid'];
        $pid = $_POST['txtpid'];
        $username = $_POST['cusname'];
        $phone = $_POST['phone'];
        $quantity = $_POST['quantity'];
        $total = $_POST['total'];
        $nname = $_POST['pkname'];
        $ddday = $_POST['textdday'];
        $ddate = $_POST['txtdate'];
        $ddesc = $_POST['desc'];
        $aamount = $_POST['amount'];
        $bid = $_POST['txtbid'];
        $dddate = date("Y-m-d", strtotime($ddate));
    
        $insert = "INSERT into booking (id,cid,phone,customer_name,total_price,ticket_count,p_name,price,descr,	depature_date,duration_day,p_id) values ('$bid','$uid','$phone','$username','$total','$quantity','$nname','$aamount','$ddesc','$dddate','$ddday','$pid')";
        
        // $insert = "Insert into test1 (c_id,phone,name,t_price,p_number,p_name,price,descr,d_date,d_day) values ('$cuid','$phone','$username','$total','$quantity','$nname','$aamount','$ddesc','$dddate','$ddday')";

        $ret1 = mysqli_query($connect, $insert);

        if ($ret1) {
            echo"<script>window.location='payment.php?id=$bid';</script>";
            echo "<script>alert('Booking Successful! ');</script>";

        } else {
            echo mysqli_error($connect);
        }
    }

    ?>

    <div class="hero-wrap" style="background-image: url('images/bg.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">

            <div class="row no-gutters slider-text justify-content-start align-items-center">

            <form action="bookdetail.php" method="post" class="search-property-5"  enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                            <input type="hidden" class="form-control" name="txtuid" required="" value="<?php echo "$uid " ?>" readonly>
                            <input type="hidden" class="form-control" name="txtpid" required="" value="<?php echo "$pid " ?>" readonly>
                            <input type="hidden" class="form-control" name="txtbid" required="" value="<?php echo  AutoID('booking','id','B-',3) ?>" readonly>

                                <label for="" class="" style="font-size: 30px;" class="label">
                                    <h4 class="text-white">Package Name</h4>
                                </label>
                                <input type="email" class="form-control" name="pkname" required="" value="<?php echo "$pname" ?>" readonly>

                                <label for="" class="" style="font-size: 30px;" class="label">
                                    <h4 class="text-white"> Depature Date</h4>
                                </label>
                                <input type="date" class="form-control" name="txtdate" value="<?php echo "$date" ?>"readonly >

                                <label for="" class="" style="font-size: 30px;" class="label">
                                    <h4 class="text-white"> Duration Day</h4>
                                </label>
                                <input type="text" class="form-control" name="textdday" value="<?php echo "$day" ?> Days"readonly  >
                               

                                <label for="" class="" style="font-size: 30px;" class="label">
                                    <h4 class="text-white">Description</h4>
                                </label>
                                <input type="text" class="form-control" name="desc" value="<?php echo "$desc" ?>" readonly>
                            </div>
                            <label for="" class="" style="font-size: 30px;" class="label">
                                <h4 class="text-white"> Price </h4>
                            </label>
                            <input type="text" class="form-control" name="amount" id="amount" value="<?php echo "$price" ?>  MMK" readonly>

                        </div>
                        <div class="col-6">
                            <div class="form-group">

                                <label for="" class="" style="font-size: 30px;" class="label">
                                    <h4 class="text-white">Customer Name</h4>
                                </label>
                                <input type="text" class="form-control" name="cusname" value="<?php echo "$name" ?>">

                                <label for="" class="" style="font-size: 30px;" class="label">
                                    <h4 class="text-white"> Phone Number</h4>
                                </label>
                                <input type="phone" placeholder="Enter Phone Number" class="form-control" name="phone" required="">
                                <label for="" class="" style="font-size: 30px;" class="label">
                                    <h4 class="text-white"> Number Of Passenger</h4>
                                </label>
                                <input type="number" placeholder="Enter Amount of Passenger" class="form-control" name="quantity" id="quantity" required="" min="2" max="<?php echo "$pcount" ?>" oninput="calc();">
                                <label for="" class="" style="font-size: 30px;" class="label">
                                    <h4 class="text-white"> Total Price</h4>
                                </label>
                                <input type="number" placeholder="Total Price" class="form-control" name="total" id="total" required="" oninput="calc();">
                            </div>
                            <br>
                            <br>
                            <input type="submit" name="btnregister" class="btn btn-lg btn-info w-100  m-auto" style="width: 100px; height:50px" value="Booking">

                        </div>

                    </div>



                </form>






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


        <script>
            function calc() {
                var amount = document.getElementById("amount").value;
                var amount = parseInt(amount, 10);
                var quantity = document.getElementById("quantity").value;
                var quantity = parseInt(quantity, 10);
                var total = amount * quantity;
                document.getElementById("total").value = total;
            }
        </script>

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