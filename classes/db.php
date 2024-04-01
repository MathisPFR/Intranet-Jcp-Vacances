<?php 



class Db {

     protected $serverName;
     protected $dbName;
     protected $userName;
     protected $password;
     public $conn;

    public function __construct($serverName, $dbName, $userName, $password) {
        $this->servername = $serverName;
        $this->dbName = $dbName;
        $this->userName = $userName;
        $this->password = $password;
    }

    public function connect() {
        $this->conn = new PDO("mysql:host=".$this->servername.";dbname=".$this->dbName,$this->userName,$this->password);
        // echo "connexion reussi";
    }

    public function deconnected() {
        $this->conn = null;
    }

}



?>