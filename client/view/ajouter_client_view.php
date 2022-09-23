<?php
session_start();
echo $_POST['n_compte'].' ; '.$_POST['nom'].' ; '.$_POST['prenom'];
if (isset($_POST['n_compte']) && isset($_POST['nom']) && isset($_POST['prenom'])) {
   // connexion à la base de données
   //include "../php/database.php";
   require("../php/database.php");
   //
   //
   try {
      $con = new PDO($dsn, $mysql_user, $mysql_password);
   } catch (PDOException $e) {
      exit("connection impossible");
   }

   // 
   // 
   $username = htmlspecialchars($_POST['n_compte']);
   $name = htmlspecialchars($_POST['nom']);
   $prenom = htmlspecialchars($_POST['prenom']);
   


   if ($username != "" && $name != "" && $prenom != "") {

      $req = "INSERT INTO client (n_compte,nom,prenom) VALUES ('$username','$name','$prenom')";
      //


      if ($con->exec($req)) // nom d'utilisateur et mot de passe correct
      {
         header('Location:../../utilisateur/Secretariat.php?');
      } else {

         header('location: ../ajouter_client.php?erreur=1');
      }
   } else {
      header('Location: ../ajouter_client.php?erreur=2'); // utilisateur ou mot de passe vide

   }
} else {
   header('Location: ../ajouter_client.php');

}
