<?php 

$conn=mysqli_connect("localhost","root","","inventory_database");
if($conn->connect_error){

    die("connection error".$conn->connect_error);
}


?>