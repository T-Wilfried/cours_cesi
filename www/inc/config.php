<?php
/* data base connexion */

const _DBHOSTNAME_ = "cours_cesi-mariadb106";
const _DBUSERNAME_ = "docker";
const _DBPASSWORD_ = "docker";
const _DBNAME_ = "docker";
const _DBPORT_ = "3306";

try{
    $bdd = new PDO(
        dsn: "mysql:host="._DBHOSTNAME_.";port="._DBPORT_.";dbname="._DBNAME_.";charset=utf8",
        username: _DBUSERNAME_,
        password: _DBPASSWORD_
    );

}catch (Exception $e){
    die("Error: {$e -> getMessage()}");
}



function premiersMots($phrase, $n) {
    preg_match('/^(\S+\s+){0,' . ($n - 1) . '}\S+/', $phrase, $matches);
    $resultat = $matches[0];
    return $resultat;
}