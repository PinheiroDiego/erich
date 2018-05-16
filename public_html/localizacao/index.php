<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        
        <title>Erich Marcenaria | Localização</title>
        <meta charset="UTF-8">
        <meta name="description" content="Atendimento diferenciado, preço justo e profissionalismo é o que você vai encontrar por aqui.">
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
     $dados = mysqli_query($conexao,  "SELECT * FROM localizacao WHERE id = 1");

     while ($localizacao = mysqli_fetch_array($dados)):
   ?>
		
		<div class="main-container">
			<section class="hero-divider">
			
				<div class="background-image-holder overlay">
					<img class="background-image" alt="Poster Image For Mobiles" src="../img/propaganda1.jpg">
				</div>
			
				<div class="video-wrapper">
					<video autoplay="" muted="" loop="">
						<source src="../video/quem-somos.mp4" type="video/mp4">
						<source src="../video/video.webm" type="video/webm">
						<source src="../video/video.ogv" type="video/ogg">	
					</video>
		
				</div>
				
				<div class="container">
					<div class="row">	
						<div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 text-center">
							<h1 class="text-white"><?= $localizacao['primeirotitulo'] ?></h1>
							<p class="lead text-white">
								<?= $localizacao['subtitulo'] ?>
							</p>
							
							
						</div>
					</div><!--end of row-->
				</div><!--end of row-->
			</section>
			
			<section class="feature-selector">
				<div class="container">
					
				</div>
				
				<div class="container">
					<ul class="selector-content">
						<li class="clearfix active">
							<div class="row">
								<div class="col-sm-12 text-center">
									<h1><?= $localizacao['segundotitulo'] ?></h1>
								</div>
							</div><!--end of row-->
							
														<div class="row">
								<div class="col-sm-12">
									<p class="lead">
										<?= $localizacao['texto'] ?>
									</p>	<br>
								</div>

							<div class="row">
								<div class="col-sm-12" align="center">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3466.7220313504486!2d-51.11951958530514!3d-29.669839520913204!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x951943bffb5b2ebd%3A0xc3866501fbedb7de!2sR.+Ibiruba%2C+495+-+Vila+Nova%2C+Novo+Hamburgo+-+RS!5e0!3m2!1spt-BR!2sbr!4v1526058944232" width="1150" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
								</div>
							

							</div><!--end of row-->
						</li><!--end of individual feature content-->
						
						<li class="clearfix">
							<div class="row">
								<div class="col-sm-12 text-center">
									<h1>Many appealing ways to present information</h1>
								</div>
							</div><!--end of row-->
							
							<div class="row">
								<div class="col-sm-6">
									<p class="lead">
										Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem.
									</p>	
								</div>
							
								<div class="col-sm-6">
									<p class="lead">
										Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem.
									</p>	
								</div>
							</div><!--end of row-->
						</li><!--end of individual feature content-->
						
						<li class="clearfix">
							<div class="row">
								<div class="col-sm-12 text-center">
									<h1>Several appealing ways to present information</h1>
								</div>
							</div><!--end of row-->
							
							<div class="row">
								<div class="col-sm-6">
									<p class="lead">
										Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem.
									</p>	
								</div>
							
								<div class="col-sm-6">
									<p class="lead">
										Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem.
									</p>	
								</div>
							</div><!--end of row-->
						</li><!--end of individual feature content-->
						
						<li class="clearfix">
							<div class="row">
								<div class="col-sm-12 text-center">
									<h1>Numerous appealing ways to present information</h1>
								</div>
							</div><!--end of row-->
							
							<div class="row">
								<div class="col-sm-6">
									<p class="lead">
										Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem.
									</p>	
								</div>
							
								<div class="col-sm-6">
									<p class="lead">
										Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem.
									</p>	
								</div>
							</div><!--end of row-->
						</li><!--end of individual feature content-->
						
		
					</ul>
				</div>
			</section>
			
			<!--<section class="team-1">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 text-center">
							<h1>About Our Team</h1>
						</div>
					</div>
					
					<div class="row space-bottom-large">
						<div class="col-sm-4">
							<div class="team-1-member">
								<img alt="Team Member" src="img/team-small-1.png ">
								<h2>Chip Mayer</h2>
								<h5>Founder &amp; CEO</h5>
								<p class="space-top-small">
									Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
								</p>
							</div>
						</div>
						
						<div class="col-sm-4">
							<div class="team-1-member">
								<img alt="Team Member" src="img/team-small-3.png ">
								<h2>Claire Connors</h2>
								<h5>Creative Director</h5>
								<p class="space-top-small">
									Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
								</p>
							</div><!--end of team member
						</div>
						
						<div class="col-sm-4">
							<div class="team-1-member">
								<img alt="Team Member" src="img/team-small-2.png">
								<h2>Robin Banks</h2>
								<h5>Partner &amp; COO</h5>
								<p class="space-top-small">
									Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
								</p>
							</div><!--end of team member
						</div>
						
		
					</div><!--end of row
					
					<!--end of row
					
				</div><!--end of container
			</section>-->
			
			<!--<section class="clients-2">
				<div class="container">
					<div class="row">
						<div class="col-md-2 col-sm-4">
							<img alt="Client Logo" src="img/client1.png">
						</div>
						
						<div class="col-md-2 col-sm-4">
							<img alt="Client Logo" src="img/client2.png">
						</div>
						
						<div class="col-md-2 col-sm-4">
							<img alt="Client Logo" src="img/client3.png">
						</div>
						
						<div class="col-md-2 col-sm-4">
							<img alt="Client Logo" src="img/client4.png">
						</div>
						
						<div class="col-md-2 col-sm-4">
							<img alt="Client Logo" src="img/client5.png">
						</div>
						
						<div class="col-md-2 col-sm-4">
							<img alt="Client Logo" src="img/client6.png">
						</div>
					</div><!--end of row-->
				<!--</div><!--end of container-->
			<!--</section>-->
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
				