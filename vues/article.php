<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Blog</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
  
</head>

<style>
    body{
        background-color : #3d3d3d;
    }
  
    .article-container{
        display : grid;
        align-items : center;
        justify-content : center;
    }
    .article-container img{
        display : grid;
        align-items : center;
        justify-content : center;
        width : 700px;
        height : 400px;
        object-fit : contain;
        margin : auto;
        margin-top : 60px;
    }

    .article-container a{
        color : gray;
    }
    .article-container p {
    word-wrap: break-word;
    color : white;
    text-align : justify;
    }

    .container-comments{
    display : grid;
    align-items : center;
    justify-content : center;
    }

    .commentaire {
        width : 500px;
        height : 100px;
        background-color : none;
      
    }
    .commentaire p {
        width : 500px;
        height :100px;
        color : white;
        word-wrap: break-word;
        text-align : justify;
    }
    .commentaire a {
       color : gray;
    }
    .btn-publier{
        width : 500px;
        height: 50px;
        background-color : red;
        color : white;
        text-align : center;
        cursor : pointer;
        font-family : calibri;
        margin-top : 2%;
        border : none;
        border-radius : 5px;
    }

    .page-container{
        display : grid; 
        
    }
    .pagination {
    width : 30px;
    height : 30px;
    border : solid red 3px;
    margin-left : 2px;
    text-decoration : none;
    color : red;
    justify-content : center;
  }
  .selectedindex{
    width : 30px;
    height : 30px;
    border : solid red 3px;
    margin-left : 2px;
    text-decoration : none;
    color : white;
    background-color : red;
    justify-content : center;
  }
  .align-pagination {
    display : flex;
    justify-content : center;
    align-items : center;
    margin-bottom : 10px;
  }
</style>
<div class = "page-container">
<?php

            foreach ($article as $article1){
                $getIdUtilisateur = $pdo -> getUtilisateurById($article1["id_utilisateur"]);
                $iduser = "";
                foreach($getIdUtilisateur as $id){
                    $iduser = $id['login'];
                } 
                $LesImages = $pdo->getImage($article1["id"]);
                $src = "";
            foreach($LesImages as $img){
                $src = $img['src'];
            } 
            echo '<div class = "article-container">
            <img src=.'.$src.' alt="">
            <p>'.$article1['article'].'<br><br><a style ="color : gray">publié par '.$iduser.' le '.$article1['date'].'</a></p>
            </div>';
        }
    


?>
<form action="index.php?id=<?php $_GET['id'] ?>&uc=articles&action=CommentaireAjouté" method ="post">
<h1 style ="text-align : center; color: white;">Commentaire</h1>
<div class ="container-comments">
<?php
            foreach ($Lescoms as $coms){
            echo '<div class ="commentaire">
            <a>'.$coms['login'].', le '.$coms['date'].'</a>
            <p>'.$coms['commentaire'].'</p>
                </div>';
        }
    


?>
<div class ="align-pagination">
<?php
            for($i = 1; $i<= $nbdepages;$i++) {
             if ($_GET['page'] != $i) {
                $id = $_SESSION['article'];
                    echo "<a class = pagination href ='index.php?id=$id&page=$i&uc=articles&action=ConsulterArticle'>$i</a>";
                    
             }else {
              echo '<a class ="selectedindex">'.$i.'</a>';
             }
     }?>

    </div>

<textarea name = "commentaire" style = "resize : none; height : 200px; width : 500px;" rows="5" cols="33"  class="form-control" id="floatingInput"
                                        placeholder="Redigez un commentaire"></textarea>
<button class ="btn-publier" type = "submit">PUBLIER</button>
<button style = "opacity : 0;" type ="button"></button>
</div>

    </form>
<br>


</div>
</body>


</html>