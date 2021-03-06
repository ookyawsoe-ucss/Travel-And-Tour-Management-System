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
		<?php
		 include('../common/adminheader.php');
		 include "../Connection.php";
		 session_start();
		 $id = $_SESSION['id'] ?? "";
				$password = $_SESSION['password'] ?? "";
		?>

		<!--**********************************
            Nav header start
        ***********************************-->
		<div class="content-body">
			<div class="container-fluid">

				<!-- row -->
				<div class="row">





					<div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
						<div class="widget-stat card bg-primary">
							<div class="card-body  p-4">
								<div class="media">
										<img src="../admin/images/list.png" alt="schedule" width="100px">
											<div class="media-body text-white">
										<p class="mb-1">Total Package</p>
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
								<img src="../admin/images/user.png" alt="User Image" width="100px">

									<div class="media-body text-white">
										<p class="mb-1">Total User</p>
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
								<img src="../admin/images/driver.png" alt="Driver Image" width="100px">

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
								<img src="../admin/images/bus.png" alt="BusImage" width="100px">

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
								<img src="../admin/images/booking.png" alt="" width="100px">

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

	<!-- <script src="vendor/chart.js/Chart.bundle.min.js"></script> -->

	<!-- Chart piety plugin files -->
	<script src="vendor/peity/jquery.peity.min.js"></script>
	<!-- Dashboard 1 -->
	<script src="js/dashboard/dashboard-1.js"></script>

	<script src="vendor/owl-carousel/owl.carousel.js"></script>

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