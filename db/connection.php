<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "freeadd_db";
	
	$con = mysqli_connect($servername, $username, $password, $dbname) or die ("Cannot connect with mysqldb".mysqli_error());
	$set = mysqli_select_db($con,$dbname) or die ('Cannot connect with the database'.mysqli_error());
	return $con;
?>
