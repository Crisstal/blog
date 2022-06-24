<?php
/** 
 * Classe d'accès aux données. 
  * Utilise les services de la classe PDO
 * pour l'application exempleMVC du cours sur la bdd bddemployés
 * Les attributs sont tous statiques,
 * les 4 premiers pour la connexion
 * $monPdo de type PDO 
 * $monPdo qui contiendra l'unique instance de la classe
 * @package default
 * @author AP modifié par ST
 * @version    1.0
 * @link       http://www.php.net/manual/fr/book.pdo.php
 */

class PdoGsb{   		
      	private static $serveur='mysql:host=localhost';
      	private static $bdd='dbname=blog';   		
      	private static $user='root' ;    		
      	private static $mdp='' ;
        private static $monPdo;
		private static $monPdoGsb=null;

/**
 * Constructeur privé, crée l'instance de PDO qui sera sollicitée
 * pour toutes les méthodes de la classe
 */				
	private function __construct(){
        try {
    	PdoGsb::$monPdo = new PDO(PdoGsb::$serveur.';'.PdoGsb::$bdd, PdoGsb::$user, PdoGsb::$mdp); 
		PdoGsb::$monPdo->query("SET CHARACTER SET utf8");
	    } catch (Exception $e) {
            throw new Exception("Erreur Ã  la connexion \n" . $e->getMessage());
        }
    }

	public function _destruct(){
		PdoGsb::$monPdo = null;
	}
/**
 * Fonction statique qui crée l'unique instance de la classe PdoExemple
 
 * Appel : $instancePdoExemple = PdoExemple::getPdoExemple();
 
 * @return l'unique objet de la classe PdoExemple
 */
	public  static function getPdoGsb(){
		if(PdoGsb::$monPdoGsb==null){
			PdoGsb::$monPdoGsb= new PdoGsb();
		}
		return PdoGsb::$monPdoGsb;  
	}
   public function getInfosUtilisateur($login,$mdp){
       $req="select * from utilisateurs where email = :login and password = :mdp";
        try {
			$prep = PdoGsb::$monPdo->prepare($req);
			$prep->bindValue(':login', $login,PDO::PARAM_STR);
			$prep->bindValue(':mdp', $mdp,PDO::PARAM_STR);
			$prep->execute();
			$result=$prep->fetch(PDO::FETCH_ASSOC);
			return $result;
        }
        catch (Exception $e) 
        {
            echo 'Exception reçue : ',  $e->getMessage(), "\n";
        }
    }
	public function getLesUtilisateur($debut,$fin){
		$req="select * from utilisateurs order by id limit :debut,:fin";
		$rs = PdoGsb::$monPdo->query($req);
		$prep = PdoGsb::$monPdo->prepare($req);
		$prep->bindValue(':debut', $debut,PDO::PARAM_INT);
		$prep->bindValue(':fin', $fin,PDO::PARAM_INT);
		$prep->execute();
		$ligne = $prep->fetchAll(PDO::FETCH_ASSOC);
		return $ligne;
	 }
	 public function getLesArticles($debut,$fin){
		$req="select * from articles order by id desc limit :debut,:fin";
		$rs = PdoGsb::$monPdo->query($req);
		$prep = PdoGsb::$monPdo->prepare($req);
		$prep->bindValue(':debut', $debut,PDO::PARAM_INT);
		$prep->bindValue(':fin', $fin,PDO::PARAM_INT);
		$prep->execute();
		$ligne = $prep->fetchAll(PDO::FETCH_ASSOC);
		return $ligne;
	 }
	 public function getLesArticlesParCategorie($debut,$fin,$categorie){
		$req="select * from articles where id_categorie = :categorie order by id limit :debut,:fin ";
		$rs = PdoGsb::$monPdo->query($req);
		$prep = PdoGsb::$monPdo->prepare($req);
		$prep->bindValue(':debut', $debut,PDO::PARAM_INT);
		$prep->bindValue(':fin', $fin,PDO::PARAM_INT);
		$prep->bindValue(':categorie', $categorie,PDO::PARAM_INT);
		$prep->execute();
		$ligne = $prep->fetchAll(PDO::FETCH_ASSOC);
		return $ligne;
	 }
	 
