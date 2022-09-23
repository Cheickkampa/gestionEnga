<?php


 session_start();
 $_SESSION = array();
 session_destroy();
 header('Location:../index.php');

//  if(!isset($_SESSION["login"]) || $_SESSION["mdp"] !== true)
// {
// // unset($_SESSION['loggin']);
// // unset($_SESSION['mdp']);
 
//  header('Location:connexion.php');}
//  exit();

 ?>