<?php
$host="mysql:host=localhost;dbname=testt;charset=utf8";
$user="root";
$password="";
try {
   $bdd=new PDO($host,$user,$password);
} catch (Exeption $e) {
   die($e);
}
?>