	 public function getLesComs($debut,$fin,$id_article){
		$req="select * from commentaires C inner join utilisateurs U on C.id_utilisateur = U.id where id_article = :id_article order by C.id limit :debut,:fin;";
		$prep = PdoGsb::$monPdo->prepare($req);
		$prep->bindValue(':debut', $debut,PDO::PARAM_INT);
		$prep->bindValue(':fin', $fin,PDO::PARAM_INT);
		$prep->bindValue(':id_article', $id_article,PDO::PARAM_INT);
		$prep->execute();
		$ligne = $prep->fetchAll(PDO::FETCH_ASSOC);
		return $ligne;
	 }

	    
	 public function addComs($commentaire,$id_article){
		$req="INSERT INTO commentaires (commentaire, id_article,id_utilisateur,date) Values (:commentaire,:id_article,:id_utilisateur,:date)";
		$date = date('d-m-y h:i:s');
		$prep = PdoGsb::$monPdo->prepare($req);
		$prep->bindValue(':commentaire', $commentaire,PDO::PARAM_STR);
		$prep->bindValue(':id_article', $id_article,PDO::PARAM_INT);
		$prep->bindValue(':id_utilisateur', $_SESSION['id'],PDO::PARAM_INT);
		$prep->bindValue(':date', $date,PDO::PARAM_STR);
		$prep->execute();
		$ligne = $prep->fetchAll(PDO::FETCH_ASSOC);
		return $ligne;
	 }

	 


   public function get3articles() {

        $req="select * from articles a  order by a.id desc limit 3";
		$rs = PdoGsb::$monPdo->query($req);
		$ligne = $rs->fetchAll(PDO::FETCH_ASSOC);
		return $ligne;
    }

	public function getarticles($id) {
		$req="select * from articles where id = :id";
		try {
		  $prep = PdoGsb::$monPdo->prepare($req);
		  $prep->bindValue(':id', $id,PDO::PARAM_INT);
		  $prep->execute();
		  $ligne = $prep->fetchAll(PDO::FETCH_ASSOC);
		  return $ligne;
		 } catch (Exception $e) 
		  {
			  echo 'Exception reçue : ',  $e->getMessage(), "\n";
		  }
		 
	  }
	  
	  public function getUtilisateurById($id) {
		$req="select login from utilisateurs where id = :id";
		try {
			$prep = PdoGsb::$monPdo->prepare($req);
			$prep->bindValue(':id', $id,PDO::PARAM_INT);
			$prep->execute();
			$ligne = $prep->fetchAll(PDO::FETCH_ASSOC);
			return $ligne;
		   } catch (Exception $e) 
			{
				echo 'Exception reçue : ',  $e->getMessage(), "\n";
			}
		   
  
	}


	  public function getCategorieArticle() {
		$req="select * from categories";
		try {
		  $prep = PdoGsb::$monPdo->prepare($req);
		  $prep->execute();
		  $ligne = $prep->fetchAll(PDO::FETCH_ASSOC);
		  return $ligne;
		 } catch (Exception $e) 
		  {
			  echo 'Exception reçue : ',  $e->getMessage(), "\n";
		  }
		 
	  }
	  
	  public function verifAncienMotDePasse($mdp) {
		$req="select id from utilisateurs where password = :mdp and id =:id";
		try {
		  $prep = PdoGsb::$monPdo->prepare($req);
		  $prep->bindValue(':id', $_SESSION['id'],PDO::PARAM_INT);
		  $prep->bindValue(':mdp', hash('sha256', $mdp),PDO::PARAM_STR);
		  $prep->execute();
		  $ligne = $prep->fetchAll(PDO::FETCH_ASSOC);
		  return $ligne;
		 } catch (Exception $e) 
		  {
			  echo 'Exception reçue : ',  $e->getMessage(), "\n";
		  }
		 
	  }
	  public function creerArticle($article,$categorie) {
		$req="INSERT INTO articles (article,id_utilisateur, id_categorie, date)VALUES(:article , :id_utilisateur , :id_categorie , :date)";
		try {
		  $date = date('d-m-y h:i:s');
		  $prep = PdoGsb::$monPdo->prepare($req);
		  $prep->bindValue(':article', $article,PDO::PARAM_STR);
		  $prep->bindValue(':id_utilisateur',$_SESSION['id'],PDO::PARAM_INT);
		  $prep->bindValue(':id_categorie', $categorie,PDO::PARAM_INT);
		  $prep->bindValue(':date', $date,PDO::PARAM_STR);
		  $prep->execute();
		 } catch (Exception $e) 
		  {
			  echo 'Exception reçue : ',  $e->getMessage(), "\n";
		  }
	  }

