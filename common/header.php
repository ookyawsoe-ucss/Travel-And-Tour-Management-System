<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	<div class="container">
		<a class="navbar-brand" href="index.html">Charlotte &nbsp; <span>Travel And Tourism Agency</span></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="oi oi-menu"></span> Menu
		</button>

		<div class="collapse navbar-collapse" id="ftco-nav">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item "><a href="index.php " class="nav-link">Home</a></li>
				<li class="nav-item"><a href="package.php" class="nav-link">Packages</a></li>
				<li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
				<li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
				<?php
				session_start();


				$name = $_SESSION['name'] ?? "";
				$uid = $_SESSION['id'] ?? "";

				$profile_image = $_SESSION['profile_image'] ?? "";
				
				if ($name) { ?>

					<div class="dropdown">
						<li class="nav-item"><a href="logout.php" id="dropdownMenuLink" data-toggle="dropdown" class="nav-link dropdown-toggle"><img src="<?php echo "userProfile/$profile_image" ?>" alt="profile image" width="40px" height="35px" class="rounded-pill">&nbsp;&nbsp;<?php echo "$name" ?> </a></li>
						<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">

							<a class="dropdown-item text-info" href="userprofile.php?id=1" style="font-family: Serif;"><span class="icon-user"></span>&nbsp;&nbsp;View Profile</a><hr>
							<a class="dropdown-item text-info" href="logout.php" style="font-family: Serif;"><span class="icon-sign-out"></span>&nbsp;&nbsp;Logout</a>

						</div>
					</div>


				<?php } else { ?>
					<li class="nav-item"><a href="login.php" class="nav-link">Login</a></li>
				<?php  }
				?>



			</ul>
		</div>
	</div>
</nav>