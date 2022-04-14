<?php 
// estabelecendo uma unica conexão com o arquivo contendo os dados do MySQL;
	include_once('conexao-confi.php');
	// Quais campos serão "armazenados" da página intranet.php e em quais campos no banco eles serão armazenados;
	$assunto = $_POST['assunto'];
	$mensagem = $_POST['mensagem'];
	// string de conexão com o MySQL, quais as variáveis eles serão armazenados;
	$conn = mysqli_connect($servidor, $usuario, $senha, $database);
	mysqli_select_db($conn,'$database');
	// A inser~ção dos dados coletados nos respectivos campos do Banco de Dados.
	$sql = "INSERT INTO tbLconfidencial (assunto, mensagem, data_envio) VALUES ('$assunto', '$mensagem', NOW())";
	// Condição a ser apresentado quando enviado o formulário, fazendo o reload para a página index.php;
	if (mysqli_query($conn, $sql)) {
	echo "<script>alert('Formulário Enviado com SUCESSO!'); window.location = 'index.php';</script>";
	// Se der erro, retornar a mensagem a baixo;
	}else{
	echo "Deu erro: " . $sql . "<br>" . mysqli_error($conn);
	}
	 mysqli_close($conn);



?>

