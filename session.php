<?php
// Start the session
session_start();
if (isset($_POST['login']) AND isset($_POST['mdp'])){
    $login= $_POST['login'];
    $mdp= $_POST['mdp'];
    setcookie("login", $user, time() + 365*24*3600, null, null, false, true);
    setcookie("mdp", $mdp, time() + 365*24*3600, null, null, false, true);
    };
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Début php</title>
  <a href="variable.php">Les variables</a>
  <a href="condition.php">Les conditions</a>
  <a href="boucle.php">Les boucles</a>
  <a href="fonction.php">Les fonctions</a>
  <a href="tableaux.php">Les tableaux</a>
  <a href="parametre.php">Les paramétres</a>
  <a href="user.php">Les formulaires</a>
  <a href="var globales.php">Les variables superglobales</a>
  <a href="date.php">Les dates</a>
</head>
<body>
<?php 
// recup variables
///////////////////////
////EXO2//////////////
    echo("EXO2 <br>"); 
        if (isset($_SESSION["Nom"]) AND isset($_SESSION["Prenom"]) AND isset($_SESSION["Age"])){
        echo 'Bonjour '.$_SESSION["Nom"]. " ". $_SESSION["Prenom"]. " agé de ".$_SESSION["Age"]." ans <br>";
    }
?>
<?php
///////////////////////
////EXO3//////////////
    echo("EXO3 <br>");
    echo $_COOKIE["login"]." ".$_COOKIE["mdp"];
?>
    <form method="POST">
        <p>
            <label for="login">Votre login :</label>
            <input type="text" name="login" id="login" value="">
            <br>
            <label for="mdp">Votre mot de passe :</label>
            <input type="password" name="mdp" id="mdp" value="">
            <br>
            <input type="submit" name="send_" value="Cookie">
        </p>
    </form>
</body>
</html>