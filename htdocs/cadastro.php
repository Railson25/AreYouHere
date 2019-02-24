<?php
	$host = "localhost";
	$db = "projeto";
	$user = "root";
	$pass = "";

	$nome = $_POST['nome'];
	$cpf = $_POST['cpf'];
	$email = $_POST['email'];
	$senha = $_POST['password'];

	$conn = mysqli_connect($host, $user, $pass, $db);

	if (!$conn) {
      die("falha na conexão: " . mysqli_connect_error());
	}
 

 
	$sql = "INSERT INTO admin (admin_nome, cpf, email, senha) VALUES ('$nome', '$cpf', '$email', '$senha')";
	if (mysqli_query($conn, $sql)) {
      	echo "cadastrado com sucesso";
	} else {
   	   echo "não foi possível realizar o cadastro: " . $sql . "<br>" . mysqli_error($conn);
	}
	mysqli_close($conn);
?>




