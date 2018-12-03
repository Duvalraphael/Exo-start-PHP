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
<div>
<h2>Ex1 formulaires </h2>
<form action="user.php" method="get">
Nom: <input type="text" name="nom"><br>
Prenom: <input type="text" name="prenom"><br>
<input type="submit">
</form>
</div>
<?php    
///////////////////////
////EXO3//////////////
    echo("EXO3 <br>");
    if (isset($_GET["nom"]) AND isset($_GET["prenom"])){
        echo 'Bonjour '.$_GET["nom"]. " ". $_GET["prenom"];
    }
?><br><br>
<div>
<h2>Ex2 formulaires </h2>
<form action="user.php" method="post">
Nom: <input type="text" name="nom"><br>
Prenom: <input type="text" name="prenom"><br>
<input type="submit">
</form>
</div>
<?php    
///////////////////////
////EXO4//////////////
    echo("EXO4 <br>");
    if (isset($_POST["nom"]) AND isset($_POST["prenom"])){
    echo 'Bonjour '.$_POST["nom"]. " ". $_POST["prenom"];
    }
    ?><br><br>

</div>
</body>
</html>