<?php 
    // Sempre que trabalharmos com SESSION, precisamos informar que estamos utilizando para que o PHP entenda que estamos trabalhando com seções.
    session_start();

    include('conexao.php');
    // fazendo a verificação do campo ao ser preenchido, não aceitar que eles sejam vazio.Se for, retornar ao menu
    if(empty($_POST['usuario']) || empty($_POST['senha'])) {
        header('Location: index.php');
        exit();
    }

    // criando a variável usuario, para validar o que o usuário está digitando. Protegendo contra ataque de SQL Inject
    $usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
    $senha = mysqli_real_escape_string($conexao, $_POST['senha']);

    // Query que verifica no MySQL se o login está correto ou não.
    $query = "SELECT usuario FROM tblusuariointranet WHERE usuario = '{$usuario}' AND senha = md5('{$senha}')";
    
    // Executando a query
    $result = mysqli_query($conexao, $query);

    // criando uma nova variável. Fazendo a validação. 0 quando der erro e 1 quando os dados estiverem corretos.
    $row = mysqli_num_rows($result);

    // Fazendo a validação
    if($row == 1){
        // Armazenando o username, para depois validarmos se o usuário foi autenticado ou não.
        $_SESSION['usuario'] = $usuario;
        header('Location: painel.php');
        exit();

    }else{
            // Quando o usuário não for válido
             $_SESSION['nao-autenticado'] = true;
        header('Location: index.php');
        exit();
    }

?>