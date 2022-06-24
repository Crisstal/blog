<?php 
require_once("include/fct.inc.php");
require_once ("include/modele.inc.php");

session_start();
$pdo = PdoGsb::getPdoGsb();
if(!isset($_REQUEST['uc'])){
     $_REQUEST['uc'] = 'home';
}	 
$uc = $_REQUEST['uc'];
switch($uc){
	case 'connexion':{
		include("controleurs/c_connexion.php");break;
	}

	case 'home': {
		include("controleurs/c_accueil.php");
		break;
	}

	case 'admin': {
		include("controleurs/c_admin.php");
		break;
	}


	case 'articles': {
		include("controleurs/c_articles.php");
		break;
	}
	case 'profil': {
		include("controleurs/c_profile.php");
		break;
	}
	
}

?>

