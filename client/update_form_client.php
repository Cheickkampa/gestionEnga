<!-- importer le fichier de style -->
<link rel="stylesheet" href="../css/update_form.css" />
<?php

if (!isset($_GET['id']) || empty($_GET['id'])) {
    echo "client non selectionne";
    exit();
}

require("php/database.php");
try {
    $con = new PDO($dsn, $mysql_user, $mysql_password);
} catch (PDOException $e) {
    exit("connection impossible");
}

$id = $_GET['id'];
$stmt = $con->query("SELECT * FROM client WHERE id =$id");


$data = array();
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $data = $row;
} ?>

<form id="upForm" method="post" action="update_client.php">

    <h1>Modifier un client</h1>

    <label for="N° compte">N° Compte</label>
    <input type="hidden" name="id" value="<?php echo $data['id']?>"/>
    <input type="text" name="N° compte" value="<?php echo $data['N° compte'] ?>"/>

    <label for=" nom">nom</label>
    <input type="text" name="nom" value="<?php echo $data['nom'] ?>" placeholder="Tapez votre nom" required="required" />

    <label for="prenom">Prenom</label>
    <input type="text" name="prenom" value="<?php echo $data['prenom'] ?>" placeholder="Tapez votre premon " required="required" />
    <!-- Boton enregistrer  -->
    <button id="but" type="submit">Modifier</button>


</form>