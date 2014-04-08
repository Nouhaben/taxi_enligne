<!DOCTYPE HTML>
<!--
	Telephasic 1.1 by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Espace chauffeur</title>
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
		
		<link rel="stylesheet" type="text/css" href="css/style3.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
		
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/style4.css" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700,300|Spinnaker' rel='stylesheet' type='text/css' />
		<script type="text/javascript" src="js/modernizr.custom.79639.js"></script>
	</head>
	<body class="right-sidebar">

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
						<div class="12u">
					
							<!-- Content -->
								<article id="content">
									<header>
										<section class="main">
											<h2 class="cs-text" id="cs-text">Espace chauffeur</h2>
											</section>
											<!-- Source : http://tympanus.net/codrops -->
											<script type="text/javascript" src="js/jquery1.min.js"></script>
											<script type="text/javascript" src="js/jquery.lettering.js"></script>
											<script>
											$(document).ready(function() {
											$(".cs-text").lettering('words').children('span').lettering()});
											</script>
											
											
										<center><span>Connectez-vous en tant que chauffeur</span></center>
									</header>
									
            <section>				
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper1">
                        <div id="login" class="animate form">
                            <form method="post" action="connexion1.php" autocomplete="on"> 
                                
                                <p> 
                                    <label for="username" class="uname" > Votre email </label>
                                    <input id="username" name="username" required="required" type="text" placeholder="Email"/>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd"> Votre mot de passe </label>
                                    <input id="password" name="password" required="required" type="password" placeholder="mot de passe" /> 
                                </p>
                                <p class="keeplogin"> 
									<input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" /> 
									<label for="loginkeeping">Rester connecté(e)</label>
								</p>
								
                                <input class="login button" type="submit" value="Se connecter" /> 
                                <p class="change_link">
									Vous n'êtes pas inscrit ?
									<a href="#toregister" class="to_register">Inscivez-vous</a>
								</p>
                            </form>
                        </div>

                        <div id="register" class="animate form">
                            <form  action="mysuperscript.php" method="post" autocomplete="on"> 
                                <h1> Insciption </h1> 
                                <p> 
                                    <label for="usernamesignup" class="uname">Civilité :</label>
                                    <select id="usernamesignup" name="civilite" required="required" type="text"  >
										<option>Mlle</option>
										<option>Mme</option>
										<option>Mr</option>
									</select>
                                </p>
								
								<p> 
                                    <label for="emailsignup" class="youmail"> Nom : </label>
                                    <input id="nomsignup" name="nomsignup" required="required" type="text" placeholder=""/> 
                                </p>
								
								<p> 
                                    <label for="emailsignup" class="youmail"> Prénom :</label>
                                    <input id="prenomsignup" name="prenomsignup" required="required" type="text" placeholder=""/> 
                                </p>
								<p> 
                                    <label for="emailsignup" class="youmail"> Email :</label>
                                    <input id="emailsignup" name="emailsignup" required="required" type="email" placeholder="mysupermail@mail.com"/> 
                                </p>
								
                                
                                <p> 
                                    <label for="passwordsignup" class="youpasswd">Mot de passe </label>
                                    <input id="passwordsignup" name="passwordsignup" required="required" type="password" placeholder=""/>
                                </p>
                                <p> 
                                    <label for="passwordsignup_confirm" class="youpasswd" >Confirmez le mot de passe </label>
                                    <input id="passwordsignup_confirm" name="passwordsignup_confirm" required="required" type="password" placeholder=""/>
                                </p>
								
								
								<input class="login button" type="submit" value="Valider" /> 
                                
                                <p class="change_link">  
									Déja membre ?
									<a href="#tologin" class="to_register"> Allez-vous identifier </a>
								</p>
                            </form>
                        </div>
						
                    </div>
                </div>  
            </section>
        </div>
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