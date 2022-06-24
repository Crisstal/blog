<?php
$action = $_REQUEST['action'];
switch($action){ 
	case 'signup':  {
		include("vues/signup.php");
		break;
	}
	case 'ValidInscription' :{
		
		if ($_POST["Password1"] == $_POST["Password2"]) {
			include("vues/v_connexion.php");
		$creerUtilisateur = $pdo->creerUtilisateur($_POST["Login"],$_POST["Password1"],$_POST["Email"]);	
	} else {
		include("vues/signup.php");
		echo 'Les mots de passes ne correspondent pas';
	}

}
}
?>