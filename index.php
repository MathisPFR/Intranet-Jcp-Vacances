<?php

$erreur = isset($_GET['erreur']) ? $_GET['erreur'] : "";
$erreurVide = isset($_GET['erreur-vide']) ? $_GET['erreur-vide'] : "";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JCP Vacances</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">  
</head>
<body>
    <main>
        <div class="left">
            <img src="./assets/img/PhotosDefinit.jpg" alt="" class="img-left">
        </div>
        <div class="right">
            <div class="img-right">
                <img src="./assets/img/LogoJCPVacances.png" alt="">
            </div>
            <div class="container-form">
                <form action="templates/login.php" method="post">

                        <!-- <label for="username">Username:</label> -->
                    <div class="group">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="icon user-icon"  stroke-width="1.5" viewBox="0 0 24 24"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M304 128a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM49.3 464H398.7c-8.9-63.3-63.3-112-129-112H178.3c-65.7 0-120.1 48.7-129 112zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3z" stroke-linejoin="round" stroke-linecap="round"/></svg>
                        <input type="text" id="username" name="username" class="input"  placeholder="username">
                    </div>

                    <div class="group">
                        <svg stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="icon">
                        <path d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" stroke-linejoin="round" stroke-linecap="round"></path>
                        </svg>
                        <input class="input" type="password" placeholder="password" name="password" id="pass">
                    </div>
                    <div class="group">
                        
                        <input type="submit" value="Se connecter" class="submit-btn" style="font-family: poppins;">
                    </div>
                    <div class="group">
                        <?php if (!empty($erreur)) : ?>
                        <p class="error-message" style="font-family: poppins; color: red;"><?php echo $erreur; ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="group">
                        <?php if (!empty($erreurVide)) : ?>
                        <p class="error-message" style="font-family: poppins; color: red;"><?php echo $erreurVide; ?></p>
                        <?php endif; ?>
                    </div>
                </form>
            </div>
        </div>
        
    </main>
</body>
</html>


<?php

include('classes/vacance.php');

include('classes/db.php');


?>