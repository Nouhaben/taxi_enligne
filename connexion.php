<?php
session_start(); //on initialise la session
//On récupère les variables

if(isset($_POST) and !empty($_POST['email']) and !empty($_POST['password'])){
	$le_email = filter_input(INPUT_POST, 'username', FILTER_VALIDATE_EMAIL);
	$le_motdepass = sha1($_POST['password']); //On récupère le mot de passe crypté

	//On se connecte à la base de donnée 
	include_once "config.php";
	/* on est connecté à base et on est entrain de récupérer les infos */
	$req = $bdd->prepare('SELECT * FROM membres WHERE email = ? AND password = ?'); //On récupère les données depuis la BDD
	$req->execute(array($le_email, $le_motdepass));
	
	$donnees = $req->fetch();
		if(!$donnees){ /* le cas d'un problème */
			echo '<script type="text/javascript">alert("Une erreur s\'est produite");</script>';
			
		}else{
			$_SESSION["id"] = $donnees["id"];
			$_SESSION["nom"] = $donnees["nom"]; //on stock son nom comme identifiant dans la session 
			$_SESSION["prenom"] = $donnees["prenom"]; //on stock son prenom comme identifiant dans la session 
			$_SESSION["portable"] = $donnees["portable"]; //on stock son telephone comme identifiant dans la session 
			$_SESSION["email"] = $donnees["email"]; //on stock son email comme identifiant dans la session 
			$_SESSION["genre"] = $donnees["genre"]; 
			$_SESSION["password"] = $donnees["password"];
			
			Header("Location: candidat"); //si le pass et email sont juste on redirige vers can didat
		}

	$req->closeCursor();
}else{ echo '<script type="text/javascript">window.location.href="commandez_taxi.php";</script>'; }
