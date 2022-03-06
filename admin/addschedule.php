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
    <link href="vendor/jquery-smartwizard/dist/css/smart_wizard.min.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">
<<<<<<< Updated upstream
=======

    <style>
        .zoom {
            padding: px;
            /* background-color: green; */
            transition: transform .2s;
            width: 200px;
            height: 120px;
            margin: 0 auto;
        }

        .zoom:hover {
            -ms-transform: scale(1.5);
            /* IE 9 */
            -webkit-transform: scale(1.5);
            /* Safari 3-8 */
            transform: scale(1.5);
        }

        button {
            border: none;
            width: 152px;
            height: 40px;
            margin: auto;
            margin-top: 29px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 0;
            background: #ae3c33;
            font-size: 13px;
            color: #fff;
            text-transform: uppercase;
            font-family: "Muli-SemiBold";
            border-radius: 20px;
            overflow: hidden;
            -webkit-transform: perspective(1px) translateZ(0);
            transform: perspective(1px) translateZ(0);
            box-shadow: 0 0 1px rgba(0, 0, 0, 0);
            position: relative;
            -webkit-transition-property: color;
            transition-property: color;
            -webkit-transition-duration: 0.5s;
            transition-duration: 0.5s;
        }
>>>>>>> Stashed changes


    <link href="vendor/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- Clockpicker -->
    <link href="vendor/clockpicker/css/bootstrap-clockpicker.min.css" rel="stylesheet">
    <!-- asColorpicker -->
    <link href="vendor/jquery-asColorPicker/css/asColorPicker.min.css" rel="stylesheet">
    <!-- Material color picker -->
    <link href="vendor/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet">
	
    <!-- Pick date -->
    <link rel="stylesheet" href="vendor/pickadate/themes/default.css">
    <link rel="stylesheet" href="vendor/pickadate/themes/default.date.css">
	<link href="../icon.css?family=Material+Icons" rel="stylesheet">

 

    <style>
        /* body{
    padding-top: 10px;
    padding-bottom: 20px;

} */
        .image-container {
            position: relative;
        }

        .image {
            opacity: 1;
            display: block;
            width: 100%;
            height: auto;
            transition: .5s ease;
            backface-visibility: hidden;
        }

        .middle {
            transition: .5s ease;
            opacity: 0;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            text-align: center;
        }

        .image-container:hover .image {
            opacity: 0.3;
        }

        .image-container:hover .middle {
            opacity: 1;
        }

        .roww {
            display: flex;
        }

        /* Create two equal columns that sits next to each other */
        .columnn {
            flex: 50%;
            padding: 10px;
            height: 300px;
            /* Should be removed. Only for demonstration */
        }

        .vl {
            border-left: 2px solid blueviolet;
            height: 500px;
        }
    </style>
</head>

<body>
<<<<<<< Updated upstream
=======
    <?php
    // include 'Connection.php';
    include('../common/adminheader.php');
    // include('upload.php');
    ?>
    <?php
include '../Connection.php';

if (isset($_POST["btnsubmit"])) {
    $fileCount = count($_FILES['file']['name']);
    for ($i = 0; $i < $fileCount; $i++) {
        $fileName = $_FILES['file']['name'][$i];
        $sql = "insert into schedule (package_images) values('$fileName')";
        if ($connect->query($sql) === true) {
            // echo "success";
            echo "<script>window.location='addschedule.php?msg=ins';</script>";
        } else {
            echo "err";
        }
        move_uploaded_file($_FILES['file']['tmp_name'][$i], 'scheduleImage/' . $fileName);
    }
}
?>
>>>>>>> Stashed changes
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
    <?php
        include('../Connection.php');

        include('../common/adminheader.php');
        if (isset($_POST["btnsubmit"])) {
            $name=$_POST['pname'];  
            $price=$_POST['pprice'];  
            $person=$_POST['aperson'];
            $dur=$_POST['dday'];  
            $detail=$_POST['desc'];  
            $bus=$_POST['sbus'];  
            $driver=$_POST['sdriver'];  
            $adate=$_POST['adate'];  
            $ddate=$_POST['ddate'];  
            $time=$_POST['stime'];  
            $fromdate1 = date("Y-m-d", strtotime($adate));
            $fromdate2 = date("Y-m-d", strtotime($ddate));

            $fileCount = count($_FILES['file']['name']);
            for ($i = 0; $i < $fileCount; $i++) {
                $fileName = $_FILES['file']['name'][$i];

                $sql = "insert into package (p_name,price,available_count,duration,description,c_id,d_id,departure_date,arrival_date,start_time,package_image) values('$name','$price','$person','$dur','$detail','$bus','$driver','$fromdate2','$fromdate1','$time','$fileName')";
                if ($connect->query($sql) === true) {
                    echo "<script>alert('Successful Added ');</script>";
                } else {
                    echo "<script>alert('lee error ');</script>";
                }
                move_uploaded_file($_FILES['file']['tmp_name'][$i], '../packageImage/' . $fileName);
            }
        }

        ?>
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
<<<<<<< Updated upstream
      

