<!DOCTYPE html>
<html lang="fr">
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
<?php
 ///////////////////////
 ////EXO1//////////////
    echo("<br> Les dates EXO1 <br>");
    echo "La date de ce jour  " . date("Y/m/d") . "<br>";
    ?><br><br>
<?php
///////////////////////
////EXO2//////////////
    echo("EXO2 <br>");
    echo "La date de ce jour " . date("Y-m-d") . "<br>";
?><br><br>
<?php    
///////////////////////
////EXO3//////////////
    echo("EXO3 <br>");
    date_default_timezone_set('Europe/Paris');
    setlocale(LC_TIME, 'fr_FR.utf8','fra');

    echo "Date du jour :  ",strftime("%A %d %B %Y");
?><br><br>
<?php    
///////////////////////
////EXO4//////////////
    echo("EXO4 <br>");  
    $date=date_create("2016-08-02 15:00",timezone_open("Europe/Brussels"));
    echo "Voici la timestamp du mardi 02 août 2016 à 15h00 :".$date->getTimestamp();
?><br><br>
<?php
///////////////////////
////EXO5//////////////
    echo("EXO5 <br>");
    $d1=strtotime("May 16 2016");
$d2=ceil(($d1-time())/60/60/24);
echo "Il y a " . $d2 ." Jour avant le 16 mai 2016 ";
?><br><br>
<?php
///////////////////////
////EXO6//////////////
    echo("EXO6 <br>");
    $mois = "February";
    $année = 2017;
    $nb_jour = date('t',mktime(0, 0, 0, $mois, 1, $année)); 
    echo "Il y a ".$nb_jour." jour dans le mois de février 2017";

?><br><br>
<?php
///////////////////////
////EXO7//////////////
    echo("EXO7 <br>");
    $d=strtotime("+20 Days");
    echo "Dans 20 jours : ".date("Y-m-d h:i:sa", $d) . "<br>";
?><br><br>
<?php
///////////////////////
////EXO8//////////////
    echo("EXO8 <br>");  
    $d=strtotime("-22 Days");
    echo "Dans -22 jours : ".date("Y-m-d h:i:sa", $d) . "<br>";
?><br><br>
    <h3>TP les dates</h3>  
<?php 
    echo "En cours de progression."
    ?>
</body>
</html>
