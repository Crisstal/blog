<?php
$LesImages = $pdo->getImageParArticle($_GET['id']); 
echo $LesImages[0]['bin'];

?>