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
       include 'Connection.php'; 
    //    include 'testone.php'; 


    ?>
    <form action="testone.php" method="post" enctype="multipart/form-data">
    <input type="file" name="file[]" multiple id="file">
    <input type="submit" value="Upload" name="btnsubmit">
    </form>
</body>
</html>