<?php

$_fp = fopen("php://stdin", "r");

$n = trim(fgets($_fp));
$numbers = explode(' ', trim(fgets($_fp)));
quicksort($numbers, 0, $n-1);

function quicksort(array &$data, $start, $end) {
    if ($start < $end) {
        $p = partition($data, $start, $end);
        quicksort($data, $start, $p - 1);
        quicksort($data, $p + 1, $end);
    }
}

function partition(array &$input, $start, $end) {
    $firstHigh = $start;
    $p = $input[$end];
    for ($i=$start; $i < $end; $i++) {
        if ($p > $input[$i]) {
            $tmp = $input[$i];
            $input[$i] = $input[$firstHigh];
            $input[$firstHigh++] = $tmp;
        }
    }
    $input[$end] = $input[$firstHigh];
    $input[$firstHigh] = $p;
    echo implode(' ', $input) . PHP_EOL;
    return $firstHigh;
}
