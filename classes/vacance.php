<?php

// $servername = 'localhost';
// $username = 'root';
// $password = 'root';

// $conn = new PDO("mysql:host=$servername;dbname=jcp_vacances", $username, $password);

include('db.php');

Class Voyage {

    protected $idVoyage;
    protected $idCategory;
    protected $idFormule;
    protected $name;
    protected $startDate;
    protected $endDate;
    protected $image;
    protected $price;
    protected $description;
    protected $place;
    public $proInstance;



    public function __construct() {
        $this->proInstance = new Db('localhost', 'jcp_vacances', 'root', 'root');
        $this->proInstance->connect();
    }

    public function addVoyage($idFormule, $idCategory, $name, $startDate, $endDate, $image, $price, $description, $place) {


        $insertQuery = "INSERT INTO Voyage(id_category, id_formule, name, start_date, end_date, image, price, description, place) VALUES (:id_category, :id_formule, :name, :start_date, :end_date, :image, :price, :description, :place)";

        $stmt = $this->proInstance->conn->prepare($insertQuery);
        $stmt->bindParam(':id_category', $idCategory);
        $stmt->bindParam(':id_formule', $idFormule);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':start_date', $startDate);
        $stmt->bindParam(':end_date', $endDate);
        $stmt->bindParam(':image', $image);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':place', $place);

        $stmt->execute();
    }

    public function delete($idVoyage){
        
        $delete = "DELETE FROM `Voyage` WHERE id_journey = $idVoyage";
        $stmtD = $this->proInstance->conn->prepare($delete);
        $stmtD->bindParam(':id_journey', $idVoyage);
        $stmtD->execute();
    }

    public function edit($idVoyage, $idFormule, $idCategory, $name, $startDate, $endDate, $image, $price, $description, $place) {

        // $edit = "UPDATE Voyage SET id_category = :id_category, id_formule = :id_formule, name = :name, start_date = :start_date, end_date = :end_date, image = :image,price = :price, description = :description WHERE id_journey = $idVoyage";


        $edit = "UPDATE Voyage SET id_category = :id_category, id_formule = :id_formule, name = :name, start_date = :start_date, end_date = :end_date, image = :image,price = :price, description = :description, place = :place WHERE id_journey = :id_journey";

        $stmtE = $this->proInstance->conn->prepare($edit);
        $stmtE->bindParam(':id_category', $idCategory);
        $stmtE->bindParam(':id_formule', $idFormule);
        $stmtE->bindParam(':name', $name);
        $stmtE->bindParam(':start_date', $startDate);
        $stmtE->bindParam(':end_date', $endDate);
        $stmtE->bindParam(':image', $image);
        $stmtE->bindParam(':price', $price);
        $stmtE->bindParam(':description', $description);
        $stmtE->bindParam(':place', $place);
        $stmtE->bindParam(':id_journey', $idVoyage);

        $stmtE->execute();
    }

    public function allVoyage() {
        $allVoyage = "SELECT * FROM `Voyage`";
        $allStmt = $this->proInstance->conn->prepare($allVoyage);
        $allStmt->execute();
        $showAll = $allStmt ->fetchAll();

        return $showAll;
    }

    public function voyageById($idVoyage) {

        $voyageById = "SELECT * FROM `Voyage` WHERE id_journey = $idVoyage";
        
       
        $stmtu = $this->proInstance->conn->prepare($voyageById);
        $stmtu->bindParam(':id_journey', $idVoyage);
        $stmtu->execute();
        $resultId = $stmtu->fetch();

        return $resultId;


    }
}




// $voyage1 = new Voyage();
// $voyage1->delete(56);
// $voyage1->addVoyage(2, 3, 'camarche', '2023-03-20', '2023-04-20', 'kjkjkj', 5, 'hhjh');
// $voyage1->edit(40, 2, 5, 'change', '2023-04-20', '2023-05-20', 'changee', 8, 'changee');


















?>