	  public function ajouterImage($src,$id_article) {
		$req="INSERT INTO image (src,id_article)VALUES( :src , :id_article)";
		try {
		  $date = date('d-m-y h:i:s');
		  $prep = PdoGsb::$monPdo->prepare($req);
		  $prep->bindValue(':src', $src,PDO::PARAM_STR);
		  $prep->bindValue(':id_article',$id_article,PDO::PARAM_INT);
		  $prep->execute();
		 } catch (Exception $e) 
		  {
			  echo 'Exception reçue : ',  $e->getMessage(), "\n";
		  }
	  }
	  public function getImage($id_article) {
		$req="select src from image where id_article =:id_article ";

		  $prep = PdoGsb::$monPdo->prepare($req);
		  $prep->bindValue(':id_article',$id_article,PDO::PARAM_INT);
		  $prep->execute();
		  $ligne = $prep->fetchAll(PDO::FETCH_ASSOC);
		  return $ligne;
		 
	  }

	public function creerUtilisateur($login,$password, $email) {
		$req="INSERT INTO utilisateurs (login,password, email, id_droits)VALUES(:login , :password , :email , '1')";
		try {
		  $prep = PdoGsb::$monPdo->prepare($req);
		  $prep->bindValue(':login', $login,PDO::PARAM_STR);
		  $prep->bindValue(':password',hash('sha256', $password),PDO::PARAM_STR);
		  $prep->bindValue(':email', $email,PDO::PARAM_STR);
		  $prep->execute();
		
		 } catch (Exception $e) 
		  {
			  echo 'Exception reçue : ',  $e->getMessage(), "\n";
		  }
	  }
	  public function modifUtilisateur($LOGIN, $Email,$password) {
			
		$req="UPDATE utilisateur set login = :LOGIN, email = :email, password = :password WHERE id = :id";
		try {
		  $prep = PdoGsb::$monPdo->prepare($req);
			 $prep->bindValue(':LOGIN', $LOGIN,PDO::PARAM_STR);
			$prep->bindValue(':email', $Email,PDO::PARAM_STR);
			$prep->bindValue(':password',hash('sha256', $password),PDO::PARAM_STR);
			$prep->bindValue(':id', $_SESSION['id'],PDO::PARAM_INT);
			$prep->execute();
			$_SESSION['login']= $LOGIN; // mémorise les variables de session
			$_SESSION['log']= $Email;
		 } catch (Exception $e) 
		  {
			  echo 'Exception reçue : ',  $e->getMessage(), "\n";
		  }
	  }

	  public function modifUtilisateurProfile($LOGIN, $Email) {
			
		$req="UPDATE utilisateurs set login = :LOGIN, email = :email WHERE id = :id";
		try {
		  $prep = PdoGsb::$monPdo->prepare($req);
			 $prep->bindValue(':LOGIN', $LOGIN,PDO::PARAM_STR);
			$prep->bindValue(':email', $Email,PDO::PARAM_STR);
			$prep->bindValue(':id', $_SESSION['id'],PDO::PARAM_INT);
			$prep->execute();
			$_SESSION['login']= $Email; // mémorise les variables de session
			$_SESSION['log']= $LOGIN;
		 } catch (Exception $e) 
		  {
			  echo 'Exception reçue : ',  $e->getMessage(), "\n";
		  }
	  }

