<?php
session_start();
if (isset($_POST['nom_utilisateur']) && isset($_POST['mdp']) && isset($_POST['nom']) && isset($_POST['prenom'])) {
   // connexion à la base de données
   include "../php/database.php";
   //
   //
   try {
      $con = new PDO($dsn, $mysql_user, $mysql_password);
   } catch (PDOException $e) {
      exit("connection impossible");
   }

   // 
   // 
   $username = htmlspecialchars($_POST['nom_utilisateur']);
   $name = htmlspecialchars($_POST['nom']);
   $prenom = htmlspecialchars($_POST['prenom']);
   $password = htmlspecialchars($_POST['mdp']);


   if ($username != "" && $password != "" && $name != "" && $prenom != "") {

      $req = "INSERT INTO utilisateur (nom_utilisateur,nom,prenom,mdp) VALUES ('$username','$name','$prenom','$password')";
      //


      if ($con->exec($req)) // nom d'utilisateur et mot de passe correct
      {
         header('Location:../admin.php?');
      } else {

         header('location: ../ajouter.php?erreur=1');
      }
   } else {
      header('Location: ../ajouter.php?erreur=2'); // utilisateur ou mot de passe vide

   }
} else {
   header('Location: ../ajouter.php');
}
