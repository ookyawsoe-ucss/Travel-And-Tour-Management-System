		<div class="nav-header">
			<a href="" class="brand-logo">
				<img src="images/logos.png" width="60px" alt="" class="rounded-circle">

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
									<a href="" class="dropdown-item ai-icon"class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
										<i class="fa-solid fa-unlock-keyhole text-info"></i>
										<span class="ms-2 text-info">Change Password </span>
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
							<span class="nav-text">Package</span>
						</a>
						<ul aria-expanded="false">
							<li><a href="addschedule.php">Add New Package</a></li>
							<li><a href="schedule.php">Package List</a></li>
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
					<!-- <br>
					<hr>
					<li><a class="has-arrow " href="../logout.php" aria-expanded="false">
							<i class="fa-solid fa-sign-out"></i> <span class="nav-text">Logout</span>
						</a>
						<ul aria-expanded="false">
							<li><a href="logout.php">Logout</a></li>


						</ul>
					</li> -->
				</ul>



			</div>
		</div>
		                <!-- Button trigger modal -->
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModalCenter">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Change Password</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                                                    </button>
                                                </div>
                                                <div class="modal-body">
												<div class="basic-form">
												<form>
                                        <div class="mb-3">
                                            <input type="text" class="form-control input-default " placeholder="Old Password" >
                                        </div>
										<div class="mb-3">
                                            <input type="text" class="form-control input-default " placeholder="Input New Password">
                                        </div>
                                        <div class="mb-3">
                                            <input type="text" class="form-control input-rounded" placeholder="Confirm Password">
                                        </div>
                                    </form>
                                </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
		<!--**********************************
            Sidebar end
        ***********************************-->

		<!--**********************************
            Content body start

