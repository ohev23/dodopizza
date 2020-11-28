<?php 
$con = mysqli_connect("127.0.0.1", "root", "", "dodopizza");
 mysqli_query($con, "SELECT * FROM eda WHERE id='{$_GET['id']}'");
   mysqli_query($con, "INSERT INTO trash (img,name,description,price) VALUES ('".$_GET['img']."', '".$_GET['name']."',  '".$_GET['description']."', '".$_GET['price']."')");
header("Location:index.php")
?>