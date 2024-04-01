
<?php  

include ("../classes/vacance.php");


$editBtn = isset($_POST["edit-btn"]);
$idEdit = $_GET['id-edit'];

if ($editBtn) {
    $idCategory = $_POST['theme'];
    $idFormule = $_POST['formule'];
    $name = $_POST['nom'];
    $startDate = $_POST['date_debut'];
    $endDate = $_POST['date_fin'];
    $image = "/assets/img/".$_FILES['image']['name'];
    $price = $_POST['prix'];
    $description = $_POST['commentaire'];
    $place = $_POST['region'];
    
    
    
    $editVoyage = new Voyage();
    
    $editVoyage->edit($idEdit, $idFormule, $idCategory, $name, $startDate, $endDate, $image, $price, $description, $place);
    
    header("location: ../templates/dashboard.php");

}


?>





