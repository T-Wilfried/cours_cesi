<?php

function have_good_role(array $rolesCompatibles) :bool {
    session_start();
    if(isset($_SESSION["Login"]) && isset($_SESSION["Login"]["Role"])){
        return  in_array(($_SESSION["Login"]["Role"], $rolesCompatibles));
        if(!$result){
            $_SESSION["MSG"] = [
                "Type" => "ERROR",
                "Mesaage" =>
            ]
        }
    }
}
