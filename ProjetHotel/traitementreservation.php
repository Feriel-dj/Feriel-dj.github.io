<?php
session_start();
include("connectbd.php");
$nom=$_POST["nom"];
$prenom=$_POST["prenom"];
$email=$_POST["email"];
$tel=$_POST["tel"];
$nb_pers=$_POST["nbr"];
$jour=$_POST["date"];
$type_ch=$_POST["type"];
try {
    $insert=$bdd->prepare("INSERT INTO reservations (nom,prenom,email,tel,nb_pers,jour,type_ch)
    VALUES (?,?,?,?,?,?,?)");
    $insert->execute(array($nom,$prenom,$email,$tel,$nb_pers,$jour,$type_ch));
    $_SESSION["newreservation"]=true;
    header("location: reservations.php");
    
} catch (Exception $e) {
    $_SESSION["newreservation"]=false; 
    header("location: reservations.php");
}



?>