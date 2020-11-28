<?php
	$con = mysqli_connect("127.0.0.1", "root", "", "dodopizza");
	$query = mysqli_query($con, "SELECT * FROM dodopizza");
	$dodo=mysqli_query($con,"TRUNCATE TABLE trash");
	
	header('Location: index.php')
 ?>