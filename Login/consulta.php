<!-- Conexão com o bando de dados. -->
<?php include_once('conexao-confi.php');
include('verifica-login.php');

?>


<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
        <!-- Título da página de relatórios. -->
		<title>Repor Confidencial - RSD</title>	
		<link rel="stylesheet" href="./css/stylereprt.css">
		<link rel="shortcut icon" href="./img/favicon.png">
	</head>
	<body>
		<img src="../img/report_rsd.png" class="logo_report" alt="">
		<h1 class="main-title">Relatórios Recebidos</h1>
		<?php
		$SendPesqReport = filter_input(INPUT_POST, 'SendPesqReport', FILTER_SANITIZE_STRING);
		if($SendPesqReport){
            // Atribuidno a variável result_relatorio, a consulta feira no banco
			$result_relatorio = "SELECT * FROM tblconfidencial";
            // Após a coleta do resultado da variável result_relatorio, iremos atribuir a vairável resultado_relatorio
			$resultado_Pesquisarelatorio = mysqli_query($conexao, $result_relatorio);
            // Como está vindo um array de dados (varias linhas), para podermos percorrer cada linha. 
			while($row_registro = mysqli_fetch_assoc($resultado_Pesquisarelatorio)){
                // Toda vez que o array passe pelo while, ele irá armazenar o registro, e aqui iremos informar qual linha ele irá apresentar.

				echo "<strong> Assunto:</strong>" . "<br>" . $row_registro['assunto'] . "<br>". "<br>";
				
				echo "<strong> Mensagem: </strong>" . "<br>" . $row_registro['mensagem'] . "<br>" . "<br>";
                
				echo "<strong> Data de Registro: </strong>" . "<br>" . $row_registro['data_envio'] . "<br>" . "<hr>";
               
			}
		}
		?>
	</body>
</html>
