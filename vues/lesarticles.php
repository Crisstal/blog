<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Blog</title>
    <link href="img/favicon.ico" rel="icon">

    <link href="css/bootstrap.min.css" rel="stylesheet">

</head>

<style>
    body{
        background-color : #3d3d3d;
    }
    .card{
        width : 350px;
        height : 450px;
        background-color : black;
        position : relative;
        display : grid;
        text-overflow: ellipsis;
        word-wrap: break-word;
        margin-left : 2%;
        border : solid red  4px;
        margin-top : 2%;
        margin-bottom : 2%;
    }

    
.content {
    position : absolute; 
    top : 215px;
    word-wrap: break-word;
    color : white;
    text-align : justify;
   
}
.card img {

    width : 342px;
    height : 220px;
    object-fit : contain;
   
}

.container-card {
display : flex; 
align-items: center;
justify-content: center;
margin-top : 3%;
flex-wrap: wrap;




}
.container-page{
    display : flex;
    text-align : center;
    justify-content : center;
    margin-bottom: 7%;
  }

h1{
    text-align : center;
    margin-top : 6%;
    color : white;

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
</style>

<body>
<h1>Voici <a style = "color : red">les articles</a> du blog !</h1>
<div class = "container-card">
    <?php 
    $count = 0;
    foreach($lesarticles as $article)  {
            $LesImages = $pdo->getImage($article["id"]);
            $src = "";
            foreach($LesImages as $img){
                $src = $img['src'];
            } 
       echo' <div class ="card" >
        <img src=.'.$src.' alt="">
        <div class ="content" id ="content">
        <p id = "text-content">'.substr($article['article'], 0,300).'...</p>
        <a href ="index.php?id='.$article["id"].'&page=1&uc=articles&action=ConsulterArticle">Lire la suite.</a>
        </div>
        </div>';
        $count = $count + 1 ;
        
      }
      if ($count == 0) {
        echo 'AUCUN ARTICLE';
      }


    ?>
    
</div>
    <div class ="container-page">
    <?php
            for($i = 1; $i<= $nbdepages;$i++) {
             if ($_GET['page'] != $i) {
                if (!empty($_GET['categorie'])){
                    echo "<a class = pagination href ='index.php?categorie=$categorie&page=$i&uc=articles&action=lesarticles'>$i</a>";
                }else {
        echo "<a class = pagination href ='index.php?page=$i&uc=articles&action=lesarticles'>$i</a>";
                            
    }
             }else {
              echo '<a class ="selectedindex">'.$i.'</a>';
             }
     }?>

</div>






</body>


</html>