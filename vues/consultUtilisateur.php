<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>GSB</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
  
</head>

<body onload = "cookieinit()">
    <script>
        function cookieinit(){
          document.cookie ="idPra= 0";
          document.cookie ="idPraMODIF= 0";
      }
      
      </script>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
    

<style>
  .container-page{
    display : flex;
    text-align : center;
    justify-content : center;
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
  body{
    background-color : #3d3d3d;
  }
</style>
<body>

            <!-- Chart Start -->
            <form action="index.php?uc=admin&action=Modifier" method ="post">
            
            <table id ="table" class="table tableauC" style ="margin-left : 30px; margin-top : 10%;">
  <thead>
    <tr class="table-info">
      <th scope="col">ID</th>
      <th scope="col">ID_DROITS</th>
      <th scope="col">Mot de passe</th>
      <th scope="col">Email</th>
      <th scope="col">Login</th>
	  <th scope="col">Modifier</th>
    <th scope="col">Supprimer</th>
    </tr>
  </thead>

  </form>
        <?php
   
	   foreach($LesUtilisateurs as $user)  {  
      
		   echo "<div id = ".$user['id']."row'><tr><th id ='".$user['id']."line0' scope='row'>".$user['id']."</th><td id ='".$user['id']."line1'>".$user['id_droits']."</td><td id ='".$user['id']."line2'>".$user['password']."</td><td id ='".$user['id']."line3'>".$user['email']."</td><td id ='".$user['id']."line4'>".$user['login']."</td><td id ='".$user['id']."modifline'><button type = button id ='".$user['id']."modif'class='btn' onclick =modifbtn(".$user['id'].")><i id ='".$user['id']."modifstyle' style='color:black; font-size:20px;' class='bi bi-pencil-fill'></i></button></td><td id ='".$user['id']."supprline'><button type = button id ='".$user['id']."suppr' onclick =VerifUser(".$user['id'].") class='btn'><i  style='color:black; font-size:20px;' class='bi bi-archive-fill'></i></button></td></div>";        
		 }

     
    ?>


</table>
<div class ="container-page">
           <?php for($i = 1; $i<= $nbdepages;$i++) {
             if ($_GET['page'] != $i) {
        echo "<a class = pagination href ='index.php?page=$i&uc=admin&action=ConsulterUtilisateur'>$i</a>";
             }else {
              echo '<a class ="selectedindex">'.$i.'</a>';
             }
     }?>     
     </div>
        </form>            
                
 


        </div>
      
    </body>
    <script>
        function delay(time) { return new Promise(resolve => setTimeout(resolve, time));}
        let etat = true;
        function VerifUser(btn){
const bouton = document.getElementById(btn);

let aujourdhui = new Date();
aujourdhui.setMinutes(aujourdhui.getMinutes()+1)

  document.cookie = "idPra ="+btn+"; expires="+aujourdhui.toGMTString()+";";


var result = confirm("Do you want to continue?");

if(result)  {
  const row = document.getElementById(btn+"row");
  const table = document.getElementById("table");
 for (i = 0; i<=4; i++){
  document.getElementById(btn+"line"+i).parentNode.removeChild(document.getElementById(btn+"line"+i));
 }
 document.getElementById(btn+"supprline").parentNode.removeChild(document.getElementById(btn+"supprline"))
    document.getElementById(btn+"modifline").parentNode.removeChild(document.getElementById(btn+"modifline"))



 bouton.innerHTML = bouton.innerHTML<?php

$LesUsers = $pdo->supprUtilisateur($_COOKIE["idPra"]);
?>


// delay(2000).then(() => window.location.replace("http://localhost/GSB_Visites_2021/index.php?uc=CompteRendu&action=consultCR"));

 } else {
  document.cookie = "idPra =0";
}
        }


function modifbtn(btn){
  const btncolor = document.getElementById(btn+"modifstyle");
  let aujourdhui = new Date();

aujourdhui.setMinutes(aujourdhui.getMinutes()+4)

  document.cookie = "idPraMODIF ="+btn+"; expires="+aujourdhui.toGMTString()+";";

  if (etat == true) {
  btncolor.style.color = "green";
  let lines = document.getElementById(btn+"line0").innerHTML;
  document.getElementById(btn+"line0").innerHTML="";
  let input = document.createElement("input");
  input.setAttribute("name", ""+btn+"lineinput0");
  input.setAttribute("id", ""+btn+"lineinput0");
  input.value = lines;
  document.getElementById(btn+"line0").appendChild(input);
  input.hidden = true;
  for (i=1; i <= 4; i++){

    if (i< 2) {
      let lines = document.getElementById(btn+"line"+i).innerHTML;
      document.getElementById(btn+"line"+i).innerHTML="";
      let list = document.createElement("select");
      list.setAttribute("name", ""+btn+"lineinput"+i+"");
      list.setAttribute("id", ""+btn+"lineinput"+i+"");
      document.getElementById(btn+"line"+i).appendChild(list);

      if (i == 1){
      list.innerHTML = list.innerHTML <?php
      foreach($LesDroits as $droit){
       echo "+ '<option value=".$droit['id'].">".$droit['id']."</option>' ";
      } 
      
      ?>
      } 
     document.getElementById(btn+"lineinput"+i).options[document.getElementById(btn+"lineinput"+i).selectedIndex].text = lines;
    } else {
  let lines = document.getElementById(btn+"line"+i).innerHTML;
  document.getElementById(btn+"line"+i).innerHTML="";
  let input = document.createElement("input");
  input.setAttribute("name", ""+btn+"lineinput"+i+"");
  input.setAttribute("id", ""+btn+"lineinput"+i+"");
  input.value = lines;
  document.getElementById(btn+"line"+i).appendChild(input);
 
  
}
  }
  etat = false;
} else if (etat == false){
  document.getElementById(btn+"modif").setAttribute("type", "submit");
  btncolor.style.color = "black"
  etat = true;
}

  
}

    </script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
</body>

</html>