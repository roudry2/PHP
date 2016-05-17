<?php 

	require_once 'bdcon.php';

	$uti = $_POST['uti'];
	$pass = $_POST['pass'];

	$sql = "SELECT * FROM users WHERE uti='$uti' AND pass='$pass'";
	$result = mysqli_query($ligaBD, $sql);
	$num = mysqli_num_rows($result);

	if ($num == 1) {
		header('location: welcome.html');
	}else {
		echo "error: user not registered";
	}


 ?>