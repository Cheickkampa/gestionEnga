<html>

<head>
    <meta charset="utf-8">
    <!-- importer le fichier de style -->
    <link rel="stylesheet" href="css/index.css" />


</head>

<body>
    <div class="login">
        <!-- zone de connexion -->
        <form action="utilisateur/view/index_view.php" method="POST">
            <h1>Connexion</h1>

            <label><b>Nom d'utilisateur</b></label>
            <input type="text" placeholder="Entrer le nom d'utilisateur" name="nom_utilisateur">
            <br>
            <label><b>Mot de passe</b></label>
            <input type="password" placeholder="Entrer le mot de passe" name="mdp">
           
            <button id="but" type="submit">CONNEXION</button>
                
            
            <?php
            if (isset($_GET['erreur'])) {
                $err = $_GET['erreur'];
                if ($err == 1 || $err == 2)
                    echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                if ($err == 3)
                    echo "<p style='color:red'>Compte introuvable</p>";
            }
            ?>
        </form>


    </div>
</body>

</html>