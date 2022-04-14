<?php

    session_start();
    // Fazendo validação da sessão do usuário, negando a condição, se o usuário não for autenticado
    if(!$_SESSION['usuario']){
        header('Location: index.php');
        exit();
    }

?>