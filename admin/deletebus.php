<?php
include('../Connection.php');
    

$id=$_GET['id'];

$delete="Delete from bus where id=$id";
$ret=mysqli_query($connect,$delete);

if ($ret)
{
	echo "<script> alert('Delete'); window.location.assign('bus.php'); </script>";
}
else
{
	echo mysqli_error($connect);
}


?>