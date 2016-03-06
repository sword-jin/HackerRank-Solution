<?php

// test#6 0.11

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$n);
$arr_temp = fgets($handle);
$arr = explode(" ",$arr_temp);
array_walk($arr,'intval');

while (count($arr) !== 0) {
    echo count($arr) . PHP_EOL;

    $min = min($arr);
    array_walk($arr, function(&$item) use ($min) {
        $item = $item - $min;
    });

    $arr = array_filter($arr, function($a) {
        return $a !== 0;
    });
}