	  public function modifUtilisateurMdp($password) {
			
		$req="UPDATE utilisateurs set password = :password WHERE id = :id";
		try {
		  $prep = PdoGsb::$monPdo->prepare($req);
			 $prep->bindValue(':password', hash('sha256', $password),PDO::PARAM_STR);
			 $prep->bindValue(':id', $_SESSION['id'],PDO::PARAM_INT);
			$prep->execute();
		 } catch (Exception $e) 
		  {
			  echo 'Exception reçue : ',  $e->getMessage(), "\n";
		  }
	  }

	  public function modifierUtilisateurAdmin($LOGIN, $Email,$password, $type,$id) {
			
		$req="UPDATE utilisateurs set login = :LOGIN, email = :email, password = :password, id_droits = :type WHERE id = :id";
		try {
		  $prep = PdoGsb::$monPdo->prepare($req);
			 $prep->bindValue(':LOGIN', $LOGIN,PDO::PARAM_STR);
			$prep->bindValue(':email', $Email,PDO::PARAM_STR);
			$prep->bindValue(':password',$password,PDO::PARAM_STR);
			$prep->bindValue(':type',$type,PDO::PARAM_INT);
			$prep->bindValue(':id', $id,PDO::PARAM_INT);
			$prep->execute();

		 } catch (Exception $e) 
		  {
			  echo 'Exception reçue : ',  $e->getMessage(), "\n";
		  }
	  }
	  
			  public function getCountUtilisateur() {
				  $req="select count(id) as cpt from utilisateurs";
				  $rs = PdoGsb::$monPdo->query($req);
				  $ligne = $rs->fetchAll();
				  return $ligne;
			  }
			  public function getCountCom($id_article) {
				  
				$req="select count(id) as cpt from commentaires where id_article = :id_article";
				  try {
					  $prep = PdoGsb::$monPdo->prepare($req);
					  $prep->bindValue(':id_article', $id_article,PDO::PARAM_STR);
					  $prep->execute();
					  $result=$prep->fetchAll();
					  return $result;
				  }
				  catch (Exception $e) 
				  {
					  echo 'Exception reçue : ',  $e->getMessage(), "\n";
				  }
			  }
			  
			  public function getCountArticleCategorie($categorie) {
				  
				$req="select count(id) as cpt from articles where id_categorie = :categorie";
				  try {
					  $prep = PdoGsb::$monPdo->prepare($req);
					  $prep->bindValue(':categorie', $categorie,PDO::PARAM_STR);
					  $prep->execute();
					  $result=$prep->fetchAll();
					  return $result;
				  }
				  catch (Exception $e) 
				  {
					  echo 'Exception reçue : ',  $e->getMessage(), "\n";
				  }
			  }
			  public function getCountArticle() {
				  $req="select count(id) as cpt from articles";
				  $rs = PdoGsb::$monPdo->query($req);
				  $ligne = $rs->fetchAll();
				  return $ligne;
			  }

			  public function getLesDroits() {
				  $req="select * from droits";
				  $rs = PdoGsb::$monPdo->query($req);
				  $ligne = $rs->fetchAll(PDO::FETCH_ASSOC);
				  return $ligne;
			  }
			  public function getImageParArticle($id_article) {
				  $req="select * from image where id_article =:id_article ";
					$prep = PdoGsb::$monPdo->prepare($req);
					$prep->bindValue(':id_article', $id_article,PDO::PARAM_STR);
					$prep->setFetchMode();
					$prep->execute();
					$result=$prep->fetchAll();
					return $result;
			}

				public function getIdProchainArticle() {
					  $req="select max(id) as maxid from articles";
					  $rs = PdoGsb::$monPdo->query($req);
					  $ligne = $rs->fetchAll(PDO::FETCH_ASSOC);
					  $num = $ligne[0]['maxid'] + 1;
					  return $num;
				
				  }


			  public function supprUtilisateur($id) {
				
				try {
				  $req="delete from utilisateurs where id = :id ";
				  $prep = PdoGsb::$monPdo->prepare($req);
				  $prep->bindValue(':id', $id,PDO::PARAM_INT);
				  $prep->execute();
				} catch (Exception $e) 
				{
					echo 'Exception reçue : ',  $e->getMessage(), "\n";
				}
			  }

			  

			  

			  


	}
  ?>