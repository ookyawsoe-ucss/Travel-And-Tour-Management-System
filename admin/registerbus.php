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
  -ms-transform: scale(1.5); /* IE 9 */
  -webkit-transform: scale(1.5); /* Safari 3-8 */
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

        button:before {
            content: "";
            position: absolute;
            z-index: -1;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: #f11a09;
            -webkit-transform: scaleX(0);
            transform: scaleX(0);
            -webkit-transform-origin: 0 50%;
            transform-origin: 0 50%;
            -webkit-transition-property: transform;
            transition-property: transform;
            -webkit-transition-duration: 0.5s;
            transition-duration: 0.5s;
            -webkit-transition-timing-function: ease-out;
            transition-timing-function: ease-out;
        }

        button:hover:before {
            -webkit-transform: scaleX(1);
            transform: scaleX(1);
            -webkit-transition-timing-function: cubic-bezier(0.52, 1.64, 0.37, 0.66);
            transition-timing-function: cubic-bezier(0.52, 1.64, 0.37, 0.66);
        }
    </style>
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
    
<?php 
	
include '../Connection.php'; 

if (isset($_POST['btnregister']))
{
   $name=$_POST['cname'];
   $lsno=$_POST['clicense'];  
  $type=$_POST['ctype'];
  
//   $sets=$_POST{'txtsets'};
  $image=$_FILES['profile_image']['name'];
   $folder="../carImage/";
   if($image)
   {
    $filename=$folder."".$image;
    $copy=copy($_FILES['profile_image']['tmp_name'],$filename);
   }
   
   $sideimage=$_FILES['licence_front']['name'];
   $folder="../carImage/";

   if($sideimage)
   {
    $filename=$folder."".$sideimage;
    $copy=copy($_FILES['licence_front']['tmp_name'],$filename);
   }

   $insideimage=$_FILES['licence_back']['name'];
   $folder="../carImage/";
   
   if($insideimage)
   {
    $filename=$folder."".$insideimage;
    $copy=copy($_FILES['licence_back']['tmp_name'],$filename);
   }

  $insert="insert into bus (car_name,car_license_no	,car_type,car_front_image,car_inside_image,car_side_image) values ('$name','$lsno','$type','$image','$sideimage','$insideimage')";
  $ret=mysqli_query($connect,$insert);

  if($ret)
  {
    echo"<script>alert('Successful Added ');</script>";
     echo"<script>window.location='bus.php';</script>";
  }
  else
  {
    echo mysqli_error($connect);
  }
}
			
 ?>
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

              

                <div class="row " id="newregister">
                    <div class="col-xl-12 col-xxl-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title"> Register Driver</h4>
                            </div>
                            <div class="card-body">
                                <div id="smartwizard" class="form-wizard order-create">
                                    <ul class="nav nav-wizard">
                                        <li><a class="nav-link" href="#wizard_Services">
                                                <span>1</span>
                                            </a></li>
                                        <li><a class="nav-link" href="#wizard_Time">
                                                <span>2</span>
                                            </a></li>

                                    </ul>
                                    <div class="tab-content">
                                        <form action="registerbus.php" method="post" enctype="multipart/form-data" >
                                            <div id="wizard_Services" class="tab-pane" role="tabpanel">
                                            

                                                <div class="row">

                                                    <div class="col-12">
                                                        <div class="card-title mb-4">
                                                            <div class="d-flex justify-content-start">
                                                                <div class="image-container">
                                                                    <img src="../images/busimg.webp" id="imgProfile" style="width: 150px; height: 150px" class="img-thumbnail" />
                                                                    <div class="middle">
                                                                        <input type="button" class="btn btn-secondary" id="btnChangePicture" value="Upload" />
                                                                        <input type="file" style="display: none;" id="profilePicture" name="profile_image" />
                                                                    </div>

                                                                    <!-- <input type="button" class="btn btn-secondary" id="btnChangePicture" value="Change" /> -->
                                                                </div>

                                                                <div class="ml-auto">
                                                                    <input type="button" class="btn btn-primary d-none" id="btnDiscard" value="Discard Changes" />
                                                                </div>
                                                            </div>


                                                        </div>
                                                        <label for="" class="text-danger">
                                                            <a href="">
                                                            <h3 class="text-danger">
                                                                &nbsp&nbspUpload Bus Profile
                                                                <h3>
    </a>
    
                                                        </label>
                                                    </div>

                                                    <div class="col-6">
                                                        <div class="card-title mb-4">

                                                            <div class="d-flex justify-content-start">
                                                                <div class="image-container">
                                                                    <img src="../images/side.png" id="imgProfilefls" style="width: 150px; height: 150px" class="img-thumbnail" />
                                                                    <div class="middle">
                                                                        <input type="button" class="btn btn-secondary" id="btnChangePicturefls" value="Upload" />
                                                                        <input type="file" style="display: none;" id="profilePicturefls" name="licence_front" />
                                                                    </div>

                                                                    <!-- <input type="button" class="btn btn-secondary" id="btnChangePicture" value="Change" /> -->
                                                                </div>



                                                            </div>
                                                            <div class="ml-auto">
                                                                <input type="button" class="btn btn-primary d-none" id="btnDiscardfls" value="Discard Changes" />
                                                            </div>

                                                        </div>
                                                        <label for="" class="text-primary">
                                                            <h3 class="text-primary">
                                                                *Upload Bus Side Photo
                                                            </h3>
                                                        </label>
                                                        <!-- front ls -->
                                                    </div>
                                                    <br>
                                                    <div class="col-6">
                                                        <div class="card-title mb-4">
                                                            <div class="d-flex justify-content-start">
                                                                <div class="image-container">
                                                                    <img src="../images/inside.webp" id="imgProfilebls" style="width: 150px; height: 150px" class="img-thumbnail" />
                                                                    <div class="middle">
                                                                        <input type="button" class="btn btn-secondary" id="btnChangePicturebls" value="Upload" />
                                                                        <input type="file" style="display: none;" id="profilePicturebls" name="licence_back" />
                                                                    </div>

                                                                    <!-- <input type="button" class="btn btn-secondary" id="btnChangePicture" value="Change" /> -->
                                                                </div>


                                                            </div>
                                                            <div class="ml-auto">
                                                                <input type="button" class="btn btn-primary d-none" id="btnDiscardbls" value="Discard Changes" />
                                                            </div>
                                                        </div>
                                                        <label for="">
                                                            <h3 class="text-primary">
                                                                *Upload Bus Inside Photo
                                                                <h3>
                                                        </label>

                                                    </div>
                                                    

                                                </div>
                                            </div>
                                            <div id="wizard_Time" class="tab-pane" role="tabpanel">
                                            <div class="row">
                                                <h2>Driver Information</h2>
                                                    <div class="col-lg-6 mb-2">
                                                        <div class="mb-3">
                                                            <label class="text-label form-label">Car Name*</label>
                                                            <input type="text" name="cname" class="form-control" placeholder="Enter Car Name" required="">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 mb-2">
                                                        <div class="mb-3">
                                                            <label class="text-label form-label"> License No*</label>
                                                            <input type="text" name="clicense" class="form-control" placeholder="Enter License No" required="">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6 mb-2">
                                                        <div class="mb-3">
                                                            <label class="text-label form-label">Car Type*</label>
                                                            <input type="text" name="ctype" class="form-control" placeholder="Enter Car Type" required="">
                                                        </div>
                                                    </div>
                                                   
                                                    <div class="form-row-last">

<button id="submitbtn" name="btnregister">Register Now</button>
</div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
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
                        <h5 class="modal-title">Bus Images</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal">
                        </button>
                    </div>
                    <div class="modal-body">
                       <div class="row">
                       <div class="col-12 zoom">
                           <img class="rounded" width="200" src="../images/International-drivers-permit-singapore-4.jpg" alt="inside image">
                           <label for="">Front Image</label>
                           </div>
                           
                           <div class="col-6 zoom">
                           <img class="rounded" width="200" src="../images/International-drivers-permit-singapore-4.jpg" alt="inside image">
                           <label for="">Side Image</label>
                           </div>
                           <div class="col-6 zoom">
                           <img class="rounded" width="200" src="../images/International-drivers-permit-singapore-4.jpg" alt="side image">
                           <label for="">Inside Image</label>
                           </div>
                       </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
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