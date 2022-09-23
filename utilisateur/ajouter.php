<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Formulaire</title>
    <link rel="stylesheet" href="../css/ajouter.css" type="text/css">
</head>

<body>
    <form id="ajtForm" method="POST" action="view/ajouter_view.php">
        <h1>Ajouter un utilisateur</h1>
        <label for="nom_utilisateur">Nom utilisateur</label>
        <input type="text" name="nom_utilisateur" placeholder="Tapez votre nom " required="required" />
        <br>
        <label for="email">Nom</label>
        <input type="text" name="nom" value="" placeholder="Tapez votre nom" required="required" />
        <br>
        <label for="prenom">Prenom</label>
        <input type="text" name="prenom" placeholder="Tapez votre premon " required="required" />
        <br>
        <label for="mdp">Mot De Passe</label>
        <input type="password" name="mdp" placeholder="Tapez votre Mot de passe" required="required" />
        <br>
        <!-- Boton enregistrer  -->
        <button id="but" type="submit">Inscrire un utilisateur</button>
    </form>
</body>

</html>