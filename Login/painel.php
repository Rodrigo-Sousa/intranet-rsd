<?php
session_start();
include('verifica-login.php');
?>
<h2>Olá, <?php echo $_SESSION['usuario'];?></h2>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório</title>
    <link rel="shortcut icon" href="img/favicon.ico">
    <!--Fonte-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap" rel="stylesheet">
    <!--Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/painel.css">
    <!--Scripts-->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!--Fonte Awesome-->
    <script src="https://kit.fontawesome.com/12f6c26e59.js" crossorigin="anonymous"></script>
    <!--Progress Bar-->
    <script src="js/progressbar.min.js"></script>
    <!--Parallax-->
    <script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>
</head>
<body>
    <!--Cabeçalho da página-->
    <header class="header">
        <!--Usando uma classe do bootstrap, que ajusta o conteúdo para ficar melhor visualizado dentro dela.-->
        <div class="container" id="nav-container">
            <!--tag semântica da base de navegação da page.
            no qual já usaremos as classes do bootstrap, no qual estaremos fixando a nossa navegação no top.-->
            <nav class="navbar fixed-top">
                <!--inserindo o logo da página-->
                <a href="painel.php" class="navbar-brand">
                    <img id="logo" src="img/logo-rsd.png" alt="RSD - Developer">
                </a>
                <a href="logout.php" class="btn btn-danger">Sair</a>
            </nav>
        </div>
    </header>
                                <!--Sobre o formulário de Contato-->
                                <div id="contact-form">
                                    <!--Estamos utilizando uma estrutura do Bootstrap. No qual o container irá limitar a área, dependendo da largura
                                    do device da pessoa até um limite de pixel de largura (width)-->
                                    <div class="container">
                                        <!--Contendo as linhas do bootstrap-->
                                        <div class="row">
                                            <!--Separaremos os grid's, em colunas. Sendo uma linha de 12 colunas. Sendo inserido aqui o formulário para envio de mensagem-->
                                            <div class="col-12">
                                                <h3 id="About-RSD" class="main-title">Relatórios - Confidencial</h3>
                                            </div>
                                            <!--Respeitando uma determinada largura da tela.-->
                                            <div class="col-md-6">
                                            <!--Sendo uma classe do próprio bootstrap, fazendo a imagem se adaptar a esta div, não precisando
                                            se preocupar com largura e altura.-->
                                                <img class="img-fluid" src="img/secret.jpg" alt="Pasta com nome top secreto">
                                            </div>
                                              <!--Respeitando uma determinada largura da tela. Dividido os 12 em duas colunas com 6 linhas cada.-->
                                              <div class="col-md-6">
                                                  <!-- Form de contato, enviado por email -->
                                                    <form action="consulta.php" method="POST" id="form-contato" target="_blank">                                                        
                                                    <!--Inserindo os campos que necessitam ser preenchidos para envio ao BD com as informações confidênciais.-->
                                                    <div class="form-group">
                                                    </div>
                                                    <div class="form-group">
                                                      <!-- <label for="mensagem">Mensagem:</label>
                                                      <textarea class="form-control" name="mensagem" id="mensagem" placeholder="Digite a mensagem..."></textarea> -->
                                                    </div>
                                                    <div class="form-group text-center"><br>
                                                      <input class="main-btn-submit" name="SendPesqReport" type="submit" value="Gerar Relatórios">
                                                    </div>
                                 </form>
                            </div>
                       </div>
                   </div>
                </div>               
            </div>    
    </main>

    <!--Rodapé-->
    <footer>
        <div id="footer-content">
            <p>Continue nos acompanhando nas mídias sociais</p>
            <ul class="socials">
                <li><a href="https://www.facebook.com/" target="_blank"><i
                            class="fa fa-facebook"></i></a></li>
                <li><a href="https://www.linkedin.com/" target="_blank"><i
                            class="fa fa-linkedin"></i></a></li>
                <li><a href="https://instagram.com/" target="_blank"><i
                            class="fa fa-instagram"></i></a></li>
                <li><a href="https://www.youtube.com/" target="_blank"><i
                            class="fa fa-youtube"></i></a></li>
                <li><a href="https://br.pinterest.com/" target="_blank"><i
                            class="fa fa-pinterest"></i></a></li>
                <li><a href="https://www.tiktok.com/" target="_blank"><i
                            class="fab fa-tiktok"></i></a></li>
            </ul>
        </div>
        <div id="footer-bottom">
            <p>&copy;2022 - TI RSD | Developed by: Tecnologia da Informação RSD</p>
        </div>
    </footer>

   <!--Boa prática, CSS no head, e o JS no body da página.-->
    <script src="./js/scripts.js"></script>
    <script src="./js/formulario.js"></script>
 

</body>
</html>