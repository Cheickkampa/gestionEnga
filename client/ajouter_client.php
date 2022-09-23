<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Formulaire</title>
    <link rel="stylesheet" href="../css/ajouter.css" type="text/css">
</head>

<body>
    <form id="ajtForm" method="POST" action="view/ajouter_client_view.php">
        <h1>Ajouter un client</h1>
        <label for="N° compte">N° Compte</label>
        <input type="text" name="n_compte" placeholder="Tapez votre nom " required="required" />
        <br>
        <label for="email">Nom</label>
        <input type="text" name="nom" value="" placeholder="Tapez votre nom" required="required" />
        <br>
        <label for="prenom">Prenom</label>
        <input type="text" name="prenom" placeholder="Tapez votre premon " required="required" />
        <br>
        <!-- Boton enregistrer  -->
        <button id="but" type="submit">Inscrire un client</button>
    </form>
</body>

</html>