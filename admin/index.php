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
		<div class="nav-header">
			<a href="" class="brand-logo">
				<img src="images/user.jpg" width="60px" alt="" class="rounded-circle">

				<div class="brand-title">
					<h3 class="text-info">Travel & Tourism</h3>
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
							<div class="dashboard_bar text-info">
								<h3 class="text-info">Admin Dashboard</h3>
							</div>
						</div>
						<ul class="navbar-nav header-right">






							<li class="nav-item dropdown">
								<a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">

									<span class="dropdown-toggle text-info" style="font-size: larger;">Admin </span>
									<!-- <img src="images/user.jpg" width="50" alt="" class="rounded-circle"> -->
								</a>
								<div class="dropdown-menu dropdown-menu-end">
									<a href="index.php" class="dropdown-item ai-icon">
										<i class="fa-solid fa-user text-info"></i>
										<span class="ms-2 text-info">Admin Profile </span>
									</a>
									<hr>


									<a href="../logout.php" class="dropdown-item ai-icon">
										<svg id="icon-logout" class="text-info" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
											<path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
											<polyline points="16 17 21 12 16 7"></polyline>
											<line x1="21" y1="12" x2="9" y2="12"></line>
										</svg>
										<span class="ms-2 text-info">Logout </span>
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
							<li><a href="addschedule.php">Add New Schedule</a></li>
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
							<li><a href="user.php">User List</a></li>


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
        ***********************************-->
		<div class="content-body">
			<div class="container-fluid">

				<!-- row -->
				<div class="row">





					<div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
						<div class="widget-stat card bg-primary">
							<div class="card-body  p-4">
								<div class="media">
									<span class="me-3">
										<i class="la la-users"></i>
									</span>
									<div class="media-body text-white">
										<p class="mb-1">Total Schedule</p>
										<?php
										include "../Connection.php";
										$select = "SELECT * FROM package";
										$ret = mysqli_query($connect, $select);
										$count = mysqli_num_rows($ret);
										?>
										<h3 class="text-white"><?php echo "$count" ?></h3>
										<div class="progress mb-2 bg-secondary">
											<div class="progress-bar progress-animated bg-light" style="width: 80%"></div>
										</div>
										<small>80% Increase in 20 Days</small>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
						<div class="widget-stat card bg-warning">
							<div class="card-body p-4">
								<div class="media">
									<span class="me-3">
										<i class="la la-user"></i>
									</span>
									<div class="media-body text-white">
										<p class="mb-1">Total Customer</p>
										<?php
										include "../Connection.php";
										$select = "SELECT * FROM customer";
										$ret = mysqli_query($connect, $select);
										$count = mysqli_num_rows($ret);
										?>
										<h3 class="text-white"><?php echo "$count" ?></h3>
										<div class="progress mb-2 bg-primary">
											<div class="progress-bar progress-animated bg-light" style="width: 50%"></div>
										</div>
										<small>50% Increase in 25 Days</small>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
						<div class="widget-stat card bg-secondary">
							<div class="card-body p-4">
								<div class="media">
									<span class="me-3">
										<i class="la la-graduation-cap"></i>
									</span>
									<div class="media-body text-white">
										<p class="mb-1">Total Driver</p>
										<?php
										include "../Connection.php";
										$select = "SELECT * FROM driver";
										$ret = mysqli_query($connect, $select);
										$count = mysqli_num_rows($ret);
										?>
										<h3 class="text-white"><?php echo "$count" ?></h3>
										<div class="progress mb-2 bg-primary">
											<div class="progress-bar progress-animated bg-light" style="width: 76%"></div>
										</div>
										<small>76% Increase in 20 Days</small>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
						<div class="widget-stat card bg-danger ">
							<div class="card-body p-4">
								<div class="media">
									<span class="me-3">
										<i class="la la-dollar"></i>
									</span>
									<div class="media-body text-white">
										<p class="mb-1">Total Bus</p>
										<?php
										include "../Connection.php";
										$select = "SELECT * FROM bus";
										$ret = mysqli_query($connect, $select);
										$count = mysqli_num_rows($ret);
										?>
										<h3 class="text-white"><?php echo "$count" ?></h3>
										<div class="progress mb-2 bg-secondary">
											<div class="progress-bar progress-animated bg-light" style="width: 30%"></div>
										</div>
										<small>30% Increase in 30 Days</small>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
						<div class="widget-stat card bg-success ">
							<div class="card-body p-4">
								<div class="media">
									<span class="me-3">
										<i class="la la-dollar"></i>
									</span>
									<div class="media-body text-white">
										<p class="mb-1">Total Booking</p>
										<?php
										include "../Connection.php";
										$select = "SELECT * FROM booking";
										$ret = mysqli_query($connect, $select);
										$count = mysqli_num_rows($ret);
										?>
										<h3 class="text-white"><?php echo "$count" ?></h3>
										<div class="progress mb-2 bg-secondary">
											<div class="progress-bar progress-animated bg-light" style="width: 30%"></div>
										</div>
										<small>30% Increase in 30 Days</small>
									</div>
								</div>
							</div>
						</div>
					</div>
















				</div>
			</div>
		</div>
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


	</div>
	<!--**********************************
        Main wrapper end
    ***********************************-->

	<!--**********************************
        Scripts
    ***********************************-->
	<!-- Required vendors -->
	<script src="vendor/global/global.min.js"></script>
	<script src="vendor/chart.js/Chart.bundle.min.js"></script>
	<script src="vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>

	<!-- Apex Chart -->
	<script src="vendor/apexchart/apexchart.js"></script>

	<script src="vendor/chart.js/Chart.bundle.min.js"></script>

	<!-- Chart piety plugin files -->
	<script src="vendor/peity/jquery.peity.min.js"></script>
	<!-- Dashboard 1 -->
	<script src="js/dashboard/dashboard-1.js"></script>

	<script src="vendor/owl-carousel/owl.carousel.js"></script>

	<script src="js/custom.min.js"></script>
	<script src="js/dlabnav-init.js"></script>
	<script src="js/demo.js"></script>
	<!-- <script src="js/styleSwitcher.js"></script> -->
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