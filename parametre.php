<?php
 ///////////////////////
 ////EXO1//////////////
    echo("Les parametres EXO1 <br>");  
    echo $_GET["nom"]. " ". $_GET["prenom"];
    ?><br><br>
<?php
///////////////////////
////EXO2//////////////
    echo("EXO2 <br>");
    if (isset($_GET['age'])){
	    echo "Vous avez".$_GET["age"];
    }else {
	    echo "Indiquer votre Age!!!";
    }
?><br><br>
<?php    
///////////////////////
////EXO3//////////////
    echo("EXO3 <br>");
    echo " Date de debut: ".$_GET["dateDebut"]. " et date de fin: ". $_GET["dateFin"];
?><br><br>
<?php    
///////////////////////
////EXO4//////////////
    echo("EXO4 <br>");
    echo " langage: ".$_GET["langage"]. " serveur: ". $_GET["serveur"];
    ?><br><br>
<?php    
///////////////////////
////EXO5//////////////
    echo("EXO5 <br>");
    echo "semaine: ".$_GET["semaine"];
?><br><br>
<?php    
///////////////////////
////EXO6//////////////
    echo("EXO6 <br>");
    echo "batiment: ".$_GET["batiment"]. " salle: ".$_GET["salle"];
?><br><br>