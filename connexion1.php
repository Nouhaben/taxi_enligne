<?php
session_start(); //on initialise la session
//On récupère les variables

if(isset($_POST) and !empty($_POST['emailsignup']) and !empty($_POST['passwordsignup'])){
	$le_email = filter_input(INPUT_POST, 'username', FILTER_VALIDATE_EMAIL);
	$le_motdepass = sha1($_POST['passwordsignup']); //On récupère le mot de passe crypté

	//On se connecte à la base de donnée 
	include_once "config.php";
	/* on est connecté à base et on est entrain de récupérer les infos */
	$req = $bdd->prepare('SELECT * FROM chauffeur WHERE emailsignup = ? AND passwordsignup = ?'); //On récupère les données depuis la BDD
	$req->execute(array($le_email, $le_motdepass));
	
	$donnees = $req->fetch();
		if(!$donnees){ /* le cas d'un problème */
			echo '<script type="text/javascript">alert("Une erreur s\'est produite");</script>';
			
		}else{
			$_SESSION["id"] = $donnees["id"];
			$_SESSION["civilite"] = $donnees["civilite"];
			$_SESSION["nomsignup"] = $donnees["nomsignup"]; //on stock son nom comme identifiant dans la session 
			$_SESSION["prenomsignup"] = $donnees["prenomsignup"]; //on stock son prenom comme identifiant dans la session 
			$_SESSION["emailsignup"] = $donnees["emailsignup"]; //on stock son email comme identifiant dans la session 
			$_SESSION["passwordsignup"] = $donnees["passwordsignup"];
			
			Header("Location: candidat"); //si le pass et email sont juste on redirige vers can didat
		}

	$req->closeCursor();
}else{ echo '<script type="text/javascript">window.location.href="chauffeur/index.html";</script>'; }
