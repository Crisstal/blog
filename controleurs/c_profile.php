<?php
$action = $_REQUEST['action'];
switch($action){ 
	case 'consultprofil':  {
		include("vues/header.php");
		include("vues/footer.php");
		include("vues/profile.php");
		break;
	}

	case 'ValidModif':  {
		$verif = $pdo -> verifAncienMotDePasse($_POST['Password1']);
	if (empty($_POST['Password1'])){
     $modifierprofile = $pdo->modifUtilisateurProfile($_POST['Login'], $_POST['Email']);
	 include("vues/header.php");
		include("vues/footer.php");
		include("vues/profile.php");
	}else {
		if(!empty($verif) && $_POST['Password2'] == $_POST['Password3']) {
			$modifierprofile = $pdo->modifUtilisateurProfile($_POST['Login'], $_POST['Email']);
			$nouveaumdp = $pdo ->modifUtilisateurMdp($_POST['Password2']);
		include("vues/header.php");
		include("vues/footer.php");
		include("vues/profile.php");
		} else {
		include("vues/header.php");
		include("vues/footer.php");
		include("vues/profile.php");
		echo '<script>alert("Les mots de passes ne correspondent pas")</script>';
	    
		
		}
		break;
	}
	}

}
 
?>