<?php 
    function LongestWord($send){ 
        $max_longueur =0;
        $array1 =  explode(" ",$send);
        $nb_mots = count($array1);
        for($i =0; $i <$nb_mots ; $i++){
            $longueur=strlen($array1[$i]);
                if($max_longueur<=$longueur){
                    $max_longueur=$longueur;
                    $le_mot=$array1[$i];
                };

        };
        return $le_mot;
    };
    echo "$le_mot";
    $send = "Yop les gens";
   print LongestWord($send);
?>