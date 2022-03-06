<?php
       include 'Connection.php'; 

 if(isset($_POST["btnsubmit"])){
    $fileCount = count($_FILES['file']['name']);
    for($i=0;$i<$fileCount;$i++){
    $fileName=$_FILES['file']['name'][$i];
    $sql="insert into test (title,img) values('$fileName','$fileName')";
    if($connect ->query($sql)===true){
        echo"success"; 
    echo"<script>window.location='admin/addschedule.php';</script>";
}
    else{
     echo"err"; 
    }
    move_uploaded_file($_FILES['file']['tmp_name'][$i],'packageImage/'.$fileName);
    }

}
?>