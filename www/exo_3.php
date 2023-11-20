<?php

$bool = false;
$age = 15;
$ville = "Paris";

if($bool){
    echo "La condition bool est a true";
}
elseif ($age >= 18 AND ($ville == "Paris")){
    echo " Vie a Paris et est majeur";
}


function parler($prenom, $boisson){
    //$prenom = "Bruno";
    $phrase = "My name is $prenom, how are you? tu bois toujour de $boisson";

    return $phrase;
}


function convert(float $temp, $type_1 = "Farehenheit", $type_2 = "Celcius"){
    if($type_1 = ){
        $conv = ($temp - 32)/1.8;
        return $conv;
    }
    else{
        $conv = ($temp + 32)*1.8;
        return  $conv;
    }
}

echo convert(50);