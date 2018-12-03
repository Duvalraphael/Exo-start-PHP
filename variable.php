<?php
 ///////////////////////
////EXO1//////////////
    echo("Les variables  EXO1 \n");
    $nom = "Duval";
    $prenom = "Raphaël";
    $age = 23;

    echo(" Bonjour $prenom, de la famille $nom qui a atteint le level $age \n\n !") ;
    ?><br><br>
<?php
///////////////////////
////EXO2//////////////
    echo("EXO2 \n");
    $km = 1;
    echo($km);
    $km = 3;
    echo($km);
    $km = 125;
    echo("$km \n \n");
    echo "\n";
    ?><br><br>
<?php    
///////////////////////
////EXO3//////////////
    echo("EXO3 \n");
    $string = (string) "Raph";
    $int = (int) 8;
    $float = (float) 16.8;
    $boolean = (bool) true;

    echo(" Voici ma valeur string $string, mon integer $int, mon float $float et enfin mon boolean $boolean ! \n\n");
    ?><br><br>
<?php    
///////////////////////
////EXO4//////////////
    echo("EXO4 \n");
    $int1 = (integer)$int1;
    echo("initaliser à rien  valeur = $int1 \n");
    $int1 = 8;
    echo("initaliser à 8 valeur = $int1 \n\n");
    ?><br><br>
<?php
///////////////////////
////EXO5//////////////
    echo("EXO5 \n");
    $number1 = 3+4;
    $number2 = 5*20;
    $number3 = 45/5;

    echo(" calcul 1 3+4 : $number1 \n calcul 2  5*20 : $number2 \n calcul 3  45/5 : $number3 \n \n\n");
    ?><br><br>
<?php
///////////////////////
////EXO6//////////////
    echo("EXO6 \n");
    $tshirt = 785;
    $ristourne = ($tshirt /100)*30 ;
    $prix = $tshirt-$ristourne;

    echo("Le t-shirt coute de base : $tshirt €, mais une ristourne de 30% ($ristourne) est appliquée donc votre tshirt vous coûte maintenant seulement : $prix € \n Quel affaire !");

    ?>