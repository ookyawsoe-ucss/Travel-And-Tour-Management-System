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
		<div class="nav-header">
            <a href="index.php" class="brand-logo">
				<svg class="logo-abbr" width="55" height="55" viewbox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" clip-rule="evenodd" d="M27.5 0C12.3122 0 0 12.3122 0 27.5C0 42.6878 12.3122 55 27.5 55C42.6878 55 55 42.6878 55 27.5C55 12.3122 42.6878 0 27.5 0ZM28.0092 46H19L19.0001 34.9784L19 27.5803V24.4779C19 14.3752 24.0922 10 35.3733 10V17.5571C29.8894 17.5571 28.0092 19.4663 28.0092 24.4779V27.5803H36V34.9784H28.0092V46Z" fill="url(#paint0_linear)"></path>
					<defs>
					</defs>
				</svg>
				<div class="brand-title">
					<h2 class="">HCAS</h2>
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
                               Admin Dashboard
                            </div>
                        </div>
                        <ul class="navbar-nav header-right">
						
						
						
						
					
							
							<li class="nav-item dropdown  header-profile">
								<a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
									<img src="images/user.jpg" width="56" alt="">
								</a>
								<div class="dropdown-menu dropdown-menu-end">
								
								
									<a href="" class="dropdown-item ai-icon">
										<svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
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
						<a href="javascript:void(0);" class="btn btn-primary btn-rounded fs-18">+ New User</a>
						
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
                                                            <th></th>
                                                            <th>Name</th>
                                                            <th>Username</th>
                                                            <th>Phone</th>
                                                            <th>Email</th>
                                                            <th>Degree</th>
                                                            <th>Specialist</th>
                                                            <th>Joining Date</th>
                                                            <th>Status</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                       
                                                       
                                                       
                                                       
                                                        <tr>
                                                            <td><img class="rounded-circle" width="35" src="images/profile/small/pic5.jpg" alt=""></td>
                                                            <td>Kyaw SOe</td>
                                                            <td>LU Lu aung</td>
                                                            <td>0912312041</td>
                                                            <td>a@gmail.com</td>
                                                            <td>MBBS</td>
                                                            <td>Heart</td>
                                                            <td>2008/11/28</td>
                                                            <td><span class="badge light badge-danger">Panding</span></td>

                                                            <td>
                                                                <div class="d-flex">
                                                                    <a href="#" class="btn btn-primary "> <b>Confrm</b>
                                                                    </a>
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
							<div class="tab-pane fade" id="OnProgress">
                                <div class="col-12">
                                    <div class="card">
                                       
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table id="example3" class="display" style="min-width: 845px">
                                                    <thead>
                                                        <tr>
                                                            <th></th>
                                                            <th>Name</th>
                                                            <th>Username</th>
                                                            <th>Phone</th>
                                                            <th>Email</th>
                                                           <th>Degree</th>
                                                           <th>Specialist</th>
                                                            <th>Joining Date</th>
                                                            <th>Status</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                       
                                                       
                                                       
                                                       
                                                        <tr>
                                                            <td><img class="rounded-circle" width="35" src="images/profile/small/pic5.jpg" alt=""></td>
                                                            <td>Kyaw SOe</td>
                                                            <td>LU Lu aung</td>
                                                            <td>0912312041</td>
                                                            <td>a@gmail.com</td>
                                                            <td>MBBS</td>
                                                            <td>Heart</td>
                                                            <td>2008/11/28</td>
                                                            <td><span class="badge light badge-success"><b>Ok</b></span></td>

                                                            <td>
                                                                <div class="d-flex">
                                                                    <a href="#" class="btn btn-primary "> <b>viewprofile</b>
                                                                    </a>
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
							<div class="tab-pane fade" id="Pending">
                                <div class="col-12">
                                    <div class="card">
                                       
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table id="example3" class="display" style="min-width: 845px">
                                                    <thead>
                                                        <tr>
                                                            <th></th>
                                                            <th>Name</th>
                                                            <th>Username</th>
                                                            <th>Phone</th>
                                                            <th>Email</th>
                                                           <th>Degree</th>
                                                           <th>Specialist</th>
                                                            <th>Joining Date</th>
                                                            <th>Status</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                       
                                                       
                                                       
                                                       
                                                        <tr>
                                                            <td><img class="rounded-circle" width="35" src="images/profile/small/pic5.jpg" alt=""></td>
                                                            <td>Kyaw SOe</td>
                                                            <td>LU Lu aung</td>
                                                            <td>0912312041</td>
                                                            <td>a@gmail.com</td>
                                                            <td>MBBS</td>
                                                            <td>Heart</td>
                                                            <td>2008/11/28</td>
                                                            <td><span class="badge light badge-success"><b>Cancel</b></span></td>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <a href="#" class="btn btn-warning "> <b>Confrm</b>
                                                                    </a>
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
		function cardsCenter()
		{
			
			/*  testimonial one function by = owl.carousel.js */
			
	
			
			jQuery('.card-slider').owlCarousel({
				loop:true,
				margin:0,
				nav:true,
				//center:true,
				slideSpeed: 3000,
				paginationSpeed: 3000,
				dots: true,
				navText: ['<i class="fas fa-arrow-left"></i>', '<i class="fas fa-arrow-right"></i>'],
				responsive:{
					0:{
						items:1
					},
					576:{
						items:1
					},	
					800:{
						items:1
					},			
					991:{
						items:1
					},
					1200:{
						items:1
					},
					1600:{
						items:1
					}
				}
			})
		}
		
		jQuery(window).on('load',function(){
			setTimeout(function(){
				cardsCenter();
			}, 1000); 
		});
		
	</script>

</body>
</html>