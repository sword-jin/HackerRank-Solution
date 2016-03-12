<?php

$handle = fopen("php://stdin", "r");
fscanf($handle, "%d", $T);

while ($T --) {
    fscanf($handle, "%d", $n);

    echo solve($n) . PHP_EOL;
}

function solve($n) {
    $first = 1;
    $second = 1;
    $sum = 0;

    while ($second < $n && $first < $n) {
        if ($first % 2 == 0) $sum += $first;
        if ($second % 2 == 0) $sum += $second;

        $first = $first + $second;
        $second = $first + $second;
    }

    if ($first < $n && $first % 2 == 0) $sum += $first;

    return $sum;
}
