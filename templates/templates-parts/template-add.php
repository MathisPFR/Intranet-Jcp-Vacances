

    <div class="container-list">
        <div class="img-list">
        <!-- <img src="../assets/img/MontSaintMichelNormandie.jpg" alt="" class="img-style-list"> -->
        
        </div>
        <div class="name-list">
            <?php echo $showVoyages['name']; ?>
        </div>
        <div class="lieu-list">
            <?php echo $showVoyages['place']; ?>
        </div>
        <div class="date-list">
            <?php echo $showVoyages['start_date']. " ". " "." "; 
                echo $showVoyages['end_date'];
            ?>
        </div>
        <!-- <div class="description-list"> -->
        <?php
        //  echo $showVoyages['description'];
         ?>
        <!-- </div> -->
        <div class="price">
        <?php echo $showVoyages['price']. " Euro"; ?>
        </div>
        <div class="all-btn-list">
            <div class=btn-container>
                <!-- <a href="edit.php" class="btn-edit-del">Edit</a> -->
                <?php echo '<a href="../templates/formulaire-edit.php?id-edit='.$showVoyages['id_journey'].'" class="btn-edit-del"><i class="fa-solid fa-pen-to-square"></i></a>'; ?>
            </div>
            <div class="btn-container">
                <?php echo '<a href="../controlers/delete.php?id='.$showVoyages['id_journey'].'" class="btn-edit-del"><i class="fa-solid fa-trash"></i></a>'; ?>
                
            </div>
        </div>
    </div>
   