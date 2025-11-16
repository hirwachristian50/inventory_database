
<?php 
require 'authentication.php';
 require 'connection.php';
 if(isset($_POST['sub'])){

    $name=$_POST['Name'];
    $quantity=$_POST['quantity'];

    $insert=mysqli_query($conn,"INSERT INTO items(name,quantity) values('$name','$quantity')");

    if($insert){
        header('location:dashboard.php');
        exit;
    }

 }
 


?>