=======




>>>>>>> Stashed changes
        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">


<<<<<<< Updated upstream
            <div class="row">
=======
                <div class="row " id="newregister">
>>>>>>> Stashed changes
                    <div class="col-xl-12 col-xxl-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Add New Package</h4>
                            </div>
                            <div class="card-body">
<<<<<<< Updated upstream
=======
                                <div id="smartwizard" class="form-wizard order-create">
                                    <!-- <ul class="nav nav-wizard">
                                        <li><a class="nav-link" href="#wizard_Services">
                                                <span>1</span>
                                            </a></li>
                                        <li><a class="nav-link" href="#wizard_Time">
                                                <span>2</span>
                                            </a></li>

                                    </ul> -->
                                    <div class="tab-content">
                                        <form action="" method="post" enctype="multipart/form-data">
                                            <!-- <div id="wizard_Services" class="tab-pane" role="tabpanel">


                                                <div class="row">
>>>>>>> Stashed changes

								<div id="smartwizard" class="form-wizard order-create">

									<ul class="nav nav-wizard">
										<li><a class="nav-link" href="#wizard_Service"> 
											<span>1</span> 
										</a></li>
										<li><a class="nav-link" href="#wizard_Time">
											<span>2</span>
										</a></li>
										
									</ul>
                                    <form action="" method="post" enctype="multipart/form-data">

									<div class="tab-content">
                                    

										<div id="wizard_Service" class="tab-pane" role="tabpanel">
											<div class="row">
												<div class="col-lg-6 mb-2">
													<div class="mb-3">
														<label class="text-label form-label">Package Name*</label>
														<input type="text" name="pname" class="form-control" placeholder="Enter Package Name" required="">
													</div>
												</div>
												<div class="col-lg-6 mb-2">
													<div class="mb-3">
														<label class="text-label form-label">Price*</label>
														<input type="text" name="pprice" class="form-control" placeholder="Enter Price" required="">
													</div>
												</div>
												<div class="col-lg-6 mb-2">
													<div class="mb-3">
														<label class="text-label form-label">Available Person*</label>
														<input type="number" class="form-control" id="inputGroupPrepend2" aria-describedby="inputGroupPrepend2" placeholder="Enter Available Person " required="" name="aperson">
													</div>
												</div>
												<div class="col-lg-6 mb-2">
													<div class="mb-3">
														<label class="text-label form-label">Duration Day *</label>
														<input type="number" name="dday" class="form-control" placeholder="Enter Duration Day" required="" >
													</div>
												</div>
												<div class="col-lg-12 mb-3">
													<div class="mb-3">
														<label class="text-label form-label">Description*</label>
                                                        <input type="text" name="desc" class="form-control" placeholder="Enter Package Detail" required="">
													</div>
												</div>
											</div>
										</div>
										<div id="wizard_Time" class="tab-pane" role="tabpanel">
											<div class="row">
												<div class="col-lg-6 mb-2">
                                                <label class="form-label">Select Bus</label>
                                                <select id="inputState" class="default-select form-control wide"name="sbus">
                                                    <option selected="">Select Bus...</option>
                                                    <?php
										    $select="Select * from bus";
										    $ret=mysqli_query($connect,$select);
										    $count=mysqli_num_rows($ret);
										    for ($i=0; $i < $count ; $i++) 
										    { 
										      $row=mysqli_fetch_array($ret);
										      $name=$row['car_name'];
										      $id=$row['id'];

										      echo "<option value='$id'>$name</option>";
										    }
										    ?>
                                                   
                                                </select>
												</div>
                                                <div class="col-lg-6 mb-2">
                                                <label class="form-label">Select Driver</label>
                                                <select id="inputState" class="default-select form-control wide" name="sdriver">
                                                    <option selected="">Select Driver...</option>
                                                    <?php
										    $select="Select * from driver";
										    $ret=mysqli_query($connect,$select);
										    $count=mysqli_num_rows($ret);
										    for ($i=0; $i < $count ; $i++) 
										    { 
										      $row=mysqli_fetch_array($ret);
										      $name=$row['name'];
										      $id=$row['id'];

										      echo "<option value='$id'>$name</option>";
										    }
										    ?>
                                                </select>
												</div>
												<div class="col-lg-6 mb-2">
                                                <label class="form-label">Depature Date</label>
                                            <input type="date" class="form-control" id="mdate" name="ddate"> 
                                                    </div>
                                                    <div class="col-lg-6 mb-2">
                                                    <label class="form-label">Arrival Date</label>
                                            <input type="date" class="form-control" placeholder="2017-06-04" id="mdate"name="adate"> 
                                                    </div>
                                                    <div class="col-lg-6 mb-2">
                                                    <label class="form-label">Start Time</label>
                                            <div class="input-group clockpicker">
                                                <input type="text" class="form-control" value="09:30" name="stime">
                                            </div>
                                                    </div>
