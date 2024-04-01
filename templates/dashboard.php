<?php

session_start();

if (!isset($_SESSION['username'])) {
   header("Location: ../index.php");
}

$user = $_SESSION['username'];
// $mail = $_SESSION['']

//  echo "<br>Bonjour $user, vous êtes connectés";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard</title>
    <link rel="stylesheet" href="../assets/css/dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <main>
        <div class="container-dash">

            <div class="left-side">
                <div class="top">
                    <img src="../assets/img/LogoJCPVacances.png" alt="" class="img">
                    <div class="user-container">
                        <!-- <div class="img-user-container"> -->
                            <img src="../assets/img/Imageutilisateurcercle.png" alt="" class="img icon-user-img">
                        <!-- </div> -->
                        <div class="user-title">
                            <p class="user-name"><?php  echo $user ?></p>
                        </div>
                    </div>
                    <div class="nav">
                        <div class="journey list">
                            <i class="fa-solid fa-chart-simple"></i>
                            <a href="dashboard.php">DashBoard - Voyages</a>
                        </div>
                        <div class="journey add">
                            <i class="fa-solid fa-circle-plus"></i>
                            <a href="formulaire.php">Ajouter un voyage</a>
                        </div>
                    </div>
                </div>    
                
                <div class="Btn">
  
                    <div class="sign"><svg viewBox="0 0 512 512"><path d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z"></path></svg></div>
                    
                    <div class="text"><a href='logout.php'>Déconnexion</a></div>
                    </div>

                    <!-- <a href='logout.php'><span>Déconnexion</span></a> -->
            </div>

            <div class="right-side">
                <div class="title">
                    <h1>DashBoard - Voyages</h1>
                </div>
                <div class="liste-voyage">
                    <div class="all-container-list">
                        <div class="list-info"> 
                            <div class="title-info">Titre</div>
                            <div class="place-info">Lieu</div>
                            <div class="date-info">Date</div>
                            <!-- <div class="desc-info">Description</div> -->
                            <div class="price-info">Price</div>
                            <div class="edit-info">Modifier</div>
                        </div>
               <?php
                include ("../classes/vacance.php");
                $showVoyage = new Voyage();
                
                foreach ($showVoyage->allVoyage() as $showVoyages) {
                   
                    include ('../templates/templates-parts/template-add.php');
                }
                ?>
                </div>
                    </div>
                    <div class="btn-add-cont">
                        <a href="formulaire.php" class="add-btn-bot">Nouveau</a>
                    </div>
            </div>
        </div>
    </main>
</body>
</html>


 
 <!-- tester si l'utilisateur est connecté -->
 <?php

//  session_start();

//  if (empty($_SESSION['username'])) {
//     header("Location: index.php");
//  }

//  if(isset($_GET['deconnexion']))
//  { 
//  if($_GET['deconnexion']==true)
//  { 
//  session_destroy();
//  header("Location: index.php");
//  }
//  }
//  else if($_SESSION['username'] !== ""){
//  $user = $_SESSION['username'];
//  // afficher un message
//  echo "<br>Bonjour $user, vous êtes connectés";
//  }
 ?>

