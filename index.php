<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Début php</title>

</head>
<body>
  <a href="variable.php">Les variables</a>
  <a href="condition.php">Les conditions</a>
  <a href="boucle.php">Les boucles</a>
  <a href="fonction.php">Les fonctions</a>
  <a href="tableaux.php">Les tableaux</a>
  <a href="parametre.php">Les paramétres</a>
  <a href="user.php">Les formulaires</a>
  <a href="var globales.php">Les variables superglobales</a>
  <a href="date.php">Les dates</a>
  <a href="challenge.php">chal</a>
<h3> Exo 5 >>> 8 les formulaires
<?php 
if (isset($_POST["nom"]) AND isset($_POST["prenom"]) AND isset($_POST["civilité"])){
  echo 'Bonjour '.$_POST["civilité"]." ".$_POST["nom"]. " ". $_POST["prenom"];
  }else {
          echo  '<div>';
          echo  '<h2>Ex3 formulaires </h2>';
          echo  '<form action="index.php" method="post">';
          echo  'Nom: <input type="text" name="nom"><br>';
          echo  'Prenom: <input type="text" name="prenom"><br>';
          echo '<select name="civilité" size="1">';
          echo  '<option>Monsieur ';
          echo  '<option>Madame' ;
          echo  '</select>';
          echo  '<input type="submit">';
          echo  '</form>' ;
          echo '<form action="user.php" method="post" enctype="multipart/form-data">
          Selectionnez un pdf à upload : 
              <input type="file" name="fileToUpload" id="fileToUpload">
          </form>';
        }
?>
</div>
</body>
</html>