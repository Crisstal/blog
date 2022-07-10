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

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
<form action="index.php?uc=connexion&action=ValidInscription" method ="post">
   
     

    
            <!-- Sidebar End -->

            <div class="col-sm-12 col-xl-12">
                
                            <div class="bg-light rounded h-100 p-4">
                                <h1>Formulaire d'inscription</h1>
                                <div class="form-floating mb-3">
                                    <input  name = "Login" class="form-control" id="floatingInput"
                                        placeholder="name@example.com">
                                    <label for="floatingInput">Nom d'utilisateur</label>
                                </div>
                                <!-- <div class="form-floating mb-3">
                                    <select class="form-select" name="Praticien" id="floatingSelect">
                                     
                                        foreach($LesPraticiens as $med){
                                       echo '<option value ="'.$med["PRA_NUM"].'">'.$med["PRA_NOM"]." - ".$med["PRA_PRENOM"].'</option>'; 
                                       
                                        }
                                      
                                    </select>
                                </div> -->
                                    <div class="form-floating mb-3">
                                    <input name ="Email" class="form-control" name ="Composition" id="floatingPassword"
                                    placeholder="Password">
                                    <label for="floatingPassword">Email</label>
                                </div>
                                <div class="form-floating mb-3">
                                <input name = "Password1" type ="password" name ="coef" class="form-control" name ="Composition" id="floatingPassword"
                                        placeholder="Password">
                                    <label for="floatingPassword">Mot de passe</label>
                                </div>
                                <div class="form-floating mb-3">
                                <input name = "Password2" type ="password" name ="coef" class="form-control" name ="Composition" id="floatingPassword"
                                        placeholder="Password">
                                    <label for="floatingPassword">Confirmer mot de passe</label>
                                </div>
                     
                                
                                <table id ="container-prod">
                                </table>
                                <button type ="submit" class ="btn btn-primary rounded-pill m-2">Valider</button>
                                 <button type ="button" class ="btn btn-secondary rounded-pill m-2">Annuler</button>
                            </div>
                        </div>
                                </form>
            <div>
                                            </form>
<script>
  
  
  
    
  
  </script>
         
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
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
    
</body>

</html>