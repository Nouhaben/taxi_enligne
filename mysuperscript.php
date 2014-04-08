 <?php

	$cnx = mysql_connect( "localhost", "root", "" ) ;
	$db  = mysql_select_db( "taxi_enligne" ) ;
 
  //récupération des valeurs des champs:

	  $civilite     = $_POST["civilite"] ;
	  $nomsignup = $_POST["nomsignup"] ;
	  $prenomsignup = $_POST["prenomsignup"] ;
	  $emailsignup        = $_POST["emailsignup"] ;
	  $passwordsignup       = $_POST["passwordsignup"] ;
	  $passwordsignup_confirm       = $_POST["passwordsignup_confirm"] ;
	
	if(isset($_POST['civilite']) && !empty($civilite) && is_string($civilite) &&
			isset($_POST['nomsignup']) && !empty($nomsignup) && is_string($nomsignup) && 
			isset($_POST['prenomsignup']) && !empty($prenomsignup) && is_string($prenomsignup) &&
			$emailsignup == true && isset($_POST['emailsignup']) && !empty($emailsignup) && 
			isset($_POST['passwordsignup']) && !empty($passwordsignup) && strlen($passwordsignup) >=5 && $passwordsignup_confirm==$passwordsignup){
			
			$sql = "INSERT  INTO chauffeur (civilite, nomsignup, prenomsignup, emailsignup, passwordsignup)
            VALUES ('$civilite', '$nomsignup', '$prenomsignup', '$emailsignup', '$passwordsignup') " ;
 
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

