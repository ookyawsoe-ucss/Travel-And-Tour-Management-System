
<?php include("libs/fetch_data.php");?><!DOCTYPE html>
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
        <?php 
session_start();
    include 'Connection.php'; 

     

?>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                  <br>
                    <li>
                        <a href=""><i class="fa fa-dashboard"></i> Dashboard</a>
                    </li> 
                    <br>                   
                    <li>
                        <a href="bookinglist.php?id=$id"><i class="fa fa-truck"></i>Your Booking</a>
                    </li>                                      
                   <br>
                    <li>
                        <a href=".php"><i ><img width='17px' height='17px' src=" images/people-icon_7.png"></i> Profile</a>
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
                   
                 </div>

   
<form style="background-image: url(images/Mercedes.jpg);">

      <p style="font-size: 30px;">Our Routes:<br>

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
                    <td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp$name <br><br></td>                                        
                      
                           
                    </tr>
                  ";
              }

              ?>
   
                     
   
	</form>


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