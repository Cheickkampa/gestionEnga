<!-- importer le fichier de style -->
<link rel="stylesheet" href="../css/update_form.css" />
<?php

if (!isset($_GET['id']) || empty($_GET['id'])) {
    echo "utilisateur non selectionne";
    exit();
}

require("php/database.php");
try {
    $con = new PDO($dsn, $mysql_user, $mysql_password);
} catch (PDOException $e) {
    exit("connection impossible");
}

$id = $_GET['id'];
$stmt = $con->query("SELECT * FROM utilisateur WHERE id =$id");


$data = array();
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $data = $row;
} ?>

<form id="upForm" method="post" action="update.php">

    <h1>Modifier un utilisateur</h1>

    <label for=" nom_utilisateur">nom_utilisateur</label>
    <input type="hidden" name="id" value="<?php echo $data['id']?>"/>
    <input type="text" name="nom_utilisateur" value="<?php echo $data['nom_utilisateur'] ?>" disabled />

    <label for=" nom">nom</label>
    <input type="text" name="nom" value="<?php echo $data['nom'] ?>" placeholder="Tapez votre nom" required="required" />

    <label for="prenom">Prenom</label>
    <input type="text" name="prenom" value="<?php echo $data['prenom'] ?>" placeholder="Tapez votre premon " required="required" />

    <label for="mdp">Mot De Passe</label>
    <input type="text" name="mdp" value="<?php echo $data['mdp'] ?>" placeholder="Tapez votre Mot de passe" required="required" />

    <!-- Boton enregistrer  -->
    <button id="but" type="submit">Modifier</button>


</form>