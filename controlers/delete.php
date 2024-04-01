<?php 

include ("../classes/vacance.php");

if (isset($_GET['id']) && $_GET['id'] != '') {
    $voyage1 = new Voyage();
$voyage1->delete($_GET['id']);

header('Location: ../templates/dashboard.php');
}



?>