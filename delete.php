<?php
	$con = mysqli_connect("127.0.0.1", "root", "", "dodopizza");
	mysqli_query($con, "DELETE FROM trash WHERE id='{$_GET['id']}' ");
	mysqli_query($con, "SELECT SUM(trash)");
	$query = mysqli_query($con, "SELECT * FROM dodopizza");
	header('Location: index.php')
 ?>