<?php

require_once 'functions.php';

$la = $argv;
array_shift($la);

$lb = [];

function trierListe(&$la, &$lb)
{
    while (!ListeTrier($la)) {
        $min = min($la); 
        $minIndex = array_search($min, $la);

        if ($minIndex <= count($la) / 2) {
           
            for ($i = 0; $i < $minIndex; $i++) {
                ra($la); 
            }
            pb($la, $lb);
        } else {
           
            $fin = count($la) - $minIndex;
            for ($i = 0; $i < $fin; $i++) {
                rra($la); 
            }
            pb($la, $lb);
        }
    }

    while (!empty($lb)) {
        pa($lb, $la); 
    }
}

function ListeTrier($liste)
{
    $y = count($liste);
    for ($i = 1; $i < $y; $i++) {
        if ($liste[$i] < $liste[$i - 1]) {
            return false; 
        }
    }
    return true; 
}


trierListe($la, $lb); 
echo "\n";

// print_r($la);

