<?php
 ///////////////////////
 ////EXO1//////////////
 echo("Les fonction EXO1 <br>");
 function true() {
    return true;
    }
   true(); 
    ?><br><br>
<?php
///////////////////////
////EXO2//////////////
echo("EXO2 <br>");
function Somestrings($msg) {
     return $msg;
    }
  print Somestrings("Yop les gens"); 
?><br><br>
<?php    
///////////////////////
////EXO3//////////////
    echo("EXO3 <br>");
    function Someone($name,$lastname) {
        return $name . $lastname;
       }
     print Someone("Raphaël","Duval");
    
    ?><br><br>

<?php    
///////////////////////
////EXO4//////////////
    echo("EXO4 <br>");
    function Somenumber($number1,$number2) {
        if ($number1 > $number2){
            return "Le premier nombre est plus grand";
        } else if ($number1 < $number2){
            return "Le premier nombre est plus petit";
        }else {
            return "les deux nombres sont identiques";
        }
       }
     print Somenumber(1,2);   
    ?><br><br>
<?php
///////////////////////
////EXO5//////////////
    echo("EXO5 <br>");
    function function5($number,$caract) {
        return $number . $caract;
       }
     print function5(8,"Raph");
    
    ?><br><br>
<?php
///////////////////////
////EXO6//////////////
    echo("EXO6 <br>");
    function function6($nom,$prenom,$age) {
        return  "Bonjour $nom $prenom ,tu as  $age ans";
       }
     print function6("Duval","Raph",23);
    
    ?><br><br>
<?php
///////////////////////
////EXO7//////////////
    echo("EXO7 <br>");
    function function7($genre,$age) {
        if ($age >= 18  && $genre === "Homme"){
            return "Vous êtes un homme et vous êtes majeur";
        }else if ($age < 18 && $genre === "Homme"){
            return "Vous êtes un homme et vous êtes mineur";
        }else if ($age >= 18 && $genre === "Femme"){
            return "Vous êtes une femme et vous êtes majeur";
        }else if ($age < 18 && $genre === "Femme"){
            return "Vous êtes une femme et vous êtes mineur";
        }
    }
     print function7("Homme",13);
    ?><br><br>
<?php
///////////////////////
////EXO8//////////////
    echo("EXO8 <br>");
    function function8($number1 = 2, $number2 =1, $number3 = 3) {
        echo "<br>";
        return $number1 +$number2 +$number3;
        }
    print  function8();
    print  function8(12,5,3);        
    ?>
