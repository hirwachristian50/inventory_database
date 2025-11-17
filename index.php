<?php 

session_start();
require 'authentication.php';
require 'connection.php';
header('location:dashboard.php');


?>