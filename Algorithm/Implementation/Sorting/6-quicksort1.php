<?php

function partition($ar) {
    $count = count($ar);
    $equal = $ar[0];
    $left = [];
    $right = [];

    for ($i=0; $i < $count; $i++) {
        if ($ar[$i] >= $equal) {
            $right[] = $ar[$i];
        } else {
            $left[] = $ar[$i];
        }
    }

    echo implode(' ', array_merge($left, $right)) . PHP_EOL;
}

$fp = fopen("php://stdin", "r");

fscanf($fp, "%d", $m);
$ar = explode(' ', trim(fgets($fp)));

partition($ar);
