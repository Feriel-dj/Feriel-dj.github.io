<?php
session_start();
include("connectbd.php");
$pseudo=$_POST["pseudo"];
$mdp=$_POST["mdp"];
try {
    $insert=$bdd->prepare("INSERT INTO utilisateurs (pseudo, mdp) VALUES(?,?)");
    $insert->execute(array($pseudo,$mdp));
    $_SESSION["newinscription"]=true;
    header("location: connexion.php");
} catch (Exception $e) {
    $_SESSION["newinscription"]=true;
    header("location: inscription.php");
    
}

