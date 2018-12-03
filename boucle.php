<?php
 ///////////////////////
 ////EXO1//////////////
 echo("Les boucles EXO1 <br>");
 for ($i = 0; $i <= 10; $i++) {
    echo "$i \n";
    }
    ?><br><br>
<?php
///////////////////////
////EXO2//////////////
echo("EXO2 <br>");
$v2 = 2;
for ($v1= 0; $v1 < 20; $v1++) {
    $resultat = $v1 *$v2;
    echo "$resultat \n";
    }
?><br><br>
<?php    
///////////////////////
////EXO3//////////////
    echo("EXO3 <br>");
    $v2 = 2;
    for ($v1= 100; $v1 >= 10; $v1--) {
        $resultat = $v1 *$v2;
        echo "$resultat<br>";
        }
    
    ?><br><br>
<?php    
///////////////////////
////EXO4//////////////
    echo("EXO4 <br>");
    $v1 = 1;
    while($v1 != 10 ){
        echo($v1.'<br>');
        $v1 = $v1 + 1/2;
    }
    ?><br><br>
<?php
///////////////////////
////EXO5//////////////
    echo("EXO5 <br>");
    $v1 = 1;
    while($v1 < 15 ){
        echo("On y arrive presque".'<br>');
        $v1++;
    }
    ?><br><br>
<?php
///////////////////////
////EXO6//////////////
    echo("EXO6 <br>");
    $v1 = 20;
    while($v1 != 0 ){
        echo("C'est presque bon".'<br>');
        $v1--;
    }
    ?><br><br>
<?php
///////////////////////
////EXO7//////////////
    echo("EXO7 <br>");
    $v1 = 1;
    while($v1 < 100 ){
        echo("On tient le bon bout".'<br>');
        $v1+= 15;
    }
    ?><br><br>
<?php
///////////////////////
////EXO8//////////////
    echo("EXO8 <br>");
    $v1 = 200;
    while($v1 >= 0 ){
        echo("Enfin!!!".'<br>');
        $v1-= 12;
    }
    ?>
