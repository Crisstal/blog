<?php
$action = $_REQUEST['action'];


// include("vues/header.php");

switch($action){ 
	case 'ConsulterUtilisateur': {
		if (empty($_SESSION['type'] == 1337)){
			echo '<h1>ERREUR : PERMISSION REFUSE</h1>';
		} else {
		$nbelementsparpage = 5;
		$page = $_GET["page"]-1;
		$debut = $page*$nbelementsparpage;
		$LesUtilisateurs = $pdo->getLesUtilisateur($debut, $nbelementsparpage);
		$LesDroits = $pdo->getLesDroits();
		$countUtilisateurs = $pdo -> getCountUtilisateur();
		
		$nbdepages = ceil($countUtilisateurs[0]["cpt"]/$nbelementsparpage);
		include("vues/header.php");
		include("vues/consultUtilisateur.php");
	}
			
}
	
	
	case 'ValidForm' :{
	
}
case 'Modifier': {
	$saveid = $_COOKIE["idPraMODIF"];
		if (isset($_POST[$saveid."lineinput2"]))  {
		$req = $pdo->modifierUtilisateurAdmin($_POST[$saveid."lineinput4"],$_POST[$saveid."lineinput3"],$_POST[$saveid."lineinput2"],$_POST[$saveid."lineinput1"],$saveid);
		
	} 
		@header('Location: index.php?page=1&uc=admin&action=ConsulterUtilisateur');

}



}
	
include("vues/footer.php");

?>