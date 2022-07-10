<?php 
if(!isset($_REQUEST['action'])){
	$_REQUEST['action'] = 'demandeConnexion';
}
$action = $_REQUEST['action'];
switch($action){
	case 'demandeConnexion':{
		include("vues/v_connexion.php");
		break;
	}
	case 'deconnexion':{
		unset($_SESSION['login']);
		unset($_SESSION['id']);
		unset($_SESSION['type']);
		unset($_SESSION['log']);
		include("vues/v_connexion.php");
		
		break;
	}
	case 'valideConnexion':{
		$login = $_REQUEST['login'];
		$mdp = $_REQUEST['mdp'];
		$utilisateur = $pdo->getInfosUtilisateur($login,hash('sha256', $mdp));
		$id = $utilisateur['id'];
		$type =$utilisateur['id_droits'];
		$log =$utilisateur['login'];
		if(!is_array( $utilisateur)){
			ajouterErreur("Login ou mot de passe incorrect");
			include("vues/v_erreurs.php");
			include("vues/v_connexion.php");
			var_dump($_SESSION['type']);
		}
		else{
			
            $_SESSION['login']= $login; // mémorise les variables de session
			$_SESSION['id']= $id;
			$_SESSION['type']= $type;
			$_SESSION['log']= $log;
			include("vues/footer.php");
			include("vues/header.php");
			
            $LesArticles = $pdo->get3articles(); 
            include("vues/v_accueil.php");

			
			}
		break;
	}
	case 'signup':  {
		include("vues/signup.php");
		break;
	} 
	case 'ValidInscription' :{
	$verifemail = $pdo->verifEmail($_POST['Email']);
	if(empty( $verifemail)){
		if ($_POST["Password1"] == $_POST["Password2"]) {
			include("vues/v_connexion.php");
		$creerUtilisateur = $pdo->creerUtilisateur($_POST["Login"],$_POST["Password1"],$_POST["Email"]);	
	} else {
		echo 'Les mots de passes ne correspondent pas';
		include("vues/signup.php");
		
	}
} else {
	echo "* Un compte existe déjà avec cette email";
	include("vues/signup.php");
}

}
	
}
?>