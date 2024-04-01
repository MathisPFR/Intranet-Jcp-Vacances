<?php 

include ("../controlers/edit.php");


// include ("controlers/edit.php");

$Voyage1Id = new Voyage();
// echo "bonjhsdjhkpopoprvrvrggvopo";
$voyage2Id = $Voyage1Id->voyageById($_GET["id-edit"]);
// print_r($voyage2Id);
// echo $voyage2Id['place'];

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/dashboard.css">
</head>



<div class="container-form">
    <div class="title">
        <h1>Modifier un voyage</h1>
    </div>
        <div class="form">
            <form action="" method="post" enctype="multipart/form-data" class="reservation-form">
                <div class="form-group form-group-title">
                    <input type="text" id="nom" name="nom" class="form-control form-title" placeholder="Nom" value="<?php echo $voyage2Id['name'] ?>">
                </div>
                <div class="grid-form">
                        <div class="form-group">
                            <select id="region" name="region" class="form-control" placeholder="Région">
                                <option <?php if($voyage2Id['place'] == 'auvergne') {echo 'selected';} ?> value="auvergne">auvergne</option>                               
                                <option <?php if($voyage2Id['place'] == 'ile-de-france') {echo 'selected';} ?> value="ile-de-france">Ile de france</option>    
                            </select>
                        </div>
                            <div class="form-group">
                                <select id="theme" name="theme" class="form-control" placeholder="Thème">
                                    <option <?php if($voyage2Id['id_category'] == 1) {echo 'selected';} ?> value="1">Campagne</option>
                                    <option <?php if($voyage2Id['id_category'] == 2) {echo 'selected';} ?> value="2">Mer</option>
                                    <option <?php if($voyage2Id['id_category'] == 3) {echo 'selected';} ?> value="3">Montagne</option>
                                </select>
                            </div>
                            <div class="form-group form-date">
                                <input type="date" id="date_debut" name="date_debut" class="form-control date-form" placeholder="Date de début" value="<?php echo $voyage2Id['start_date'] ?>">
                                <input type="date" id="date_fin" name="date_fin" class="form-control date-form" placeholder="Date de fin" value="<?php echo $voyage2Id['end_date'] ?>">
                            </div>
                            <div class="form-group">
                                <select id="formule" name="formule" class="form-control" placeholder="Formule">
                                    <option <?php if($voyage2Id['id_formule'] == 1) {echo 'selected';} ?> value="1">Standard</option>
                                    <option <?php if($voyage2Id['id_formule'] == 2) {echo 'selected';} ?> value="2">Premium</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="text" id="prix" name="prix" class="form-control" placeholder="Prix" value="<?php echo $voyage2Id['price'] ?>">
                            </div>
                            <div class="form-group">
                                <textarea id="commentaire" name="commentaire" class="form-control" placeholder="Commentaire" value="<?php echo $voyage2Id['description'] ?>"></textarea>
                            </div>
                
                        <div class="form-group">
                            <input type="file" id="image" name="image" class="form-control" placeholder="Image">
                        </div>
                            <button type="submit" class="btn-submit" name="edit-btn">Envoyer</button>
                    

                </div>
            </form>
        </div>
</div>