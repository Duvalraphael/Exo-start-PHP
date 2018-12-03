<?php
 ///////////////////////
 ////EXO1//////////////
 echo("Les conditions EXO1 \n");
 $age = 23;
 if ($age >= 18){
    echo "Vous êtes majeur";
    }else {
        echo "Vous êtes mineur";
    } 
 ?><br><br>
<?php
///////////////////////
////EXO2//////////////
echo("EXO2 \n");
$IsEasy = (bool) true;
if ($IsEasy === true){
    echo "C'est facile!!";
}else{
    echo "C'est difficile !!! ";
};
if ($IsEasy === $IsEasy){
    echo "C'est facile!!";
}else{
    echo "C'est difficile !!! ";
};
?><br><br>
<?php    
///////////////////////
////EXO3//////////////
    echo("EXO3 \n");
    $age = 12;
    $genre = "homme";
    if ($age >= 18  && $genre === "homme"){
        echo "Vous êtes un homme et vous êtes majeur";
    }else if ($age < 18 && $genre === "homme"){
        echo "Vous êtes un homme et vous êtes mineur";
    }else if ($age >= 18 && $genre === "femme"){
        echo "Vous êtes une femme et vous êtes majeur";
    }else if ($age < 18 && $genre === "femme"){
        echo "Vous êtes une femme et vous êtes mineur";
    }
    
    ?><br><br>
<?php    
///////////////////////
////EXO4//////////////
    echo("EXO4 \n");
    $magnitude = 8;
    switch ($magnitude) {
        case 1:
            echo "1  Micro-séisme impossible à ressentir.";
            break;
        case 2:
            echo "2	Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.";
            break;
        case 3:
            echo "3	Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.";
            break;
        case 4:
            echo "4	Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.";
            break;
        case 5:
            echo "5	Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.";
            break;
        case 6:
            echo "6	Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.";
            break;
        case 7:
            echo "7	Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.";
            break;
        case 8:
            echo "8	Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.";
            break;
        case 9:
            echo "9	Séisme capable de tout détruire sur une très vaste zone.";
            break;
    }
    ?><br><br>
<?php
///////////////////////
////EXO5//////////////
    echo("EXO5 \n");
    $maVariable === "Femme";
    if ($maVariable != "Homme"){
        echo 'C\'est une développeuse !!!';
    } else {
        echo 'C\'est un développeur !!!';
    }
    ?><br><br>
<?php
///////////////////////
////EXO6//////////////
    echo("EXO6 \n");
    $monAge = 15;
    if ($monAge >= 18){
        echo  'Tu es majeur';
    } else {
        echo 'Tu n\'es pas majeur';
    }
    ?><br><br>
<?php
///////////////////////
////EXO7//////////////
    echo("EXO7 \n");
    $maVariable = false;
    if ($maVariable == false){
        echo  'c\'est pas bon !!!';
    } else {
        echo 'c\'est ok !!';
    }
    ?><br><br>

<?php
///////////////////////
////EXO8//////////////
    echo("EXO8 \n");
    if ($maVariable){
        echo  'c\'est ok !!';
    } else {
        echo 'c\'est pas bon !!!';
    }
    ?>
