<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">

     username:<input type="text" name="username"><br><br>
     email:<input type="email" name="email"><br><br>
     password:<input type="password" name="password"><br><br>
     <!-- created_at:<input type="text" name="created_at"><br><br> -->
     <button type="submit" name="sub">SIGN UP</button>

</form>
</body>

<?php 

require 'connection.php';

if(isset($_POST['sub'])){

    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    // $created_at=$_POST['created_at'];

    $signup=mysqli_query($conn,"INSERT INTO users(username,email,password) VALUES('$username','$email','$password')");

    if($signup){

        echo "<script>alert(' you have successfully signed up');window.location.href='login.php';</script>";
        exit;
    }

    else{

       echo "<script>alert(' error you have not signed up');window.location.href='signup.php';</script>"; 
    }
}

?>
</html>