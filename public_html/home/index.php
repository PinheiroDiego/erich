<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js"> <!--<![endif]-->
    <head>
	    <meta charset="utf-8">
        <title>Erich Marcenaria</title>
        <meta name="description" content="Bem vindo, somos a BRIDGE! A sua agência de Criação de Sites.">
		<meta name="keywords" content="site, website, agencia, agência, publicidade, propaganda, negocio, negócio, marketing, digital, web, cartao, visita, redes, sociais, facebook, sites, criacao, criação, comunicacao, comunicação, panfleto, flyer, flyers, logo, logomarca, bridge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link href="../css/flexslider.min.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="../css/line-icons.min.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="../css/elegant-icons.min.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="../css/lightbox.min.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="../css/theme.min.css" rel="stylesheet" type="text/css" media="all"/>
        <link rel="shortcut icon" href="../img/logofav.ico">
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
    <body class="no-loader">
    	
		<?php include("../includes/nav.php"); ?>
		
   <?php

    $conexao = mysqli_connect("127.0.0.1", "root", "", "foco");
    $dados = mysqli_query($conexao,  "SELECT * FROM home WHERE id = 1");

     while ($home = mysqli_fetch_array($dados)):
   ?>
		<div class="main-container">
		<section class="hero-slider">
				<ul class="slides">
					<!--<li class="overlay">
						<div class="background-image-holder parallax-background">
							<img class="background-image" alt="Background Image" src="img/hero11.jpg">
						</div>
						
						<div class="container align-vertical">
							<div class="row">
								<div class="col-md-6 col-sm-9">
									<h1 class="text-white">Get ready for the launch of our amazing new template Pivot, You will be awed.</h1>
									<a target="_blank" href="http://www.mediumra.re/pivot/variant/builder.html" class="btn btn-primary btn-white">Customize Pivot</a>
									<a href="#" class="btn btn-primary btn-filled">Purchase Pivot</a>
								</div>
							</div>
						</div>
					</li>
					
					<li class="overlay">
						<div class="background-image-holder parallax-background">
							<img class="background-image" alt="Background Image" src="img/hero2.jpg">
						</div>
						
						<div class="container align-vertical">
							<div class="row">
								<div class="col-md-6 col-sm-9">
									<h1 class="text-white">Get ready for the launch of our amazing new template Pivot, You will be awed.</h1>
									<a target="_blank" href="http://www.mediumra.re/pivot/variant/builder.html" class="btn btn-primary btn-white">Customize Pivot</a>
									<a href="#" class="btn btn-primary btn-filled">Purchase Pivot</a>
								</div>
							</div>
						</div>
					</li>-->
					
					<li class="overlay">
						<div class="background-image-holder parallax-background">
							<img class="background-image" alt="Background Image" src="../img/propaganda1.png">
													<div class="container align-vertical">
							<div class="row  text-center">
								<div class="col-md-6 col-sm-9 col-lg-12">
									<h1 class="text-white"><?= mb_convert_encoding($home[‘titulo’], ‘ASCII’) ?></h1>
								</div>
							</div>
						</div>
						</div>

						
					</li>
					
					<!--<li class="overlay">
						<div class="background-image-holder parallax-background">
							<img class="background-image" alt="Background Image" src="../img/hero7.jpg">
						</div>
						
						<div class="container align-vertical">
							<div class="row">
								<div class="col-md-6 col-sm-9">
									<h1 class="text-white">Soluções que se convertem em resultados.</h1>
									<a href="../servicos" class="btn btn-primary btn-white">Soluções</a>
									<a href="../contato" class="btn btn-primary btn-filled">Contato</a>
								</div>
							</div>
						</div>
					</li> -->
					
					
				</ul>
			</section>


   



  <section>
    <div class="container">
      <div class="row">
        <div class="col-lg-1"> </div>
        <div class="col-lg-5">
          <img class="phone-portrait" alt="App Screenshot" src="../img/projetos.png">
      </div>
      <div class="col-lg-1 central2"> <hr class="linhasprojeto" align="left" width="400%"> </div>
        <div class="col-lg-4 central">
        										<h6 class="espacotexto">Projetos Residenciais  </h6>
        										
									<p>
										Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
									</p>
									<a href="../servicos" class="btn btn-default">Ver Projetos</a>
          </div>
          <div class="col-lg-1"> </div>
      </div>
    </div>
  </section>

    <section class="semtop">
    <div class="container">
      <div class="row">
        <div class="col-lg-1"> </div>
                <div class="col-lg-4 text-right central">
        										<h6>Projetos Empresariais  </h6>
        										<hr class="linhasprojeto2" align="left" width="75%">
									<p>
										Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
									</p>
									<a href="../servicos" class="btn btn-default" align="right">Ver Projetos</a>
          </div>
        <div class="col-lg-1">  </div>
        <div class="col-lg-5">
          <img class="phone-portrait" alt="App Screenshot" src="../img/projetos2.png" align="right">
      </div>

          <div class="col-lg-1"> </div>
      </div>
    </div>
  </section>


		</div>
		
		<div class="footer-container">
		
			<?php include("../includes/footer.php"); ?>

		</div>


		<?php endwhile; ?>
				
		<script src="https://www.youtube.com/iframe_api"></script>
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
				