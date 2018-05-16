<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        
        <title>Erich Marcenaria | Contato</title>
        <meta charset="UTF-8">
        <meta name="description" content="Ficou com alguma dúvida? Estamos à disposição para esclarecer qualquer coisa referente a desenvolvimento de site, links patrocinados ou então identidade visual! Conte conosco!">
		<meta name="keywords" content="site, website, agencia, agência, publicidade, propaganda, negocio, negócio, marketing, digital, web, cartao, visita, redes, sociais, facebook, sites, criacao, criação, comunicacao, comunicação, panfleto, flyer, flyers, logo, logomarca, bridge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link href="../css/flexslider.min.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="../css/line-icons.min.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="../css/elegant-icons.min.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="../css/lightbox.min.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="../css/theme.min.css" rel="stylesheet" type="text/css" media="all"/>
        <!--[if gte IE 9]>
        	<link rel="stylesheet" type="text/css" href="css/ie9.css" />
		<![endif]-->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,400,300,600,700%7CRaleway:700' rel='stylesheet' type='text/css'>
        <script src="../js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
		
			<script>
			  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

			  ga('create', 'UA-98692450-1', 'auto');
			  ga('send', 'pageview');

			</script>
		
    </head>
	
	<script type="text/javascript">
		function validaForm() {
			var nome     = $("#nome").val();
			var email    = $("#email").val();
			var telefone = $("#telefone").val();
			var mensagem = $("#mensagem").val();
			
			if(nome == "") {
				alert("Campo nome está em branco!");
				return false;
			}else if (telefone == "") {
				alert("Campo telefone está em branco!");
				return false;
			}else if (email == "") {
				alert("Campo e-mail está em branco!");
				return false;
			}else if (mensagem == "") {
				alert("Campo mensagem está em branco!");
				return false;
			}
			
			return true;
		}
	</script>
	
    <body>
    	<?php include("../includes/nav.php"); ?>

    	 <?php
     $conexao = mysqli_connect("127.0.0.1", "root", "", "erich");
     $dados = mysqli_query($conexao,  "SELECT * FROM contato WHERE id = 1");

     while ($contato = mysqli_fetch_array($dados)):
   ?>

		<div class="main-container">
			<header class="page-header">
				<div class="background-image-holder parallax-background">
					<img class="background-image" alt="Background Image" src="../img/hero18.png">
				</div>
				
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<h1 class="text-white"><?= $contato['primeirotitulo'] ?></h1>
							<span class="text-white alt-font"><?= $contato['subtitulo'] ?>.</span>	
						</div>
					</div><!--end of row-->
				</div><!--end of container-->
			</header>
			
			<section class="contact-center">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 text-center">
							<h1><?= $contato['segundotitulo'] ?></h1>
							<p class="lead">
								<?= $contato['texto'] ?>
							</p>
						</div>
					</div><!--end of row-->
					
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
							<div class="form-wrapper clearfix">
								<form action="envia.php" class="form-contact" method="post">
									<?php 
									if(isset($_SESSION['usuario'])) { 
									?>
										<div class="form-success" style="display: block !important;">
											<span class="text-white">Mensagem enviada! - Obrigado pelo seu contato, breve retornaremos ;)</span>
										</div>
									<?php
									session_destroy();
									} 
									?>
									<div class="inputs-wrapper">
										<input class="form-name validate-required" type="text" placeholder="Seu nome" name="nome" id="nome">
										<input class="form-name validate-required" type="text" placeholder="Seu telefone" name="telefone" id="telefone">
										<input class="form-email validate-required validate-email" type="text" name="email" placeholder="Seu E-mail" id="email">
										<textarea class="form-message validate-required" name="mensagem" placeholder="Sua mensagem" id="mensagem"></textarea>
									</div>
									<input type="submit" class="send-form" value="Enviar" onclick="return validaForm();">
									<div class="form-error">
										<span class="text-white">Por favor, preencha corretamente os campos acima!</span>
									</div>
								</form>
							</div>
						</div>
					</div><!--end of row-->
				</div><!--end of container-->
			</section>
		</div>
		<div class="footer-container">
			<?php include("../includes/footer.php"); ?>
		</div>
				<?php endwhile; ?>
		<script src="../js/jquery.min.js"></script>
        <script src="../js/jquery.plugin.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/jquery.flexslider-min.js"></script>
        <script src="../js/smooth-scroll.min.js"></script>
        <script src="../js/skrollr.min.js"></script>
        <script src="../js/spectragram.min.js"></script>
        <script src="../js/scrollReveal.min.js"></script>
        <script src="../js/isotope.min.js"></script>
        <script src="../js/twitterFetcher_v10_min.js"></script>
        <script src="../js/lightbox.min.js"></script>
        <script src="../js/jquery.countdown.min.js"></script>
        <script src="../js/scripts.min.js"></script>
    </body>
</html>
				