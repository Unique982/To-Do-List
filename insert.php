<?php
include './database/config.php';
 if(isset($_POST['submit'])){
    $tesk = mysqli_real_escape_string($conn, $_POST['tesk']);
   if($tesk !=""){
    echo "please enter";
     
    $sql ="INSERT INTO list(tesk) VALUES('$tesk')";
    if(mysqli_query($conn, $sql)){
        header('location:index.php?msg= Add New Record Successfully');
    }
    else{
        header('location:index.php?msg=Insert Failed');
    
    }
}else{
    header('location:index.php?msg=please enter tesk');
   
    }
}
 
    
 



?>