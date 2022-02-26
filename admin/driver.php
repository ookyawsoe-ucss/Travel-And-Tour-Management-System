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
        <div class="nav-header">
            <a href="index.php" class="brand-logo">
                <svg class="logo-abbr" width="55" height="55" viewbox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M27.5 0C12.3122 0 0 12.3122 0 27.5C0 42.6878 12.3122 55 27.5 55C42.6878 55 55 42.6878 55 27.5C55 12.3122 42.6878 0 27.5 0ZM28.0092 46H19L19.0001 34.9784L19 27.5803V24.4779C19 14.3752 24.0922 10 35.3733 10V17.5571C29.8894 17.5571 28.0092 19.4663 28.0092 24.4779V27.5803H36V34.9784H28.0092V46Z" fill="url(#paint0_linear)"></path>
                    <defs>
                    </defs>
                </svg>
                <div class="brand-title">
                    <h2 class="">Charlotte</h2>
                </div>
            </a>
            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>


        <div class="header border-bottom">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="dashboard_bar">
                            Charlotte Admin Dashboard
                            </div>
                        </div>
                        <ul class="navbar-nav header-right">






                            <li class="nav-item dropdown  header-profile">
                                <a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
                                    <img src="images/user.jpg" width="56" alt="">
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">


                                    <a href=" class=" dropdown-item ai-icon">
                                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                            <polyline points="16 17 21 12 16 7"></polyline>
                                            <line x1="21" y1="12" x2="9" y2="12"></line>
                                        </svg>
                                        <span class="ms-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="dlabnav">
            <div class="dlabnav-scroll">
                <ul class="metismenu" id="menu">
                    <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                            <i class="fas fa-home"></i>
                            <span class="nav-text">Dashboard</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="index.php">Dashboard </a></li>



                        </ul>

                    </li>
                    <br>
                    <hr>
                    <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                            <i class="fas fa-table"></i>
                            <span class="nav-text">Schedule</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="schedule.php">Schedule List</a></li>
                        </ul>
                    </li>

                    <br>
                    <hr>
                    <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                            <i class="fas fa-user-tie"></i>
                            <span class="nav-text">Driver</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="registerdriver.php">Add New Driver</a></li>
                            <li><a href="driver.php">Driver List</a></li>
                        </ul>
                    </li>
                    <br>
                    <hr>
                    <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                            <i class="fa-solid fa-bus"></i> <span class="nav-text">Bus</span>
                        </a>
                        <ul aria-expanded="false">
                        <li><a href="registerbus.php">Add New Bus</a></li>
                            <li><a href="bus.php">Bus List</a></li>
                        </ul>
                    </li>
                    <br>
                    <hr>
                    <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                            <i class="fa-solid fa-list-ul"></i> <span class="nav-text">Booking</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="booking.php">Booking List</a></li>
                        </ul>
                    </li>
                    <br>
                    <hr>
                    <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                            <i class="fa-solid fa-user"></i> <span class="nav-text">User</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="user.phpl">User List</a></li>


                        </ul>
                    </li>
                </ul>



            </div>
        </div>
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

                <div class="row">
                    <div class="col-xl-12">
                        <div class="tab-content">
                            <div class="tab-pane fade active show" id="AllStatus">
                                <div class="col-12">
                                    <div class="card">

                                        <div class="card-body">
                                            <div class="mb-4 ">
                                                <a href="registerdriver.php" class="btn btn-primary btn-rounded fs-18">+ Add New</a>


                                            </div>
                                            <div class="table-responsive">
                                                <table id="example3" class="display" style="min-width: 845px">
                                                    <thead>
                                                        <tr>
                                                            <th></th>
                                                            <th>No</th>
                                                            <th>Name</th>
                                                            <th>Username</th>
                                                            <th>Phone</th>
                                                            <th>Address</th>

                                                            <th>Joining Date</th>

                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>




                                                        <tr>
                                                            <td><img class="rounded-circle" width="35" src="images/profile/small/pic5.jpg" alt=""></td>
                                                            <td>1</td>
                                                            <td>Kyaw SOe</td>
                                                            <td>LU Lu aung</td>
                                                            <td>0912312041</td>
                                                            <td>Yangon</td>

                                                            <td>2008/11/28</td>


                                                            <td>
                                                                <div class="d-flex">
                                                                    <a href="#" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#exampleModalCenter"> <b>View License</b>
                                                                    </a>
                                                                    <!-- <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">Modal centered</button> -->
                                                                    &nbsp;
                                                                    <a href="#" class="btn btn-danger "><b>Delete</b>
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>







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