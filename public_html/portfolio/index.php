<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        
        <title>Erich Marcenaria | Portfólio</title>
        <meta charset="UTF-8">
        <meta name="description" content="Desenvolvimento de sites totalmente gerenciáveis e com foco nas necessidades do cliente. Entendemos que este é uma das principais portas de entrada do seu cliente e para isto deve ser bem planejado. ">
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
    <body>
    	
		<?php include("../includes/nav.php"); ?>

		 <?php
     $conexao = mysqli_connect("127.0.0.1", "root", "", "erich");
     $dados = mysqli_query($conexao,  "SELECT * FROM portfolio WHERE id = 1");

     while ($portfolio = mysqli_fetch_array($dados)):
   ?>
		
		<div class="main-container">
			<section class="no-pad-bottom projects-gallery">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 text-center">
							<br>
							<h1><?= $portfolio['primeirotitulo'] ?></h1>
							<p class="lead">
								<?= $portfolio['texto'] ?>
							</p>
						</div>
					</div><!--end of row-->
					
				</div><!--end of container-->
				
					
					<div class="projects-container">
					
						<!--<div class="col-md-6 col-sm-12 no-pad project print image-holder">
							<div class="background-image-holder">
								<img class="background-image" alt="Background Image" src="../img/project1.png">
							</div>
							<div class="hover-state">
								<div class="align-vertical">
									<h1 class="text-white"><strong>Adikern</strong> <!--User Experience</h1>
									<p class="text-white">
										Transportamos vidas com segurança, pontualidade e responsabilidade!
									</p>
									<a href="http://adikern.com.br" target="_blank" class="btn btn-primary btn-white">Visitar</a>
								</div>
							</div>
						</div>-->
					
						<div class="col-md-6 col-sm-12 no-pad project print image-holder">
							<div class="background-image-holder">
								<img class="background-image" alt="Background Image" src="../img/projetos.png">
							</div>
							<div class="hover-state">
								<div class="align-vertical">
									<h1 class="text-white"><strong>Lorem ipsum dolor sit amet</strong> <!--User Experience--></h1>
									<p class="text-white">
										Lorem ipsum dolor sit amet
									</p>
									<button type="button" class="btn btn-primary btn-white" data-toggle="modal" data-target=".bs-example-modal-lg">
  Ver fotos
</button>
								</div>
							</div>
						</div><!--end of individual project-->
						
						<div class="col-md-6 col-sm-12 no-pad project print image-holder">
							<div class="background-image-holder">
								<img class="background-image" alt="Background Image" src="../img/projetos2.png">
							</div>
							<div class="hover-state">
								<div class="align-vertical">
									<h1 class="text-white"><strong>Lorem ipsum dolor sit amet</strong></h1>
									<p class="text-white">
										Lorem ipsum dolor sit amet.
									</p>
									<button type="button" class="btn btn-primary btn-white" data-toggle="modal" data-target=".bs-example-modal-lg">
  Ver fotos
</button>
								</div>
							</div>
						</div><!--end of individual project-->
						
						<div class="col-md-4 col-sm-6 no-pad project print image-holder">
							<div class="background-image-holder">
								<img class="background-image" alt="Background Image" src="../img/projetos.png">
							</div>
							<div class="hover-state">
								<div class="align-vertical">
									<h1 class="text-white"><strong>Lorem ipsum dolor sit amet</strong></h1>
									<p class="text-white">
										Lorem ipsum dolor sit amet!
									</p>
									<button type="button" class="btn btn-primary btn-white" data-toggle="modal" data-target=".bs-example-modal-lg">
  Ver fotos
</button>
									<!--<a href="project-single.html" class="btn btn-primary btn-white">See Project</a>-->
								</div>
							</div>
						</div><!--end of individual project-->
						
						<div class="col-md-4 col-sm-6 no-pad project branding image-holder">
							<div class="background-image-holder">
								<img class="background-image" alt="Background Image" src="../img/projetos2.png">
							</div>
							<div class="hover-state">
								<div class="align-vertical">
									<h1 class="text-white"><strong>Lorem ipsum dolor sit amet</strong></h1>
									<p class="text-white">
										Lorem ipsum dolor sit amet
									</p>
									<button type="button" class="btn btn-primary btn-white" data-toggle="modal" data-target=".bs-example-modal-lg">
  Ver fotos
</button>
								</div>
							</div>
						</div><!--end of individual project-->
						
						<div class="col-md-4 col-sm-6 no-pad project print image-holder">
							<div class="background-image-holder">
								<img class="background-image" alt="Background Image" src="../img/projetos.png">
							</div>
							<div class="hover-state">
								<div class="align-vertical">
									<h1 class="text-white"><strong>KLorem ipsum dolor sit amet</strong></h1>
									<p class="text-white">
										Lorem ipsum dolor sit amet
									</p>
									<button type="button" class="btn btn-primary btn-white" data-toggle="modal" data-target=".bs-example-modal-lg">
  Ver fotos
</button>

								</div>
							</div>
						</div><!--end of individual project-->
					
					</div><!--end of projects-container-->
					
				</div><!--end of projects wrapper-->
				
			</section>
		</div>
		<div class="footer-container">
			<footer class="details">
				<?php include("../includes/footer.php"); ?>
			</footer>
		</div>

		<!-- Modal -->
<!-- Modal -->
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Fotos</h4>
      </div>
      <div class="modal-body">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active" align="center">
      <img src="../img/projetos.png" alt="...">
      <div class="carousel-caption">
        
      </div>
    </div>
    <div class="item" align="center">
      <img src="../img/projetos2.png" alt="...">
      <div class="carousel-caption">
        
      </div>
    </div>
   
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
      </div>
    </div>
  </div>
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
				