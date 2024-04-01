<?php


session_start();

include ('../classes/db.php');


$logConn = new Db('localhost', 'jcp_vacances', 'root', 'root');
$logConn->connect();

$username = $_POST["username"];
$password = $_POST["password"];

$_SESSION["username"] = $username;

if ($username != "" && $password != "") {
        $logReq = $logConn->conn->query("SELECT * FROM `user` WHERE username = '$username' AND password = '$password'");
        $logRep = $logReq->fetch();

        if ($logRep["id_user"] != false) {

            $_SESSION['username'] = $username;

            header("Location: ../templates/dashboard.php");
            exit();
        }

        else {

            $erreur = "mot de passe ou username incorrect";
            header("Location: ../index.php?erreur=".urlencode($erreur));
            exit();
        }
}

else {
            $erreurVide = "Veuilez remplir tous les champs";
            header("Location: ../index.php?erreur-vide=".urlencode($erreurVide));
            exit();
            
}

?>