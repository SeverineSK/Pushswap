<?php

$la = $argv;
array_shift($la);
$lb = [];

function sa(&$la)
{
    if (count($la) >= 2) {
        $index1a = $la[0];
        $index2a = $la[1];
        $la[0] = $index2a;
        $la[1] = $index1a;
    }
    // return ($la);
    echo 'sa ';
}

// sa($la);

function sb(&$lb)
{
    if (count($lb) >= 2) {
        $index1b = $lb[0];
        $index2b = $lb[1];
        $lb[0] = $index2b;
        $lb[1] = $index1b;
    }
     echo 'sb ';
    // return ($lb);
    
}
// sb($lb);

function sc(&$la, &$lb)
{
    sa($la);
    sb($lb);

     echo 'sc ';
    // return $lb;
    
}

// sc($la,$lb);

function pa(&$lb, &$la)
{

    array_unshift($la, $lb[0]);
    array_shift($lb);

    // return ($lb);
     echo 'pa ';
    
}

//  pa($la,$lb);

function pb(&$la, &$lb)
{

    array_unshift($lb, $la[0]);
    array_shift($la);

     echo 'pb ';
    // return ($la);
}

//  pb($la,$lb);

function ra(&$la)
{
 
    $debut_la = array_shift($la);
    array_push($la, $debut_la);

    // return ($la);
     echo 'ra ';
}

//  ra($la);

function rb(&$lb)
{
 
    $debut_lb = array_shift($lb);
    array_push($lb, $debut_lb);

    // return ($lb);
     echo 'rb ';
}

//  rb($lb);

function rr(&$la, &$lb)
{
    ra($la);
    rb($lb);

     echo 'rr ';
    //return $lb;
}

//   rr($la,$lb);

function rra(&$la)
{
    
    $fin_la = array_pop($la);
    array_unshift($la, $fin_la);

    // return ($la);
     echo 'rra ';
}

//    rra($la);

function rrb(&$lb)
{

    $fin_lb = array_pop($lb);
    array_unshift($lb, $fin_lb);

     echo 'rrb ';
    // return ($lb);
}

//  rrb($lb);

function rrr(&$la, &$lb)
{
    rra($la);
    rrb($lb);

 echo 'rrr ';
    // return $lb;
}


// rrr($la,$lb);

// sa($la);
// sb($la);
// sc($la, $lb);
// ra($la);
// rb($la);
// rr($la, $lb);
// rra($la);
// rrb($la);
// rrr($la, $lb);

// print_r($la);

