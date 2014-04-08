<?php

	 $cnx = mysql_connect( "localhost", "root", "" ) ;
	 $db  = mysql_select_db( "taxi_enligne" ) ; //sélection de la base de données:
 
  //récupération des valeurs des champs:
 
		  $nom     = $_POST["nom"] ;
		  $prenom = $_POST["prenom"] ;
		  $portable = $_POST["portable"] ;
		  $email    = $_POST["email"] ;
		  $genre       = $_POST["genre"] ;
		  $password       = $_POST["password"] ;
		  $password_confirm       = $_POST["password_confirm"] ;
	
	if(isset($_POST['nom']) && !empty($nom) && is_string($nom) && 
			isset($_POST['prenom']) && !empty($prenom) && is_string($prenom) &&
			isset($_POST['portable']) && !empty($portable) && is_string($portable) &&
			$email == true && isset($_POST['email']) && !empty($email) && 
			isset($_POST['genre']) && !empty($genre) && is_string($genre) &&
			isset($_POST['password']) && !empty($password) && strlen($password) >=5 && $password_confirm==$password){
			
			$sql = "INSERT  INTO membres (nom, prenom, portable, email, genre, password)
            VALUES ( '$nom', '$prenom', '$portable', '$email', '$genre', '$password') " ;
 
			  //exécution de la requête SQL:
			  $requete = mysql_query($sql, $cnx) or die( mysql_error() ) ;
  
		if($requete)
			  {
				echo  '<script type="text/javascript">alert("L\'insertion a été correctement effectuée");</script>' ;
			  }
			  else
			  {
				echo("L'insertion à échouée") ;
			  }
			
		
			
		}
		else{ echo '<script type="text/javascript">alert("veuillez renseigner un champs obligatoire");</script>'; }

?>