<<<<<<< Updated upstream
                                                    <div class="col-lg-12 mb-3">
                                                            <div class="mb-3">
                                                                <label class="text-label form-label">Select Images for package*</label>
                                                                <div class="form-file">
                                                                <input type="file" class="form-file-input form-control" name="file[]" id="file" multiple>
                                                </div>
                                                
                                            </div>
=======


                                                </div>
                                            </div> -->
                                            <div id="wizard_Time" class="tab-pane" role="tabpanel">
                                                <div class="row">
                                                    <h2>Schedule Information</h2>
                                                    <div class="col-lg-6 mb-2">
                                                        <div class="mb-3">
                                                            <label class="text-label form-label">Name*</label>
                                                            <input type="text" name="name" class="form-control" placeholder="Enter Name" required="">
>>>>>>> Stashed changes
                                                        </div>
                                                        <div class="form-row-last text-center">
                                                        <!-- <input type="submit" id="submitbtn" name="btnsubmit" value="Register Now" class="btn btn-sm btn-danger"> -->
                                                        <button type="submit" id="submitbtn" name="btnsubmit" class="button">Register Now</button>
                                                    </div>
                                                        </div>
<<<<<<< Updated upstream
                                                   
										
												
											</div>
                                            <!--  -->
									</div>
									
                                </form>
									</div>
								</div>
                          
=======
                                                    </div>

                                                    <div class="col-lg-6 mb-2">
                                                        <div class="mb-3">
                                                            <label class="text-label form-label">Phone Number*</label>
                                                            <input type="text" name="phone" class="form-control" placeholder="Enter Phone number" required="">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 mb-2">
                                                        <div class="mb-3">
                                                            <label class="text-label form-label">Address*</label>
                                                            <input type="text" name="address" class="form-control" required="" placeholder="Enter Address">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 mb-3">
                                                        <div class="mb-3">
                                                            <label class="text-label form-label">Select Images for package*</label>
                                                            <input type="file" name="file[]" class="form-control" multiple>
                                                        </div>
                                                    </div>
                                                    <div class="form-row-last text-center">
                                                        <!-- <input type="submit" id="submitbtn" name="btnsubmit" value="Register Now" class="btn btn-sm btn-danger"> -->
                                                        <button type="submit" id="submitbtn" name="btnsubmit">Register Now</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
