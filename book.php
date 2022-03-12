<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
session_start();
    include 'Connection.php';


    $id = $_GET['id'];

    $delete = "select * from package  where id='$id'";
    $ret = mysqli_query($connect, $delete);
    $row = mysqli_fetch_array($ret);
    $pid = $row['id'];
    $pname = $row['p_name'];
    $date = $row['departure_date'];
    $day = $row['duration'];
    $price = $row['price'];
    $desc = $row['description'];
    $image = $row['package_image'];
    $ddate = date("d-M-Y", strtotime($date));
    $pcount = $row['available_count'];




    $name = $_SESSION['name'] ?? "";
    $uid = $_SESSION['id'] ?? "";

    if (!isset($_SESSION['name'])) {
        echo "<script>alert('You Need To Login');</script>";
        echo "<script>
                     window.location='login.php';
                     </script>";
    }







    ?>
     <?php



if (isset($_POST['btnregister'])) {
    $pid = $_POST['txtpid'];

    $cuid = $_POST['txtuid'];
    $username = $_POST['cusname'];
    $phone = $_POST['phone'];
    $quantity = $_POST['quantity'];
    $total = $_POST['total'];
    $nname = $_POST['pkname'];
    $ddday = $_POST['textdday'];
    $ddate = $_POST['txtdate'];
    $ddesc = $_POST['desc'];
    $aamount = $_POST['amount'];
    
    $dddate = date("Y-m-d", strtotime($ddate));

    $insert = "INSERT into booking (cid,phone,customer_name,total_price,ticket_count,p_name,price,descr,	depature_date,duration_day,p_id) values ('$uid','$phone','$username','$total','$quantity','$nname','$aamount','$ddesc','$dddate','$ddday','$pid')";
    
    // $insert = "Insert into test1 (c_id,phone,name,t_price,p_number,p_name,price,descr,d_date,d_day) values ('$cuid','$phone','$username','$total','$quantity','$nname','$aamount','$ddesc','$dddate','$ddday')";

    $ret1 = mysqli_query($connect, $insert);

    if ($ret1) {
        echo "<script>alert('Booking Successful! ');</script>";
    } else {
        echo mysqli_error($connect);
    }
}

?>
<form action="book.php" method="post">
<input type="text" class="form-control" name="txtpid" required="" value="<?php echo "$pid " ?>"readonly  >

<input type="text" class="form-control" name="txtuid" required="" value="<?php echo "$uid " ?>"readonly  >
<input type="text" class="form-control" name="pkname" required="" value="<?php echo "$pname" ?>"readonly  >

<input type="date" class="form-control" name="txtdate" value="<?php echo "$date" ?>"readonly >

<input type="text" class="form-control" name="textdday" value="<?php echo "$day" ?> Days"readonly  >

<input type="text" class="form-control" name="desc" value="<?php echo "$desc" ?>" >

<input type="text" class="form-control" name="amount" id="amount" value="<?php echo "$price" ?>  MMK"readonly >
<input type="text" class="form-control" name="cusname" value="<?php echo "$name" ?>">

<input type="phone" placeholder="Enter Phone Number" class="form-control" name="phone" required="">

<input type="number" placeholder="Enter Amount of Passenger" class="form-control" name="quantity" id="quantity" required="" min="2" max="<?php echo "$pcount" ?>" oninput="calc();">

<input type="number" placeholder="Total Price" class="form-control" name="total" id="total" required="" oninput="calc();">

<input type="submit" name="btnregister" class="btn btn-lg btn-info w-100  m-auto" style="width: 100px; height:50px" value="Booking">

</form>
<script>
            function calc() {
                var amount = document.getElementById("amount").value;
                var amount = parseInt(amount, 10);
                var quantity = document.getElementById("quantity").value;
                var quantity = parseInt(quantity, 10);
                var total = amount * quantity;
                document.getElementById("total").value = total;
            }
        </script>

</body>
</html>