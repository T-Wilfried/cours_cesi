<?php

$cost = 10;
$hash = password_hash("azerty", PASSWORD_BCRYPT, ["cost" => $cost]);

var_dump($hash);

if(password_verify("azerty", $hash)){
    echo "Mot de passe decrypter";
}
else{echo "Mot de passe pouet";}
