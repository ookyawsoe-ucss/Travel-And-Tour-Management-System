
<!DOCTYPE html>
<html >
<head>
    <meta charset="utf-8" />
  
 <link rel="icon" sizes="76x76"  href="../images/mylogo.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>BUS BOOKING SYSTEM</title>
  <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>

    <div id="wrapper">

        <nav class="navbar navbar-default top-navbar" role="navigation">
            
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="">Bus Booking</a>

            </div>

            <ul class="nav navbar-top-links navbar-right">
                 <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu">
              <!--login/logout area starts-->

           <?php 
session_start();
    include 'Connection.php'; 
     $id=$_GET["id"];
?>
             
            <!--login/logout area ends-->
            <li class="divider"></li>
            <li><a href="logout.php"class="btn navbar-btn btn-primary" ><i class="fa fa-power-off"></i> <strong style="color:white">sign out</strong> </a></li>

            <li><a href="profile.php?id=<?php echo $id;?>"class="btn navbar-btn btn-primary" ><i><img width='17px' height='17px' src=" images/people-icon_7.png"></i> <strong style="color:white">Profile</strong> </a></li>
          </ul>
           
        </nav>
        <!--/. NAV TOP  -->
        
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                  <br>

                  
                                    
                    <li>
                        <a href="bookinglist.php?"><i class="fa fa-truck"></i>Your Booking</a>
                    </li>  
                                                         
                   <br>
                 
                     <li>
                        <a href="logout.php"><i >∎</i> Back To Main Menu</a>
                    </li>


                        </ul>
                    </li>
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
       <div class="row">
                    <div class="col-md-12">
                        
                  </div> 
                 </div>


<title>BHW - Bus Company </title>

 
  <br>

                       
                     
    
   <!DOCTYPE html>
<html>
<head>
<style>
table {
  border-collapse: collapse;
  width: 50%;
}

th, td {
  padding: 10px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

tr:hover {background-color:#f5f5f5;}
</style>
</head>
<body>
	

<h1 align="center" > </h1>

  <body>
    
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	       
           


	

 
	<table > 

							  <tr>

							  	<td> Bookingid</td>
                  <td> Route</td>
							    <td>Booking Date </td>
							    <td>Depature Date </td>
                  <td>Number of Seats </td>
                  <td>Price </td>
							    					   
							  </tr>

							<?php
             

							$select="select * from p pa ,customer c where c.customerid=pa.customerid  and c.customerid=$id";
							$ret=mysqli_query($connect,$select);
							$count=mysqli_num_rows($ret);
             
							for ($i=0; $i < $count ; $i++) 
							{ 
							   $row=mysqli_fetch_array($ret);
							  $bid=$row['bookingid'];
							  $cid=$row['customerid'];
							   $bdate=$row['bookingdate'];
                  $route=$row['route'];
                   $ddate=$row['ddate'];
                    $seat=$row['seat'];
                     $payment=$row['tpayment'];

							  echo "
							      <tr>
                    
                    
                    <td>$bid </td>   
               
                     <td>$route </td>  
                    <td>$bdate</td>
                        	
							        
               
                   
                    <td>$ddate</td>
                          
                       <td>$seat</td>  
                         <td>$payment</td>  
                      
                       
							      </tr>

							    ";
							}

							?>
              
							</table> 

  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap-material-design.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<script src="assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>