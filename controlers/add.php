<?php

include ("../classes/vacance.php");

$idCategory = $_POST['theme'];
$idFormule = $_POST['formule'];
$name = $_POST['nom'];
$startDate = $_POST['date_debut'];
$endDate = $_POST['date_fin'];
$image = "/assets/img/".$_FILES['image']['name'];
$price = $_POST['prix'];
$description = $_POST['commentaire'];
$place = $_POST['region'];

$voyage1 = new Voyage();
$voyage1->addVoyage($idCategory, $idFormule, $name, $startDate, $endDate, $image, $price, $description, $place);

header("location: ../templates/dashboard.php");

?>