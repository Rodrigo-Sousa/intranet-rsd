<!-- Declarando a utilização do HTML5 -->
<!DOCTYPE html>
<!-- Informando o idioma da página -->
<html lang="pt-br">

<head>
    <!-- Declando qual o dicionário de caracter iremos renderizar a página -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Título da aba no browser. -->
    <title>Intranet - RSS</title>
    <link rel="shortcut icon" href="../img/favicon.ico">
    <!--Fonte da página-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap" rel="stylesheet">
    <!--Linkando Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- CSS Interno -->
    <link rel="stylesheet" href="../css/styles-intranet.css">
    <!--Scripts correspondente ao Bootstrap-->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
    <!--Fonte Awesome-->
    <script src="https://kit.fontawesome.com/12f6c26e59.js" crossorigin="anonymous"></script>
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
            <nav class="navbar navbar-expand-lg fixed-top">
                <!--inserindo o logo da página-->
                <a href="index.php" class="navbar-brand">
                    <img id="logo" src="../img/logo-rsd.png" alt="letras RSD">
                </a>
                <!--Para o menu de hambúrger, aparecendo ao usufruir no mobile.
                    Usando atributos no bootstrap-->
                <!-- Botão collapse, menu hambúrger -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-links"
                    aria-controls="navbar-links" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!--Lista de seções do nosso site.-->
                <div class="collapse navbar-collapse justify-content-end" id="navbar-links">
                    <!--Os links do nosso menu-->
                    <div class="navbar-nav">
                        <!-- Portal para o site da ADP (folha de pagamento) -->
                        <a href="https://www.adpweb.com.br" target="_blank" class="nav-item nav-link"
                            id="services-menu">Acesso ADP</a>
                        <!--Criando a divisão do dropdown - para a inserção dos botões no menu SGP-->
                        <div class="dropdown show">
                            <!--Primiro link do Dropdown, para abrir o menu suspenso.-->
                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdown-menu-link"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">SGP</a>
                            <div>
                                <!--Chamar o id, para apresentar os itens em Dropdown, com os links-->
                                <div class="dropdown-menu" aria-labelledby="dropdown-menu-link">
                                    <a class="dropdown-item" href="../doc/SGP/Atendimento ao Cliente.rar"
                                        download="Atendimento ao Cliente.rar">Atendimento ao Cliente</a>
                                    <a class="dropdown-item" href="../doc/SGP/Comercial.rar"
                                        download="Comercial.rar">Comercial</a>
                                    <a class="dropdown-item" href="../doc/SGP/Contabilidade Societária.rar"
                                        download="Contabilidade Societária.rar">Contabilidade Societária</a>
                                    <a class="dropdown-item" href="../doc/SGP/Controladoria.rar"
                                        download="Controladoria.rar">Controladoria</a>
                                    <a class="dropdown-item" href="../doc/SGP/Departamento Pessoal.rar"
                                        download="Departamento Pessoal.rar">Departamento Pessoal</a>
                                    <a class="dropdown-item" href="../doc/SGP/Diretoria Comercial.rar"
                                        download="Diretoria Comercial.rar">Diretoria Comercial</a>
                                    <a class="dropdown-item" href="../doc/SGP/Financeiro.rar"
                                        download="Financeiro.rar">Financeiro</a>
                                    <a class="dropdown-item" href="../doc/SGP/Fiscal.rar" download="Fiscal.rar">Fiscal</a>
                                    <a class="dropdown-item" href="../doc/SGP/Incorporação.rar"
                                        download="Incorporação.rar">Incorporação</a>
                                    <a class="dropdown-item" href="../doc/SGP/Manual.rar" download="Manual.rar">Manual</a>
                                    <a class="dropdown-item" href="../doc/SGP/Marketing.rar"
                                        download="Marketing.rar">Marketing</a>
                                    <a class="dropdown-item" href="../doc/SGP/Novos Negócios.rar"
                                        download="Novos Negócios.rar">Novos Negócios</a>
                                    <a class="dropdown-item" href="../doc/SGP/Técnica.rar"
                                        download="Técnica.rar">Técnica</a>
                                    <a class="dropdown-item" href="../doc/SGP/TI.rar" download="TI.rar">TI</a>
                                    <!-- Fechamento do os links contido no dropdown  -->
                                </div>
                                <!-- Fecha a divisão da separção do botão -->
                            </div>
                            <!-- Fecha a div dropdown show -->
                        </div>

                        <!--Criando a divisão do dropdown - para a inserção dos botões no menu Nova Marca-->
                        <div class="dropdown show">
                            <!--Primiro link do Dropdown, para abrir o menu suspenso.-->
                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdown-form-padroes"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Formulários
                                Padrões</a>
                            <div>
                                <!--Chamar o id, para apresentar os itens em Dropdown, com os links-->
                                <div class="dropdown-menu" aria-labelledby="dropdown-form-padroes">
                                    <a class="dropdown-item"
                                        href="./../doc/FORMULÁRIOS PADRÕES/DECLARAÇÃO DE SAUDE.pdf.pdf" target="_blank"
                                        download="DECLARAÇÃO DE SAUDE">DECLARAÇÃO DE SAUDE</a>
                                    <a class="dropdown-item" href="../doc/FORMULÁRIOS PADRÕES/FICHA DE ADESÃO ODONTO.pdf"
                                        target="_blank" download="FICHA DE ADESÃO ODONTO.pdf">FICHA DE ADESÃO ODONTO</a>
                                    <a class="dropdown-item"
                                        href="../doc/FORMULÁRIOS PADRÕES/FICHA DE CONTROLE DE EPIs MODELO.../doc"
                                        download="FICHA DE CONTROLE DE EPIs MODELO.../doc">FICHA DE CONTROLE DE EPIs
                                        MODELO</a>
                                    <a class="dropdown-item" href="../doc/FORMULÁRIOS PADRÕES/FICHA FORNECEDOR.xlsm"
                                        download="FICHA FORNECEDOR.xlsm">FICHA FORNECEDOR</a>
                                    <a class="dropdown-item" href="../doc/FORMULÁRIOS PADRÕES/JUSTIFICATIVA PONTO.xlsx"
                                        download="JUSTIFICATIVA PONTO.xlsx">JUSTIFICATIVA PONTO</a>
                                    <a class="dropdown-item" href="../doc/FORMULÁRIOS PADRÕES/REEMBOLSO.xlsx"
                                        download="REEMBOLSO.xlsx">REEMBOLSO</a>
                                </div>
                            </div>
                            <!--Terminado a parte de HTML, as marcações feitas corretas, agora será customizado no CSS a aparência-->
                        </div>
                        <!--Criando a divisão do dropdown - para a inserção dos botões-->
                        <div class="dropdown show">
                            <!--Primiro link do Dropdown, para abrir o menu suspenso.-->
                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button"
                                id="dropdown-pasta-empresa" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">Pastas Empresas</a>
                            <div>
                                <!-- Usnado  Search_Filter Dropdown -->
                                <div id="meu-dropdown" class="dropdown-menu" aria-labelledby="dropdown-pasta-empresa">
                                    <!-- Campo de pesquisa, com uso da função do JS. -->
                                    <input type="text" placeholder="Pesquisa a empresa..." id="minha-pesquisa"
                                        onkeyup="filterFunction()">
                                    <!--Divisão contendo o embrulho dos links a serem apresentados no dropdown suspenso.-->
                                    <div class="dorpdown-contant-wrapper">
                                        <!--Links para dowloand de arquivos ao serem clicados.-->
                                        <a href="../doc/EMPRESAS/ALBATROZ.rar" download="ALBATROZ.rar">ALBATROZ</a>
                                        <a href="../doc/EMPRESAS/ANTONIO.rar" download="ANTONIO.rar">ANTONIO</a>
                                        <a href="../doc/EMPRESAS/ASSET.rar" download="ASSET.rar">ASSET</a>
                                        <a href="../doc/EMPRESAS/BACURAU.rar" download="BACURAU.rar">BACURAU</a>
                                        <a href="../doc/EMPRESAS/BERGAMO.rar" download="BERGAMO.rar">BERGAMO</a>
                                        <a href="../doc/EMPRESAS/C3 PARKING.rar" download="C3 PARKING.rar">C3 PARKING</a>
                                        <a href="../doc/EMPRESAS/FORTUNI-T.rar" download="FORTUNI-T.rar">FORTUNI-T</a>
                                        <a href="../doc/EMPRESAS/HBR.rar" download="HBR.rar">HBR</a>
                                        <a href="../doc/EMPRESAS/IEPE.rar" download="IEPE.rar">IEPE</a>
                                        <a href="../doc/EMPRESAS/IPIRANGA.rar" download="IPIRANGA.rar">IPIRANGA
                                            SPE</a>
                                        <a href="../doc/EMPRESAS/JACARANDÁ.rar" download="JACARANDÁ.rar">JACARANDÁ</a>
                                        <a href="../doc/EMPRESAS/KINEA.rar" download="KINEA.rar">KINEA</a>
                                        <a href="../doc/EMPRESAS/MA.rar">MA</a>
                                        <a href="../doc/EMPRESAS/MENTOR.rar" download="MENTOR.rar">MENTOR</a>
                                        <a href="../doc/EMPRESAS/MORUMBI.rar" download="MORUMBI.rar">MORUMBI</a>
                                        <a href="../doc/EMPRESAS/NP.rar" download="NP.rar">NP</a>
                                        <a href="../doc/EMPRESAS/PAINEIRA.rar" download="PAINEIRA.rar">PAINEIRA</a>
                                        <a href="../doc/EMPRESAS/RIO.rar" download="RIO.rar">RIO</a>
                                        <a href="../doc/EMPRESAS/ROTA BRASIL.rar" download="ROTA BRASIL.rar">ROTA
                                            BRASIL</a>
                                        <a href="../doc/EMPRESAS/SETOS ALVES.rar" download="SETOS ALVES.rar">SETOS
                                            ALVES</a>
                                        <a href="../doc/EMPRESAS/SJC.rar" download="SJC.rar">SJC</a>
                                        <a href="../doc/EMPRESAS/SR.rar" download="SR.rar">SR</a>
                                        <a href="../doc/EMPRESAS/TAPIRAPÉ.rar" download="TAPIRAPÉ.rar">TAPIRAPÉ.
                                            Matarazzo</a>
                                        <a href="../doc/EMPRESAS/VILA.rar" download="VILA.rar">VILA</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Criando a divisão do dropdown - para a inserção dos botões no menu Nova Marca -->
                        <div class="dropdown show">
                            <!--Primiro link do Dropdown, para abrir o menu suspenso.-->
                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdown-nova-marca"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Nova Marca</a>
                            <div>
                                <!--Chamar o id, para apresentar os itens em Dropdown, com os links-->
                                <div class="dropdown-menu" aria-labelledby="dropdown-nova-marca">
                                    <a class="dropdown-item" href="../doc/NOVA MARCA/1.LOGOS.rar"
                                        download="1.LOGOS.rar">LOGOS</a>
                                    <a class="dropdown-item" href="doc/NOVA MARCA//2.PAPEL TIMBRADO.rar"
                                        download="2.PAPEL TIMBRADO.rar">PAPEL TIMBRADO</a>
                                    <a class="dropdown-item" href="doc/NOVA MARCA/3.PPT.rar"
                                        download="3.PPT.rar">PPT</a>
                                    <a class="dropdown-item" href="doc/NOVA MARCA/4. ATA DE REUNIÃO.rar"
                                        download="4. ATA DE REUNIÃO.rar">ATA DE REUNIÃO</a>
                                    <a class="dropdown-item" href="doc/NOVA MARCA/5. WALLPAPER.rar"
                                        download="5. WALLPAPER.rar">WALLPAPER</a>
                                    <a class="dropdown-item" href="doc/NOVA MARCA/6. WALLPAPER VÍDEO CHAMADA.rar"
                                        download="6. WALLPAPER VÍDEO CHAMADA.rar">WALLPAPER VÍDEO CHAMADA</a>
                                    <a class="dropdown-item" href="doc/NOVA MARCA/7. ASSINATURA DE EMAIL.rar"
                                        download="7. ASSINATURA DE EMAIL.rar">ASSINATURA DE EMAIL</a>
                                    <a class="dropdown-item" href="doc/NOVA MARCA/8. WHATSAPP.rar"
                                        download="8. WHATSAPP.rar">WHATSAPP</a>
                                    <a class="dropdown-item" href="doc/NOVA MARCA/9. E-BOOK DE MARCA.rar"
                                        download="9. E-BOOK DE MARCA.rar">E-BOOK DE MARCA</a>
                                </div>
                            </div>
                        </div>
                        <!-- Link para preencher formulário de forma confidencial, atendendo ao padrão Complice -->
                        <a href="#contact-form" class="nav-item nav-link">Canal Confidencial</a>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <!--O conteúdo principal da nossa página-->
    <main>
        <!--slide tomando a largura toda da página-->
        <div class="container-fluid">
            <!--Div que iremos inserir o nosso carossel, com uma classe direto do bootstrap-->
            <div id="main-slider" class="carousel slide" data-ride="carousel">
                <!--criar os bugs dos slides, os botões de navegação do carrousel que são responsávies dependnedo do slide que esteja ativo.
            Criando uma lista ordenada-->
                <ol class="carousel-indicators">
                    <!--servindo para saber em qual slide está, ao ser clicado indo para um slide especifico sendo a class="active", informando qual deve começar-->
                    <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                    <li data-target="#main-slider" data-slide-to="1"></li>
                    <li data-target="#main-slider" data-slide-to="2"></li>

                </ol>
                <!--A classe inner (interna) do carousel, sendo o responsálve pelo conteúdo dos slides-->
                <div class="carousel-inner">
                    <!--O item do carrousel, com classe do bootstrap que serve para deixar a largura 100%-->
                    <!--O item do carrousel, com classe do bootstrap que serve para deixar a largura 100%-->
                    <div class="carousel-item active">
                        <a href="https://www.tiktok.com" target="_blank">
                            <img src="../img/banners/Banners Intranet1.jpg" class="d-block w-100"
                                alt="TikTok RSD">
                        </a>
                    </div>
                    <!--O item do carrousel, com classe do bootstrap que serve para deixar a largura 100%-->
                    <div class="carousel-item">
                        <img src="../img/banners/Banners Intranet2.jpg" class="d-block w-100" alt="Novidades RSD.">
                    </div>
                    <!--O item do carrousel, com classe do bootstrap que serve para deixar a largura 100%-->
                    <div class="carousel-item">
                        <img src="../img/banners/Banner Intranet - Aniversariantes.jpg" class="d-block w-100"
                            alt="Aniversariantes do mês">
                    </div>
                    <!--Setas para navegação do carousel. Lembrando de colocar toda a configuração dentro da tag <a></a>-->
                    <a href="#main-slider" class="carousel-control-prev" role="button" data-slide="prev">
                        <!--A onde será anexado na linha o ícone para voltar-->
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <!--Span para escrever uma legenda-->
                        <span class="sr-only">Previous</span>
                    </a>
                    <!--Setas para navegação do carousel-->
                    <a href="#main-slider" class="carousel-control-next" role="button" data-slide="next">
                        <!--A onde será anexado na linha o ícone para voltar-->
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <!--Span para escrever uma legenda-->
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <!--Serviços da empresa-->
            <div id="services-area">
                <div class="container">
                    <!--para podermos fazer o grid, separando a seção-->
                    <div class="row">
                        <div class="col-12">
                            <h3 class="main-title">Área de arquivos importantes</h3>
                        </div>
                        <div class="col-md-4 service-box">
                            <!--inserindo o ícone-->
                            <i class="fas fa-mobile-alt"></i>
                            <h4>Lista de Ramais - RSD</h4>
                            <p>Lista de ramais contendo os nomes, departamentos e números dos nossos colaboradores.</p>
                            <a class="link-area-importante"
                                href="../img/ramais.png"
                                target="_blank">Abrir lista de Ramais</a>
                        </div>
                        <div class="col-md-4 service-box">
                            <!--inserindo o ícone-->
                            <i class="fas fa-sitemap"></i>
                            <h4>Sistema de ERP</h4>
                            <p>Acompanhamento e aberturas de chamado juntamente à ERP System.</p>
                            <a class="link-area-importante" href="https://google.com" target="_blank">Portal
                                ERP System</a>
                        </div>
                        <div class="col-md-4 service-box">
                            <!--inserindo o ícone-->
                            <i class="fas fa-phone-alt"></i>
                            <h4>Telefones úteis</h4>
                            <p>Estão contidos aqui uma lista de telefones úteis do condomínio São Luiz.</p>
                            <a class="link-area-importante" href="#">Telefones úteis</a>
                        </div>
                        <div class="col-md-4 service-box">
                            <!--inserindo o ícone-->
                            <i class="fas fa-handshake"></i>
                            <h4>ESG</h4>
                            <p>ESG é uma sigla para Environmental, Social and Governance (Ambiental, Social e
                                Governança, em tradução livre).</p>
                            <a class="link-area-importante" href="#">ESG</a>
                        </div>
                        <div class="col-md-4 service-box">
                            <!--inserindo o ícone-->
                            <i class="fas fa-clipboard-list"></i>
                            <h4>Formulários padrões</h4>
                            <p>Disponíveis os formulários padrões da RSD, como reembolso, justificativa de cartão de
                                pontos, planos de saúde, Cadstro Fornecedores e EPI's.</p>
                            <button class="btn-area-arquivos" id="btn-form">Saiba mais</button>
                        </div>
                        <div class="col-md-4 service-box">
                            <!--inserindo o ícone-->
                            <i class="fas fa-building"></i>
                            <h4>Informações das Empresas</h4>
                            <p>Aqui contidos, estão arquivos com informações dos CNPJ's das empreas, Contrato Social,
                                informações armazenadas na Pasta Empresas.</p>
                            <button class="btn-area-arquivos" id="btn-pasta">Saiba mais</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--Nova seção dentro do container fluido. Conteúdo do site-->
            <!-- Dados da empresa com Parallax de background-->
            <div id="data-area">
                <div class="container">
                    <div class="row">
                        <!--Separaremos os grid's, em colunas. Sendo uma linha de 12 colunas-->
                        <div class="col-12">
                            <h3 id="About-rsd" class="main-title">Nossos valores</h3>
                        </div>
                        <!--Dividindo a apresentação dos conteúdos em 3 colunas cada uma com 4 colunas de largura.-->
                        <div class="col-md-4">
                            <h4 class="about-title">Missão</h4>
                            <p>Compreender, mediante a busca permanente e sistemática de informações relevantes, as expectativas e desejos dos compradores e investidores dos diferentes tipos de imóveis, traduzindo esse conhecimento em edificações, com altos índices de percepção e reconhecimento pelos clientes.</p>
                        </div>
                        <!-- Segunda divisão das colunas, somando assim, 8 colunas num total de 12.-->
                        <div class="col-md-4">
                            <h4 class="about-title">Visão</h4>
                            <p>Ser a empresa referência em planejamento, desenvolvimento e incorporação de imóveis inovadores e de qualidade, no Brasil.</p>
                        </div>
                        <div class="col-md-4">
                            <!--Ultima coluna, somando assim 12 colunas, para que seja apresentandos os valores da empresa.-->
                            <h4 class="about-title">Valores</h4>
                            <p>A ética é o traço comum e preponderante em todas as ações da RSD. Carinho e Respeito pelas pessoas traduzem o sentimento da RSD em relação aos cidadãos e a sociedade.</p>
                            <p>A RSD acredita que apenas a busca permanente e incansável pela inovação é capaz de preservar seus ativos tangíveis e intangíveis. Agilidade em todas as etapas dos diferentes processos é o que garante a RSD pontualidade e compromisso no cumprimento dos prazos.</p>
                            <p>Na RSD, existe total correspondência entre pensamento e ação, entre o que diz ser e o que verdadeiramente faz, passível de permanente comprovação pela transparência característica de suas movimentações.</p>
                        </div>
                    </div>
                    <span id="site-rsd">
                        <p>Para maiores informações, acesse: <a href="https://www.google.com"
                                target="_blank">RSD</a></p>
                    </span>
                </div>
            </div>
            <!--Sobre o formulário de Contato-->
            <div id="contact-form">
                <!--Estamos utilizando uma estrutura do Bootstrap. No qual o container irá limitar a área, dependendo da largura do device da pessoa até um limite de pixel de largura (width)-->
                <div class="container">
                    <!--Contendo as linhas do bootstrap-->
                    <div class="row">
                        <!--Separaremos os grid's, em colunas. Sendo uma linha de 12 colunas. Sendo inserido aqui o formulário para envio de mensagem-->
                        <div class="col-12">
                            <h3 class="main-title">Canal - Confidencial</h3>
                        </div>
                        <!--Respeitando uma determinada largura da tela.-->
                        <div class="col-md-6">
                            <!--Sendo uma classe do próprio bootstrap, fazendo a imagem se adaptar a esta div, não precisando se preocupar com largura e altura.-->
                            <img class="img-fluid contact" src="../img/cadeado_digital_security.png"
                                alt="Construção de valor, comunicação">
                        </div>
                        <!--Respeitando uma determinada largura da tela. Dividido os 12 em duas colunas com 6 linhas cada.-->
                        <div class="col-md-6">
                            <!--Pois trabalharemos outro estilo do título, no qual aproveitaremos a mesma customização para outros títulos ao decurso da págiina.-->
                            <h3 class="about-title text-center">Preencha os campos para enviar a vossa mensagem</h3><br>
                            <!-- Form de contato, enviado por email -->
                            <form action="salva-mensagem-confi.php" method="POST" id="form-contato">
                                <!--Inserindo os campos que necessitam ser preenchidos para envio ao BD com as informações confidênciais.-->
                                <div class="form-group">
                                    <label for="text">Assunto:</label>
                                    <!--Aqui utilizamos uma entrada no formulário do tipo texto e com o espaço reserado (placeholder)-->
                                    <input class="form-control" type="text" name="assunto" id="assunto"
                                        placeholder="Digite o assunto...">
                                </div>
                                <div class="form-group">
                                    <label for="mensagem">Mensagem:</label>
                                    <textarea class="form-control" name="mensagem" id="mensagem"
                                        placeholder="Digite a mensagem..."></textarea>
                                </div>
                                <!--Divisão para seleção de arquivos, para anexo do formulário
                                <div class="form-group">
                                    <input type="file" name="file" id="file" placeholder="Selecione os arquivos desejados para anexo" multiple title="#">
                                </div>-->
                                <!--Botão de submit do que foi preenchido acima.-->
                                <div class="form-group text-center"><br>
                                    <button type="submit" class="main-btn-submit">ENVIAR</button>
                                </div>
                                <!--Aletar para que sempre que algum campo estiver pendente, seja informado um aletar.-->
                                <div class="alert alert-danger d-none">
                                    Preencha o campo <span id="campo-erro"></span>!
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
            <p>&copy;2021 - TI RSD | Developed by: Tecnologia da Informação RSD</p>
        </div>
    </footer>
    <!--Boa prática, CSS no head, e o JS no body da página.-->
    <script src="../js/scripts.js"></script>
    <script src="../js/formulario.js"></script>
    <script src="../js/parallax.js"></script>
</body>

</html>