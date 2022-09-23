<?php
session_start();
if (isset($_POST['nom_utilisateur']) && isset($_POST['mdp'])) {
   // connexion à la base de données
   include ("../php/database.php");
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
   $password = htmlspecialchars($_POST['mdp']);


   if ($username != "" && $password != "") {
      $usn = "";
      $req = "SELECT * FROM utilisateur WHERE nom_utilisateur = '$username' AND mdp = '$password'";
      //
      
      foreach ($con->query($req) as $data) {
         $usn = $data["nom_utilisateur"];
         $type = $data["type"];
         $_SESSION['nom_utilisateur'] = $username;
         if ($type == 'ADMIN'){
            header('Location: ../admin.php'); 
            exit();
          
         } 

         if ($type == 'USER'){
            header('Location: ../secretariat.php');
            exit();
         }

         header('Location: ./index.php?erreur=3');
         exit();

      }
      if ($usn != 0) // nom d'utilisateur et mot de passe correctes
      {
         header('Location: ./index.php?erreur=1'); // utilisateur ou mot de passe incorrect

      }
   } else {
      header('Location: ./index.php?erreur=2'); // utilisateur ou mot de passe vide

   }
} else {
   header('Location: ./index.php');
}
