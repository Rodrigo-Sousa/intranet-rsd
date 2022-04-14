<?php
// Credênciais de acesso ao servidor, o usuario, senha e o banco de dados
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$database = "intranet";
	
	//Criar a conexão
	$conn = mysqli_connect($servidor, $usuario, $senha, $database);
?>