<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
<?php
                    if (isset($_SESSION["userconnected"])and $_SESSION["userconnected"]==true) {
                        echo('<li><a href="inscription.php"><span class="glyphicon glyphicon-user"></span>' 
                        .$_SESSION["username"]. '</a></li>
                        <li class="active"><a href="loginout.php"><span class="glyphicon glyphicon-log-in">
                        </span> Déconnexion</a></li>');
                       
                    }else{
                        echo('<li class="active"><a href="inscription.php"><span class="glyphicon glyphicon-user"></span>
                         Inscriptions</a></li>
                        <li><a href="connexion.php"><span class="glyphicon glyphicon-log-in"></span>
                        Connexion</a></li>');
                    }
                    ?>
<div class="container">
    <h2 class="hadding-title text-center">Connexion</h2>
    <div class="row">
   
   
   <form id="formulaire" action="met.php" method="POST" class="form-inline" >
   
       <div class="form-group">
           <label  for="pseudo">mail:</label>
           <input type="mail" class="form-control" id="pseudo" name="pseudo"  required="">
       </div>
       <div class="form-group">
           <label  for="mdp">mdp:</label>
           <input type="password" class="form-control" id="mdp" name="mdp" required="" >
       </div>
   
       
   
       <button type="submit" class="btn btn-primary btn-md">Se Connecter</button>
   </form>
   </div>
   
    </div> 
</body>
</html>