<?php

include("connectbd.php");
$psudo=$_POST["psudo"];
$messages=$_POST["msg"];

date_default_timezone_set("Africa/Algiers");
$comment_date=date("Y/m/d H:i:s" , time());
try {
    $insert = $bdd->prepare("INSERT INTO vosavis (psudo,messages,comment_date) VALUES(?,?,?)");
    $insert->execute(array($psudo,$messages,$comment_date));
    header("location: vosAvis.php");
} catch (Exception $e) {
   header("location: vosAvis.php");
}
?>
