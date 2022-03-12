<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="robots" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">
    <meta property="og:title" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">
    <meta property="og:description" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">
    <meta property="og:image" content="https:/fillow.dexignlab.com/xhtml/social-image.png">
    <meta name="format-detection" content="telephone=no">

    <!-- PAGE TITLE HERE -->
    <title>Admin Dashboard</title>
    <link href="vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">

    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="images/favicon.png">
    <link href="vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
    <link href="vendor/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link rel="stylesheet" href="vendor/nouislider/nouislider.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Style css -->
    <link href="css/style.css" rel="stylesheet">

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="lds-ripple">
            <div></div>
            <div></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <?php
        include('../common/adminheader.php')
        ?>


        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->

        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
            
            
        <!--**********************************
            Content body end
        ***********************************-->



        <!--**********************************
            Footer start
        ***********************************-->

        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->
        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">
                <div class="project-page d-flex justify-content-between align-items-center flex-wrap">

                    <div class="mb-4">
                        <a href="addschedule.php" class="btn btn-primary btn-rounded fs-14">+ Add New Package</a>

                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="tab-content">
                            <div class="tab-pane fade active show" id="AllStatus">
                                <div class="col-12">
                                    <div class="card">

                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table id="example3" class="display" style="min-width: 845px">
                                                    <thead>
                                                        <tr>
                                                            <th><small>Image</small></th>
                                                            <th><small>ID</small></th>
                                                            <th><small>Package Name</small></th>
                                                            <th><small>Car Name</small></th>
                                                            <th><small>Driver Name</small></th>
                                                            <th><small>Departure Date</small></th>
                                                            <th><small>Arrival Date</small></th>
                                                            <th><small>Start Time</small></th>
                                                            <th><small>Duration</small></th>
                                                            <th><small>Available Count</small> </th>
                                                            <th><small>Price</small></th>
                                                            <th><small>Description</small></th>
                                                            <th><small>Action</small></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>


                                                        <?php
                                                        include "../Connection.php";
                                                        $select = "select * from package group by (p_name)";
                                                        $ret = mysqli_query($connect, $select);
                                                        $count = mysqli_num_rows($ret);

                                                        for ($i = 0; $i < $count; $i++) {
                                                            $row = mysqli_fetch_array($ret);
                                                            $id = $row['id'];
                                                            $p_name = $row['p_name'];
                                                            $c_id = $row['carname'];
                                                            $d_id = $row['dname'];
                                                            $price = $row['price'];

                                                            $departure_date = $row['departure_date'];
                                                            $arrival_date = $row['arrival_date'];
                                                            $start_time = $row['start_time'];
                                                            $duration = $row['duration'];
                                                            $available_count = $row['available_count'];
                                                            $description = $row['description'];
                                                            $package_image = $row['package_image'];

                                                            echo "
                                                       
                                                        <tr>
                                                            <td><img src ='../packageImage/$package_image' width='30px' height='30px' class='rounded-circle'></td>
                                                            <td>$id</td>
                                                            <td>$p_name</td>
                                                            <td>$c_id</td>
                                                            <td>$d_id</td>
                                                            <td>$departure_date</td>
                                                            <td>$arrival_date</td>
                                                            <td>$start_time</td>
                                                            <td>$duration</td>
                                                            <td>$available_count</td>
                                                            <td>$price</td>

                                                            <td>$description</td>

                                                        


                                                            <td>
                                                                <div class='d-flex'>
                                                                    <a href='#' class='btn btn-primary '> <b>Edit</b>
                                                                    </a>
                                                                    &nbsp;
                                                                    <a href='#' class='btn btn-danger '><b>Delete</b>
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                     
                                                       
                                                      
                                                        ";
                                                        } ?>



                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <!-- Required vendors -->
    <script src="vendor/global/global.min.js"></script>
    <script src="vendor/chart.js/Chart.bundle.min.js"></script>
    <!-- Apex Chart -->
    <script src="vendor/apexchart/apexchart.js"></script>

    <!-- Datatable -->
    <script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="js/plugins-init/datatables.init.js"></script>

    <script src="vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>

    <script src="js/custom.min.js"></script>
    <script src="js/dlabnav-init.js"></script>
    <script src="js/demo.js"></script>
    <script src="js/styleSwitcher.js"></script>
    <script>
        function cardsCenter() {

            /*  testimonial one function by = owl.carousel.js */



            jQuery('.card-slider').owlCarousel({
                loop: true,
                margin: 0,
                nav: true,
                //center:true,
                slideSpeed: 3000,
                paginationSpeed: 3000,
                dots: true,
                navText: ['<i class="fas fa-arrow-left"></i>', '<i class="fas fa-arrow-right"></i>'],
                responsive: {
                    0: {
                        items: 1
                    },
                    576: {
                        items: 1
                    },
                    800: {
                        items: 1
                    },
                    991: {
                        items: 1
                    },
                    1200: {
                        items: 1
                    },
                    1600: {
                        items: 1
                    }
                }
            })
        }

        jQuery(window).on('load', function() {
            setTimeout(function() {
                cardsCenter();
            }, 1000);
        });
    </script>

</body>

</html>