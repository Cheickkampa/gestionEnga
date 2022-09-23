
<?php
if (!isset($_POST['id']) || empty($_POST['id'])) {
    echo 'Erreur de recuperation de lid.';
    exit();
}
if (!isset($_POST['nom']) || empty($_POST['nom'])) {
    echo 'Erreur de recuperation du nom.';
    exit();
}

if (!isset($_POST['prenom']) || empty($_POST['prenom'])) {
    echo 'Erreur de recuperation du prenom.';
    exit();
}
if (!isset($_POST['mdp']) || empty($_POST['mdp'])) {
    echo 'Erreur de recuperation du  mot de passe.';
    exit();
}

require("php/database.php");
try {
    $con = new PDO($dsn, $mysql_user, $mysql_password);
} catch (PDOException $e) {
    exit("connection impossible");
}

$id = $_POST['id'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$mdp = $_POST['mdp'];

// verification dela taille du nom
if (strlen($nom) >= 50) {
    echo 'votre nom est trop long';
    exit();
}


$stmt=$con->query("UPDATE utilisateur SET nom='$nom',prenom='$prenom',mdp='$mdp' WHERE id=$id" );
if(!$stmt){
    exit('Erreur de modification des données.');
}
echo "Enregistrement success!!";
header("refresh:1; url=admin.php");


