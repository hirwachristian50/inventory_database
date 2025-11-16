<?php 

require 'connection.php';
session_start();

?>

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
     password:<input type="password" name="password"><br><br>
     <button type="submit" name="sub">LOGIN</button>

</form>

<?php 

if(isset($_POST['sub'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = mysqli_query($conn, "SELECT * FROM users WHERE username='$username'");
    
    if(mysqli_num_rows($query) > 0){
        $row = mysqli_fetch_assoc($query);

        if($row['password'] === $password){

            $_SESSION['username'] = $username;

            header("Location: dashboard.php");
            exit;

        } else {
            echo "<script>alert('Wrong password');</script>";
        }

    } else {
        echo "<script>alert('please make a signup'); window.location.href='signup.php';</script>";
    }
}
?>

</body>
</html>
