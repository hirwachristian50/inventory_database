<?php 
// session_start();
require 'authentication.php';
require 'connection.php';

$id=$_GET['id'];

$select=mysqli_query($conn,"SELECT * FROM Items  WHERE id='$id'");

if(mysqli_num_rows($select) > 0){

    $row=mysqli_fetch_array($select);
    ?>
     <form action="" method="post">
        Name:<input type="text" name="Name" value="<?php echo $row['name'];?>">
Quantity:<input type="number" name="quantity" value="<?php echo $row['quantity'];?>">
<button type="submit" name="sub">UPDATE</button><br><br>
    </form>
    <?php
}
if(isset($_POST['sub'])){
    
    $name=$_POST['Name'];
    $quantity=$_POST['quantity'];

    $update=mysqli_query($conn,"UPDATE items SET name='$name',quantity='$quantity' WHERE id=$id");

    if($update){

        header('location:dashboard.php');
    }
}


?>