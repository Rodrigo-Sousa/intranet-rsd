<?php
    // Inicinado session
    session_start();
    // Pegando todas as session e destruindo
    session_destroy();  
    header('Location: index.php');
    exit();
?>