<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Detalhes sobre o trabalho Agência Web, desenvolvido por Fulano de Tal.">
    <meta name="author" content="Fulano de tal">
    <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">

    <title>Agência Web | Portfólio | Fulano de Tal - Desenvolvedor Front-end</title>

    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!-- CSS customizado deste site -->
    <link href="assets/css/main.css" rel="stylesheet">
  </head>

  <body>

    <!-- Barra de navegação -->
    <header role="banner" class="navbar navbar-inverse navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">FULANO DE TAL</a>
        </div>
        <nav role="navigation" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="portfolio.html">Portfólio</a></li>
            <li><a href="sobre.html">Sobre mim</a></li>
            <li><a href="contato.html">Contato</a></li>
          </ul>
        </nav>
      </div>
    </header>
	
	<section role="main" class="container pt">
		<header role="heading" class="row mt">
			<div class="col-lg-6 col-lg-offset-3 centered">
				<h3>PROJETO: AGÊNCIA WEB</h3>
				<hr>
				<p>Desenvolvimento da nova interface do site da Agência Web, com layout responsivo e elementos baseados em flat design.</p>
			</div>
		</header>
		<article role="article" class="row mt centered">	
			<div class="col-lg-4 col-lg-offset-4">
				<p><img class="img-responsive" src="assets/img/portfolio/port01.jpg" alt=""></p>
				<p><bt>Cliente: <a href="#">BlackTie.co</a></bt> - <bt>Tipo: <a href="#">Desenvolvimento de site estático (front-end)</a></bt> - <bt>Data: <a href="#">Janeiro de 2014</a></bt></p>
			</div>
		</article>
	</section>
	
	
	<?php include 'footer.php';

	?>
	
    <!-- JavaScript no fim da página para rápido carregamento -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="assets/js/hover.zoom.js"></script>
    <script src="assets/js/hover.zoom.conf.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- HTML5 shim e Respond.js para suporte ao HTML5 em navegadores antigos -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </body>
</html>
