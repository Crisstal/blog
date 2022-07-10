<?php
if(!isset($_REQUEST['action'])){
	$_REQUEST['action'] = 'accueil';
}

$action = $_REQUEST['action'];

switch($action)
{
    case 'accueil'  :
        {
            $LesArticles = $pdo->get3articles(); 
            setcookie('idPraMODIF', '0');
            setcookie('idPra', '0');
            include("vues/header.php");
            include("vues/footer.php");
            include("vues/v_accueil.php");
            
         
            break;
        }

      
}



?>