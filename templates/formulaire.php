<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/dashboard.css">
</head>

<div class="container-form">
    <div class="title">
        <h1>Ajouter un voyage</h1>
    </div>
        <div class="form">
            <form action="../controlers/add.php" method="post" enctype="multipart/form-data" class="reservation-form">
                <div class="form-group form-group-title">
                    <input type="text" id="nom" name="nom" class="form-control form-title" placeholder="Nom">
                </div>
                        <div class="form-group">
                            <select id="region" name="region" class="form-control" placeholder="Région">
                                <option value="auvergne">auvergne</option>
                                <option value="ile-de-france">Ile de france</option>    
                            </select>
                        </div>
                            <div class="form-group">
                                <select id="theme" name="theme" class="form-control" placeholder="Thème">
                                    <option value="1">Campagne</option>
                                    <option value="2">Mer</option>
                                    <option value="3">Montagne</option>
                                </select>
                            </div>
                            <div class="form-group form-date">
                                <input type="date" id="date_debut" name="date_debut" class="form-control date-form" placeholder="Date de début">
                                <input type="date" id="date_fin" name="date_fin" class="form-control date-form" placeholder="Date de fin">
                            </div>
                            <div class="form-group">
                                <select id="formule" name="formule" class="form-control" placeholder="Formule">
                                    <option value="1">Standard</option>
                                    <option value="2">Premium</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="text" id="prix" name="prix" class="form-control" placeholder="Prix">
                            </div>
                            <div class="form-group">
                                <textarea id="commentaire" name="commentaire" class="form-control textarea" placeholder="Commentaire"></textarea>
                            </div>
                        <!-- <div class="icon-img-container">
                            <img src="../assets/img/Iconeimagenoir.png" alt="" class="icon-img">
                        </div> -->
                        <div class="form-group">
                            <input type="file" id="image" name="image" class="form-control files-inp" placeholder="Image">
                        </div>
                            <button type="submit" class="btn-submit">Envoyer</button>
                </div>
            </form>
        </div>
</div>