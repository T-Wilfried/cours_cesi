<?php

function premiersMots($phrase, $n) {
    preg_match('/^(\S+\s+){0,' . ($n - 1) . '}\S+/', $phrase, $matches);
    $resultat = $matches[0];
    return $resultat;
}