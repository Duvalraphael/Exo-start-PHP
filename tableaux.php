<?php
 ///////////////////////
 ////EXO1//////////////
    echo("Les tableaux EXO1 <br>");
    $mois = array(
        "janvier",
        "février",
        "mars",
        "avril",
        "mai",
        "juin",
        "juillet",
        "aout",
        "septembre",
        "octobre",
        "novembre",
        "décembre");
       echo $mois[7];   
    ?><br><br>
<?php
///////////////////////
////EXO2//////////////
    echo("EXO2 <br>");
       echo $mois[2]."<br>";
       echo $mois[5]."<br>";  
       $mois[7]= "août";
       echo $mois [7]."<br>";
?><br><br>
<?php    
///////////////////////
////EXO3//////////////
    echo("EXO3 <br>");
    $France = array(
        01=>"Ain",
        03=>"Allier",
        07=>"Ardèche",
        15=>"Cantal",
        26=>"Drôme",
        38=>"Isère",
        42=>"Loire",
        43=>"Haute-Loire",
        63=>"Puy-de-Dôme",
        69=>"Rhône",
        73=>"Savoie",
        74=>"Haute-Savoie");
        echo $France[69]."<br>";
        $France[57]= Metz;
        echo $France[57]."<br>";
        foreach ($France as $cle => $dep) {
            echo "Le département $dep  a le numéro  $cle"."<br>";
        }
    ?><br><br>
<?php    
///////////////////////
////EXO4//////////////
    echo("EXO4 <br>");
        $Invit = array(
            "Alex",
            "Max",
            "Dominique",
            "Claude",
            "Leslie",
            "Charlie",
            "Lou");
            foreach ($Invit as $prenom) {
                echo "Salut $prenom, devine quoi ! Je me marie dans samedi dans deux semaines ! J'espère te compter parmi les invités ! Gros bisous :)"."<br>";
            }
               
    ?><br><br>