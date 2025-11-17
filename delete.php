<?php 

// session_start();
require 'authentication.php';
require 'connection.php';

$id=$_GET['id'];

$delete=mysqli_query($conn,"DELETE FROM items WHERE id=$id");

if($delete){

    header('location:dashboard.php');
}


?>