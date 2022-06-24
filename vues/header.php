
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">  
<html lang="fr">
<style>
    .bar {
        height : 50px;
        background-color : black;
        position : fixed;
        width : 100%;
        z-index : 1000;
        top : 1;
    


    }
    .bar ul {
        position : relative;
        top : 20%;
        width : 100%;
       
    }
    .bar ul li {
        display : inline;
        color : white;
        align-items : center;
        font-family : "Gill Sans", sans-serif;
        cursor : pointer;
        margin-left : 5px;
    }
    .bar ul li:nth-child(0n+5) {
    position : absolute;
    left : 90%;

    }

    .bar ul li:nth-child(0n+1) {
    margin-left : -20px;
    margin-right : 13px;
    font-size : 18px;

    }

   


.bar li a:hover {
  color: red;
}
.test{
    text-decoration : none;
    color : white;
}
.menu-deroulant{
    background-color : black;
    position : absolute;
    display : grid;
    left : 105px;
    top : 50px;
    width : 100px;
    text-align : center;
    border : solid red 2px;
    border-top : none;
    opacity : 0;
    text-decoration : none;
    color : white;
}

.menu-deroulant a:hover{
    background-color : red;
    cursor : pointer;
}
#menu{
    opacity : 0;
   pointer-events: none;
}


</style>
    <div class ="bar">
    <ul>
        <?php 
        if (!isset($_SESSION["login"])) {
            echo '<li>
            <a style = "color : red">B</a>LOG
        </li>
        <li>
       
        <i class="bi bi-journal-text"></i><a id ="categorie"> CATEGORIE</a>
        </li>
        <li>
       
        <i class="bi bi-card-list"></i> <a href  = "index.php?page=1&uc=articles&action=lesarticles" class = "test">Tous les articles</a>
        </li>
        <li>
        <i class="bi bi-person-fill"></i><a href  = "index.php?uc=connexion&action=demandeConnexion" class = "test"> CONNEXION</a>
        </li>
        <li>
        <i class="bi bi-person-plus-fill"></i><a href  = "index.php?uc=inscription&action=signup" class = "test">    INSCRIPTION</a>
        </li>';
        } else if ($_SESSION["type"]> 1) {
            echo '<li>
            <a style = "color : red">B</a>LOG
        </li>
        <li>
       
        <i class="bi bi-journal-text"></i><a id ="categorie"> CATEGORIE</a>
        
        </li>
        <li>
       
        <i class="bi bi-card-list"></i> <a href  = "index.php?page=1&uc=articles&action=lesarticles" class = "test">Tous les articles</a>
        </li>
        <li>
       
        <i class="bi bi-person-lines-fill"></i> <a href  = "index.php?uc=profil&action=consultprofil" class = "test">Modifier profil</a>
        </li>
        <li>
         <i class="bi bi-arrow-bar-left"></i>  <a href  = "index.php?uc=connexion&action=deconnexion" class = "test">  Deconnexion</a>
        </li>
        <li>
       
        <i class="bi bi-file-earmark-plus"></i><a href  = "index.php?uc=articles&action=creerunarticle" class = "test">  Creer un article</a>
        </li>';
         
        }else {
            echo '<li>
            <a style = "color : red">B</a>LOG
        </li>
        <li>
       
        <i class="bi bi-journal-text"></i> <a id ="categorie"> CATEGORIE</a>
    
        </li>
        <li>
       
        <i class="bi bi-card-list"></i> <a href  = "index.php?page=1&uc=articles&action=lesarticles"" class = "test">Tous les articles</a>
        </li>
        <li>
       
        <i class="bi bi-person-lines-fill"></i> <a href  = "index.php?uc=profil&action=consultprofil" class = "test">Modifier profil</a>
        </li>
         <li>
         <i class="bi bi-arrow-bar-left"></i>  <a href  = "index.php?uc=connexion&action=deconnexion" class = "test">  Deconnexion</a>
        </li>';
        }
        
        ?>
    </ul>

    <div id ="menu" class ="">
        <?php 
        $LesCategories = $pdo->getCategorieArticle();
        foreach($LesCategories as $cat){
        echo '<a href = "index.php?categorie='.$cat['id'].'&page=1&uc=articles&action=lesarticles">'.$cat['nom'].'</a>';
    }
        ?>
    </div>
</div>



</html>

<script>
    etat = true;
function menu(){
const btn = document.getElementById('categorie');
const menu = document.getElementById('menu');

btn.addEventListener('click', e => {
    if (etat == true){
 menu.style.opacity = '1';

 menu.classList.add("menu-deroulant");
 menu.style.pointerEvents = "auto";

 etat = false;
    } else {
 menu.style.opacity = '0';
 menu.classList.remove("menu-deroulant");
 menu.style.pointerEvents = "none";
 etat = true;
    }
});

}

menu()

</script>