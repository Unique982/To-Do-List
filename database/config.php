<?php
$servername ="localhost:3307";
$username ="root";
$password ="";
$dbname ="to do list";
$conn = mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
    die("Could not connect to server");
}

?>