<?php

	$host = "localhost";
	$db = "projeto";
	$user = "root";
	$pass = "";

	$nome = $_POST['nome'];
	$cpf = $_POST['cpf'];
	$email = $_POST['email'];
	$telefone = $_POST['fone'];
	$qr = $cpf;
	$adm = "Railson";

	$conn = mysqli_connect($host, $user, $pass, $db);

	if (!$conn) {
      die("falha na conexão: " . mysqli_connect_error());
	}
 

 
	$sql = "INSERT INTO pessoa ( nome_pessoa, cpf, email, fone) VALUES ( '$nome', '$cpf', '$email', '$telefone')";
	if (mysqli_query($conn, $sql)) {
      	echo "cadastrado com sucesso";
      	header('Location: qr.php?cpf='.$cpf);
	} else {
   	   echo "não foi possível realizar o cadastro: " . $sql . "<br>" . mysqli_error($conn);
	}
	mysqli_close($conn);






?>