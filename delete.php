<?php
include './database/config.php';
 if(isset($_GET['tid'])){
    $tid =$_GET['tid'];
    $sql = "DELETE FROM list where id = '$tid'";
    if(mysqli_query($conn,$sql)){
        header('location:index.php?msg=Record Deleted Successfully');
      

    }
    else{
        echo "<script>alter('delete Failed sorry!');</script>";
    }

 }
?>