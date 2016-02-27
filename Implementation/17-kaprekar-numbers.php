<?php

$handle = fopen("php://stdin", "r");
fscanf($handle, "%d", $start);
fscanf($handle, "%d", $end);

function isKaprekar($n) {
    $a = pow($n, 2);

    $a_str = (string) $a;

    if (strlen($a_str) <= 9) {
        $a_str = '0' + $a_str;
    }

    $mid = (int) (strlen($a_str) / 2);

    $left = (int) substr($a_str, 0, $mid);
    $right = (int) substr($a_str, $mid);

    return $left + $right == $n;
}

$results = array_filter(range($start, $end), 'isKaprekar');

echo count($results) ? implode(' ', $results) : 'INVALID RANGE';
echo PHP_EOL;
