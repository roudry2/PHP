<?php 

	require_once 'bdcon.php';

	$nome = $_POST['nome'];
	$pass = $_POST['pass'];

	$com = "INSERT INTO users (uti,pass) VALUES ('$nome','$pass')";
	$result = mysqli_query($ligaBD,$com);

	if ($result) {
		echo "Registado com sucesso";
	}else{
		echo "Erro";
	}

 ?>