<?php


if (!isset($_GET['id']) || empty($_GET['id'])) {
    echo "Erreur de recuperation de l'id";
    exit();
}

require("php/database.php");
//
try {
    $con = new PDO($dsn, $mysql_user, $mysql_password);
} catch (PDOException $e) {
    exit("connection impossible");
}

$id_user = $_GET['id'];

$req = $con->prepare('DELETE FROM client WHERE id = :id');
$resp = $req->execute(array('id' => $id_user));

if (!$resp) {
    echo " Erreur lors de la suppression";
    exit();
}
echo "Suppression réussi !";


header("refresh:1; url= ../utilisateur/secretariat.php");
