<?php 
session_start();
    include 'Connection.php'; 
    if(!isset($_SESSION['adminid']))
   {
        echo"<script>alert('You Need To Login');</script>";
      echo "<script>
                window.location='login.php';
                </script>";
   }

?>
<?php include("libs/fetch_data.php");?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
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

           
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a href="header-user.php"><i class="fa fa-dashboard"></i> Dashboard</a>
                    </li>
                    
                    <li>
                        <a href="buslist.php"><i class="fa fa-truck"></i>Buses</a>
                    </li>
                    <li>
                        <a href="townshiplist.php">  <i >⏏</i> Townships</a>
                    </li>
                   
                  
                    <li>
                        <a href="driverlist.php"><i ><img width='17px' height='17px' src=" images/people-icon_7.png"></i> Driver</a>
                    </li>
                    <li>
                        <a href="registertownship.php"><i >∎</i> Go to Register Forms</a>
                    </li>
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
                        <h1 class="page-header">
                            BHW Express Admin Part 
                            
                        </h1>
                        <h2 >Route List</h2>

                       <h4 align="ltft" bold><a href='route.php?'><img  width='40' height='40'  src="images/icon.png"></a> Add New Routes</h4>
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
    
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar" >
	    <div class="container" enctype="multipart/form-data">
	       
           


	

 
	<table > 

							  <tr>

							  	<tr>
                  <td>Route Name</td>    
                  <td>Route id </td>                
                                  
                  <td>Delete</td>
                 <td>Update</td>

                </tr>

              <?php
              $select="select * from route";
              $ret=mysqli_query($connect,$select);
              $count=mysqli_num_rows($ret);

              for ($i=0; $i < $count ; $i++) 
              { 
                $row=mysqli_fetch_array($ret);
                $id=$row['routeid'];
                $name=$row['name'];
                  
              
                
                echo "
                    <tr>
                    <td>$name</td>
                      <td>$id</td>
                      
                      <td><a href='routedelete.php?id=$id'><img  src='images/delete.png' width='30px' height='30px' ></a></td>   
                       <td><a href='routedeupdate.php?id=$id'><img src='images/edit.jpg' width='30px' height='30px' ></a></td>   
                    
                    
                       <td></td>
                      
                           
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