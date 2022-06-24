
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">  
<html lang="fr">
<style>
    .foot {
        height : 50px;
        background-color : black;
        POSITION : fixed;
        width : 100%;
        z-index : 1000;

padding: 10px 10px 10px 10px; 
bottom: 0;

width: 100%; 
height: 40px; 
background: BLACK; 

    }
    .foot ul {
        position : relative;
      
        width : 100%;
       
    }
    .foot ul li {
        display : inline;
        align-items : center;
        font-family : "Gill Sans", sans-serif;
        cursor : pointer;
        margin-left : 20px;
        color : white;
        
    }
    .foot ul li:nth-child(0n+5) {
    position : absolute;
    left : 90%;

    }

    .foot ul li:nth-child(0n+1) {
    margin-left : -20px;
    margin-right : 13px;


    }

    .foot li:hover {
  color: red;
}
</style>
    <div class ="foot">
    <ul>
      
        <li>
       
        <i class="bi bi-house"></i> <a href  = "index.php?uc=home&action=accueil">Accueil </a>

       
        <?php 
        if(!isset($_SESSION['type'])){
            echo ' <li>
            <i class="bi bi-person-plus-fill"></i>  <a href  = "index.php?page=1&uc=connexion&action=signup"> Inscription</a>
            </li>
            <li>
            <i class="bi bi-person-check"></i> <a href  = "index.php?page=1&uc=connexion&action=demandeConnexion"> Connexion</a>
            </li>';
        
        } else {
            
        }
        if (isset($_SESSION['type']) && $_SESSION['type']>42) {
            echo '<li>
            <i class="bi bi-terminal-dash"></i><a href  = "index.php?page=1&uc=admin&action=ConsulterUtilisateur"> Admin</a>
            
            </li>';
        }
        ?>

    </ul>

</div>


</html>