<!DOCTYPE HTML>
<!--
	Telephasic 1.1 by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Taxi En Ligne</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,600" rel="stylesheet" type="text/css" />
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-n1.css" />
		</noscript>
		
		<style type="text/css">
			.fa-home:before{content:"\f015";}
		</style>
		
		<link rel="stylesheet" type="text/css" media="screen" href="css/style1.css">
		<!-- chargement des scripts -->	
		<script type="text/javascript" src="scr/jquery.js"></script>
		<script type="text/javascript" src="scr/fisheye-iutil.min.js"></script>
		<script type="text/javascript" src="scr/jquery.jqDock.min.js"></script>
		<!-- Initialisation de la fonction -->		
		<script type="text/javascript">
			$(function(){
				var jqDockOpts = {align: 'left', duration: 200, labels: 'tc', size: 50, distance: 85};
				$('#jqDock').jqDock(jqDockOpts);
			});
		</script>

	</head>
	<body class="homepage">

		<!-- Header Wrapper -->
			<div id="header-wrapper">
						
				<!-- Header -->
					<div id="header" class="container">
						
						<!-- Logo -->
							<h1 id="logo"><a href="index.php" class="fa fa-home active">Taxi EnLigne</a></h1>
						
						<!-- Nav -->
							<nav id="nav">
								<ul>
									<li>
										<a href="commandez_taxi.php">Commandez un Taxi</a>
										<!-- <ul>
											<li><a href="#">Lorem ipsum dolor</a></li>
											<li><a href="#">Magna phasellus</a></li>
											<li><a href="#">Etiam dolore nisl</a></li>
											<li>
												<span>Phasellus consequat</span>
												<ul>
													<li><a href="#">Lorem ipsum dolor</a></li>
													<li><a href="#">Phasellus consequat</a></li>
													<li><a href="#">Magna phasellus</a></li>
													<li><a href="#">Etiam dolore nisl</a></li>
												</ul>
											</li>
											<li><a href="#">Veroeros feugiat</a></li>
										</ul> -->
									</li>
									<li><a href="client_propritaire.php">Devenez Client prioritaire </a></li>
									<li class="break"><a href="espace_chauffeur.php">Espace Chauffeur</a></li>
									<li><a href="taxi_dispo.php">Taxis disponibles</a></li>
								</ul>
							</nav>

					</div>
				<div id="dockContainer">
					<ul id="jqDock">
						<li><a class="dockItem" href="estimation.php"><img src="images/estimation_prix_duree.png" alt="estimation_prix_duree"/></a></li>
						<li><a class="dockItem" href="#"><img src="images/commandez_taxi_telephone.png" alt="commandez_taxi_telephone" /></a></li>
						<li><a class="dockItem" href="#"><img src="images/suivez_votre_taxi2.png" alt="suivez_votre_taxi2" /></a></li>
						<li><a class="dockItem" href="#"><img src="images/bt_wecab.png" alt="bt_wecab" /></a></li>
						
					</ul>
				</div>

				<!-- Hero -->
				<section id="hero" class="container">
						<a href="index.php"><img src="images/g4373.png" alt="bt_wecab" /></a>
						<ul class="actions">
							<li><a href="commandez_taxi.php" class="button">Commandez en ligne</a></li>
						</ul>
					</section>	

			</div>

		
		<!-- Footer Wrapper -->
			<div id="footer-wrapper">

				<!-- Footer -->
					<div id="footer" class="container">
						<header class="major">
							<h2>Nous Contactez</h2>
							
						</header>
						<div class="row">
							<section class="6u">
								<form method="post" action="#">
									<div class="row half">
										<div class="6u">
											<input name="name" placeholder="Nom" type="text" class="text" />
										</div>
										<div class="6u">
											<input name="email" placeholder="Email" type="text" class="text" />
										</div>
									</div>
									<div class="row half">
										<div class="12u">
											<textarea name="message" placeholder="Message"></textarea>
										</div>
									</div>
									<div class="row half">
										<div class="12u">
											<ul class="actions">
												<li><a style="margin-left:320px;" href="#" class="button">Envoyer le message</a></li>
												
											</ul>
										</div>
									</div>
								</form>
							</section>
							<section class="6u">
								<div class="row no-collapse-1">
									<ul class="divided icons 6u">
										<li class="fa fa-twitter"><a href="#"><span class="extra">twitter.com/</span>untitled</a></li>
										<li class="fa fa-facebook"><a href="#"><span class="extra">facebook.com/</span>untitled</a></li>
										<li class="fa fa-dribbble"><a href="#"><span class="extra">dribbble.com/</span>untitled</a></li>
									</ul>
									<ul class="divided icons 6u">
										<li class="fa fa-linkedin"><a href="#"><span class="extra">linkedin.com/</span>untitled</a></li>
										<li class="fa fa-youtube"><a href="#"><span class="extra">youtube.com/</span>untitled</a></li>
										<li class="fa fa-pinterest"><a href="#"><span class="extra">pinterest.com/</span>untitled</a></li>
									</ul>
								</div>
							</section>
						</div>
					</div>

				<!-- Copyright -->
					<div id="copyright" class="container">
						<ul class="menu">
							<li>&copy; Taxi En Ligne. Nouhaila BEN ABDELKADER</li>
							<li>Email: nouha.benabdelkader@gmail.com</a></li>
						</ul>
					</div>

			</div>

	</body>
</html>