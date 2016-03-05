<?php

function quickSort($arr) {

    $count = count($arr);

    if ($count <= 1) return $arr;

    $temp = $arr[0];
    $left = array();
    $right = array();

    for ($i = 1; $i < $count; $i ++) {
        if ($temp > $arr[$i])
            $left[] = $arr[$i];
        else
            $right[] = $arr[$i];
    }

    if (count($left) > 1) {
        $left = quickSort($left);
        echo implode(' ', $left) . PHP_EOL;
    }

    if (count($right) > 1) {
        $right = quickSort($right);
        echo implode(' ', $right) . PHP_EOL;
    }

    return array_merge($left, [$temp], $right);
}

$fp = fopen("php://stdin", "r");

fscanf($fp, "%d", $m);

$ar = explode(' ', trim(fgets($fp)));

$results = quickSort($ar);

echo implode(' ', $results) . PHP_EOL;
