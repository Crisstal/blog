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




}

h1{
    text-align : center;
    margin-top : 6%;
    color : white;

}

</style>

<body>
<h1>Découvrez vite <a style = "color : red">les articles</a> du blog !</h1>
<div class = "container-card">
    <?php 
   $count = 0;
    foreach($LesArticles as $article)  { 
        $count++; 
        $LesImages = $pdo->getImage($article["id"]);
        $src = "";
        foreach($LesImages as $img){
            $src = $img['src'];
        }
       echo' <div class ="card" >
        <img src=".'.$src.'" alt="">
        <div class ="content" id ="content">
        <p id = "text-content">'.substr($article['article'], 0,300).'...</p>
        <a href ="index.php?id='.$article["id"].'&page=1&uc=articles&action=ConsulterArticle">Lire la suite.</a>
        </div>
        </div>';
      }
      if ($count = 0) {
        echo 'AUCUN ARTICLE PUBLIE';
      }
    ?>

</div>

<script>






</body>


</html>