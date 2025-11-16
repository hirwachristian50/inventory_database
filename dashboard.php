<?php
session_start();
require 'authentication.php';
require 'connection.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Welcome,<?php echo htmlspecialchars($_SESSION['username']); ?>!</h2>
<a href='logout.php'><button type="submit" style="background-color:grey;">Logout</button></a><br><br>
<h2>Add New Item</h2>
<form action="insert.php" method="POST">
Name:<input type="text" name="Name">
Quantity:<input type="number" name="quantity">
<button type="submit" name="sub">Add</button><br><br>

</form>
<h3>Item List</h3>
    <table border="1" cellspacing="0" cellpadding="2">
        <th>ID</th>
        <th>Name</th>
        <th>Quantity</th>
        <th colspan="2">Action</th>
    


<?php 


$select=mysqli_query($conn,"SELECT * FROM items");

if(mysqli_num_rows($select)){

    while($row=mysqli_fetch_array($select)){

        echo "<tr>";

        echo "<td>".$row['id']."</td>";
         echo "<td>".$row['name']."</td>";
          echo "<td>".$row['quantity']."</td>";
          echo "<td><a href='update.php?id=".$row['id']."'><button>UPDATE</button></a></td>";
          echo "<td><a href='delete.php?id=".$row['id']."'><button>DELETE</button></a></td>";
        echo "</tr>";
    }

}



?>

</table>
</body>
</html>