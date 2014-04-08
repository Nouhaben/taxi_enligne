<!DOCTYPE HTML>
<!--
	Telephasic 1.1 by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Commandez un taxi</title>
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
		
		
			<link rel="stylesheet" href="css/demo.css">
	<link rel="stylesheet" href="css/jquery.ui.core.css">
	<link rel="stylesheet" href="css/jquery.ui.datepicker.css">
	<link rel="stylesheet" href="css/jquery.ui.widget.css">
	<!-- les couleurs peuvent définies au sein de la feuille di dessous-->
	<link rel="stylesheet" href="css/jquery.ui.theme.css">
<!-- chargement des scripts -->	
	<script src="scr/jquery.js"></script>
	<script src="scr/jquery.ui.core.js"></script>
	<script src="scr/jquery.ui.widget.js"></script>
	<script src="scr/jquery.ui.datepicker.js"></script>
	<script src="scr/jquery.ui.datepicker-fr.js"></script>
<!-- Initialisation de la fonction -->		
	<script>
	$(function() {
		$.datepicker.setDefaults( $.datepicker.regional[ "" ] );
		$( "#datepicker" ).datepicker( $.datepicker.regional[ "fr" ] );
		$( "#locale" ).change(function() {
			$( "#datepicker" ).datepicker( "option",
				$.datepicker.regional[ $( this ).val() ] );
		});
	});
	</script>
	</head>
	<body class="left-sidebar">

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

			</div>

		<!-- Main Wrapper -->
			<div class="wrapper">

				<div class="container">
					<div class="row" id="main">
						<div class="4u">

							<!-- Sidebar -->
								<section id="sidebar">
									<section>
										<header>
											<a href="index.php"><img src="images/g.png" alt="bt_wecab" /></a>
										</header>
										<p>Le taxi en ligne est à votre disposition</p>
										
										<ul>
											<li style="margin-left:30px;"> - Remplissez <b>tous</b> les champs.</li>
											<li style="margin-left:30px;"> - Confirmez votre commande.</li>
											<li style="margin-left:30px;"> - Vous recevrez les coordonnées du chauffeur par SMS 15 min avant votre course.</li>
										</ul>
										
										<p>Finalement c'est simple et économique de réserver un taxi !</p>
										
									</section>
									
								</section>
					
						</div>
						<div class="8u skel-cell-important">
					
							<!-- Content -->
								<article id="content">
									<header>
										<h2>Réservation du Taxi</h2>
										<span>Jusqu'à 30 minutes avant votre départ</span>
									</header>
									<form action="traitement_inscription.php" method="post" class="form">

										<fieldset class="fieldset">
										 <legend class="legend"> Date et heure de réservation : </legend>
										 <table border="0" cellpadding="0" cellspacing="5" align="center">
											<tr><td class="txt">Heure : </td><td><input class="input" id="hm" type="text" /></td></tr><br>
											<tr><td class="txt">Date : </td><td><input class="input" id="datepicker" type="text" /></td></tr>
										</table>
										</fieldset>

										<fieldset class="fieldset">
										 <legend class="legend">Vos coordonnées : </legend>
										 <table border="0" cellpadding="0" cellspacing="5" align="center">
											<tr><td for="nom">Nom : </td><td><input class="input" type="text" name="nom" size="20" maxlength="40" value="nom" id="nom" /></td></tr><br>
											<tr><td for="prenom">Prénom : </td><td><input class="input" type="text" name="prenom" size="20" maxlength="40" value="prénom" id="precom" /></td></tr><br>
											<tr><td for="portable">Portable : </td><td><input class="input" type="text" name="portable" size="20" maxlength="40" value="portable" id="portable" /></td></tr><br>
											<tr><td for="email">Email : </td><td><input class="input" type="email" name="email" size="20" maxlength="40" value="email" id="email" /></td></tr><br>
											
										</table>
										</fieldset>
										
										<fieldset class="fieldset">
										 <legend class="legend" > Lieu de départ : </legend>
										 <table border="0" cellpadding="0" cellspacing="5" align="center">
											<tr><td class="txt">N° : </td><td><input class="input" id="n" type="text" /></td></tr><br>
											<tr><td class="txt">Rue : </td><td><input class="input" id="rue" type="text" /></td></tr>
											<tr><td for="utilise">ville : </td><td>
											  <select class="select" name="ville" id="ville">
												<option class="option" value="martil"> Martil</option>
												<option class="option"  value="tetouan"> Tetouan</option>
												<option class="option"  value="fnideq"> Fnideq</option>
												<option class="option" value="madyeq"> madyeq</option>
											   </select>
											</td></tr>
										</table>
										</fieldset>
										
										<fieldset class="fieldset">
										 <legend class="legend"> Votre trajet : </legend>
										 <table border="0" cellpadding="0" cellspacing="5" align="center">
											<tr><td class="txt">Destination : </td><td><input class="input"id="destination" type="text" /></td></tr><br>
											<tr><td class="txt">Nb passagers : </td><td>
											  <select class="select" name="ville" id="ville">
												<option class="option" value="1"> 1</option>
												<option class="option" value="2"> 2</option>
												<option class="option" value="3"> 3</option>
												
											   </select>
											</td></tr>
										</table>
										</fieldset>

										 <p>
										 <center ><input class="input" type="submit" value="Réserver" /></center>
										 
										 </p>

										</form>
								</article>

						</div>
					</div>
					
				</div>
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