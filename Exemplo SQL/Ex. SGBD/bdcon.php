<?php 

	$host = "localhost";	// Host name 
	$username = "root";		// Mysql username 
	$password = "";			// Mysql password 
	$db_name = "aula1";		// Database name

	// Connect to server and select databse.
	$ligaBD = mysqli_connect("$host", "$username", "$password")or die("cannot connect");
	$escolheBD = mysqli_select_db($ligaBD,"$db_name")or die("cannot select DB");

?>