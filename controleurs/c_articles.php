<?php
$action = $_REQUEST['action'];
$id_article = isset($_GET['id']);
switch($action){ 
	
	case 'ConsulterArticle':  {
		$article = $pdo->getarticles($_GET['id']); 
		$_SESSION['article'] = $_GET['id']; 
		$page = $_GET["page"]-1;
		$nbelementsparpage = 4;
		$debut = $page*$nbelementsparpage;
		$countarticle = $pdo->getCountCom($_SESSION['article']);
		$nbdepages = ceil($countarticle[0]["cpt"]/$nbelementsparpage);
		$Lescoms = $pdo->getLesComs($debut, $nbelementsparpage,$_GET['id']);
		include("vues/header.php");
		include("vues/footer.php");
		include("vues/article.php");
		break;
	}
	case 'CommentaireAjouté':  {
		
		$article = $pdo->getarticles($_GET['id']); 
		$nbelementsparpage = 4;
		$debut = $page*$nbelementsparpage;
		$Lescoms = $pdo->getLesComs($debut, $nbelementsparpage,$_GET['id']); 
		$addCommentaire = $pdo->addComs($_POST['commentaire'],$_SESSION['article']);
		header('Location: index.php?id='.$_SESSION['article'].'&page=1&uc=articles&action=ConsulterArticle');
		break;
	}

	case 'creerunarticle':  {
		$type = $_SESSION['type'];
		if ($type == 1 || $type == null){
			echo '<h1>ERREUR : PERMISSION REFUSE</h1>';
			echo $type;
		} else {
		$categorie = $pdo->getCategorieArticle();
		$id_article = $pdo->getIdProchainArticle();
		include("vues/header.php");
		include("vues/footer.php");
		include("vues/creer-article.php");
	}
		break;
	}
	case 'ValidArticle':  {
		$creerarticle = $pdo->creerArticle($_POST['article'],$_POST['categorie']);
		$categorie = $pdo->getCategorieArticle();
		$id_article = $pdo->getIdProchainArticle();
		move_uploaded_file($_FILES["file"]["tmp_name"], "./upload/".$_FILES["file"]["name"]);
		$addimage = $pdo->ajouterImage('/upload/'.$_FILES["file"]["name"].'',$id_article - 1);
		include("vues/header.php");
		include("vues/footer.php");
		include("vues/creer-article.php");
		break;
	}case 'lesarticles':  {
		if (!empty($_GET['categorie'])) {
			$categorie = $_GET['categorie'];
			$nbelementsparpage = 4;
		$page = $_GET["page"]-1;
		$debut = $page*$nbelementsparpage;
		$countarticle = $pdo->getCountArticleCategorie($categorie);
		$nbdepages = ceil($countarticle[0]["cpt"]/$nbelementsparpage);
		$lesarticles = $pdo->getLesArticlesParCategorie($debut, $nbelementsparpage,$categorie);
		} else {

		
		$nbelementsparpage = 4;
		$page = $_GET["page"]-1;
		$debut = $page*$nbelementsparpage;
		$countarticle = $pdo->getCountArticle();
		$nbdepages = ceil($countarticle[0]["cpt"]/$nbelementsparpage);
		$lesarticles = $pdo->getLesArticles($debut, $nbelementsparpage);
	}
		include("vues/header.php");
		include("vues/footer.php");
		include("vues/lesarticles.php");
		break;
	}
	
}
 
?>
