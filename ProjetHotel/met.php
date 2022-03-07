<?php
session_start();
include("connectbd.php");
$att=$bdd->query("SELECT * FROM utilisateurs");
$trouve=false;

while($utilisateur=$att->fetch()) {
#while pcq on sais pas le nbr d'utilisateur qu'on as dans la bd, fetch elle donne les utilisateur ligne par ligne
#$utilisateurs cette variable c'est un tableau a 2 dimenssion
if (isset($_POST["pseudo"]) and $_POST["pseudo"]==$utilisateur["pseudo"]
and  isset($_POST["mdp"]) and $_POST["mdp"]==$utilisateur["mdp"]){ 
$_SESSION["userconnected"]=true;
$_SESSION["username"]=$utilisateur["pseudo"];
$trouve=true;
	
}

}	
if (!$trouve) {
	$_SESSION["userconnected"]=false;
	header("location: facebook.com");
}
else{
header("location: index.php");
}	
?>