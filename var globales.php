<?php
// Start the session
session_start();

if (isset($_POST["login"]) AND isset($_POST["mdp"])){
    $login = $_POST["login"];
    $mdp = $_POST["mdp"];
    setcookie("login", $login, time() + 365*24*3600, null,null,false,true);
    setcookie("mdp", $mdp, time() + 365*24*3600, null,null,false,true);
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
<h3>Les variables super globales</h3>
<?php
 ///////////////////////
 ////EXO1//////////////
    echo ("EXO1 <br>");
    echo "User Agent: ".$_SERVER['HTTP_USER_AGENT'];
    echo "<br>";
    echo "Addresse Ip: ".$_SERVER['SERVER_ADDR'];
    echo "<br>";
    echo "Nom du serveur: ".$_SERVER['SERVER_NAME'];
    echo "<br>";
?><br><br>
<?php
///////////////////////
////EXO2//////////////
    echo("EXO2 <br>");
    // Set session variables
    $_SESSION["Nom"] = "Duval";
    $_SESSION["Prenom"] = "Raphaël";
    $_SESSION["Age"]= 23;
    echo "Session variables are set.";
 
?><br><br>
<a href="session.php">Page reprenant les variables</a>
<?php    
///////////////////////
////EXO3//////////////
    echo("EXO3 <br>");
?><br><br>
<form method="POST" action="var globales.php">
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
<a href="session.php">Page reprenant les cookies</a>
<?php    
///////////////////////
////EXO4//////////////
    echo("<br> EXO4 <br>");
       
?><br><br>
<?php
///////////////////////
////EXO5//////////////
    echo("EXO5 <br>");
    
    ?><br><br>

</body>
</html>