>>>>>>> Stashed changes
                            </div>
                        </div>
                    </div>
                </div>
                    
            </div>
            
        </div>

        <!-- Register modal -->

        <!--Lisense Modal -->
        <div class="modal fade" id="exampleModalCenter">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal">
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-6 zoom">
                                <img class="rounded" width="200" src="../images/International-drivers-permit-singapore-4.jpg" alt="frontlicense">
                            </div>
                            <div class="col-6 zoom">
                                <img class="rounded" width="200" src="../images/International-drivers-permit-singapore-4.jpg" alt="back license">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
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
    <script src="vendor/apexchart/apexchart.js"></script>

    <script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="js/plugins-init/datatables.init.js"></script>

    <script src="vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>

    <script src="js/custom.min.js"></script>
    <script src="js/dlabnav-init.js"></script>
    <script src="js/demo.js"></script>
    <script src="js/styleSwitcher.js"></script>

    <script src="vendor/global/global.min.js"></script>

    <script src="vendor/jquery-steps/build/jquery.steps.min.js"></script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <!-- Form validate init -->

    <!-- Form validate init -->
    <script src="js/plugins-init/jquery.validate-init.js"></script>

    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Form Steps -->
    <script src="vendor/jquery-smartwizard/dist/js/jquery.smartWizard.js"></script>
    <script src="vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>

        
    <!-- Daterangepicker -->
    <!-- momment js is must -->
    <script src="vendor/moment/moment.min.js"></script>
    <script src="vendor/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- clockpicker -->
    <script src="vendor/clockpicker/js/bootstrap-clockpicker.min.js"></script>
    <!-- asColorPicker -->
    <script src="vendor/jquery-asColor/jquery-asColor.min.js"></script>
    <script src="vendor/jquery-asGradient/jquery-asGradient.min.js"></script>
    <script src="vendor/jquery-asColorPicker/js/jquery-asColorPicker.min.js"></script>
    <!-- Material color picker -->
    <script src="vendor/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
    <!-- pickdate -->
    <script src="vendor/pickadate/picker.js"></script>
    <script src="vendor/pickadate/picker.time.js"></script>
    <script src="vendor/pickadate/picker.date.js"></script>



    <!-- Daterangepicker -->
    <script src="js/plugins-init/bs-daterange-picker-init.js"></script>
    <!-- Clockpicker init -->
    <script src="js/plugins-init/clock-picker-init.js"></script>
    <!-- asColorPicker init -->
    <script src="js/plugins-init/jquery-asColorPicker.init.js"></script>
    <!-- Material color picker init -->
    <script src="js/plugins-init/material-date-picker-init.js"></script>
    <!-- Pickdate -->
    <script src="js/plugins-init/pickadate-init.js"></script>

    <script>
        $(document).ready(function() {
            // SmartWizard initialize
            $('#smartwizard').smartWizard();
        });

        $(document).ready(function() {
            $imgSrc = $('#imgProfile').attr('src');

            function readURL(input) {

                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        $('#imgProfile').attr('src', e.target.result);
                    };

                    reader.readAsDataURL(input.files[0]);
                }
            }
            $('#btnChangePicture').on('click', function() {
                // document.getElementById('profilePicture').click();
                if (!$('#btnChangePicture').hasClass('changing')) {
                    $('#profilePicture').click();
                } else {
                    // change
                }
            });
            $('#profilePicture').on('change', function() {
                readURL(this);
                $('#btnChangePicture').addClass('changing');
                $('#btnChangePicture').attr('value', 'Confirm');
                $('#btnDiscard').removeClass('d-none');
                // $('#imgProfile').attr('src', '');
            });
            $('#btnDiscard').on('click', function() {
                // if ($('#btnDiscard').hasClass('d-none')) {
                $('#btnChangePicture').removeClass('changing');
                $('#btnChangePicture').attr('value', 'Change');
                $('#btnDiscard').addClass('d-none');
                $('#imgProfile').attr('src', $imgSrc);
                $('#profilePicture').val('');
                // }
            });
        });
        //frontls
        $(document).ready(function() {
            $imgSrc = $('#imgProfilefls').attr('src');

            function readURL(input) {

                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        $('#imgProfilefls').attr('src', e.target.result);
                    };

                    reader.readAsDataURL(input.files[0]);
                }
            }
            $('#btnChangePicturefls').on('click', function() {
                // document.getElementById('profilePicture').click();
                if (!$('#btnChangePicturefls').hasClass('changing')) {
                    $('#profilePicturefls').click();
                } else {
                    // change
                }
            });
            $('#profilePicturefls').on('change', function() {
                readURL(this);
                $('#btnChangePicturefls').addClass('changing');
                $('#btnChangePicturefls').attr('value', 'Confirm');
                $('#btnDiscardfls').removeClass('d-none');
                // $('#imgProfilefls').attr('src', '');
            });
            $('#btnDiscardfls').on('click', function() {
                // if ($('#btnDiscardfls').hasClass('d-none')) {
                $('#btnChangePicturefls').removeClass('changing');
                $('#btnChangePicturefls').attr('value', 'Change');
                $('#btnDiscardfls').addClass('d-none');
                $('#imgProfilefls').attr('src', $imgSrc);
                $('#profilePicturefls').val('');
                // }
            });
        });
        // backls
        $(document).ready(function() {
            $imgSrc = $('#imgProfilebls').attr('src');

            function readURL(input) {

                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        $('#imgProfilebls').attr('src', e.target.result);
                    };

                    reader.readAsDataURL(input.files[0]);
                }
            }
            $('#btnChangePicturebls').on('click', function() {
                // document.getElementById('profilePicture').click();
                if (!$('#btnChangePicturebls').hasClass('changing')) {
                    $('#profilePicturebls').click();
                } else {
                    // change
                }
            });
            $('#profilePicturebls').on('change', function() {
                readURL(this);
                $('#btnChangePicturebls').addClass('changing');
                $('#btnChangePicturebls').attr('value', 'Confirm');
                $('#btnDiscardbls').removeClass('d-none');
                // $('#imgProfilebls').attr('src', '');
            });
            $('#btnDiscardbls').on('click', function() {
                // if ($('#btnDiscardbls').hasClass('d-none')) {
                $('#btnChangePicturebls').removeClass('changing');
                $('#btnChangePicturebls').attr('value', 'Change');
                $('#btnDiscardbls').addClass('d-none');
                $('#imgProfilebls').attr('src', $imgSrc);
                $('#profilePicturebls').val('');
                // }
            });
        });
    </script>
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