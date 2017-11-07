<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Entre em contato com Fulano de Tal.">
    <meta name="author" content="Fulano de tal">
    <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">

    <title>Contato | Fulano de Tal - Desenvolvedor Front-end</title>

    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!-- CSS customizado deste site -->
    <link href="assets/css/main.css" rel="stylesheet">
  </head>

  <body>

     <?php include 'header.php';	?>

	
	<section role="main" class="container pt">
		<header role="heading" class="row mt">
			<div class="col-lg-6 col-lg-offset-3 centered">
				<h3>CONTATO</h3>
				<hr>
				<p>Entre em contato comigo para saber mais sobre meus trabalhos ou contratar meus serviços.</p>
			</div>
		</header>
		<div class="row mt">	
			<div class="col-lg-8 col-lg-offset-2">
				<form role="form">
				  <div class="form-group">
				  	<label for="inputNome">Nome:</label>
				    <input type="name" class="form-control" id="inputNome" placeholder="Insira seu nome">
				    <br>
				  </div>
				  <div class="form-group">
				  	<label for="inputEmail">E-mail:</label>
				    <input type="email" class="form-control" id="inputEmail" placeholder="Insira seu e-mail">
				    <br>
				  </div>
				  <div class="form-group">
				  	<label for="inputAssunto">Assunto:</label>
				    <input type="text" class="form-control" id="inputAssunto" placeholder="Sobre o que deseja falar?">
				    <br>
				  </div>
				  <label for="inputMensagem">Mensagem:</label>
				  <textarea id="inputMensagem" class="form-control" rows="6" placeholder="Sua mensagem"></textarea>
				    <br>
				  <button type="submit" class="btn btn-success">ENVIAR</button>
				</form>    			
			</div>
		</div>
	</section>
	
	
	<?php include 'footer.php';	?>
	
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