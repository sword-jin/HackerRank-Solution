<?php

function insertionSort($arr){
    $times = 0;

    for ($i=1; $i < count($arr); $i++) {
        $val = $arr[$i];
        for ($j=$i - 1; $j >= 0; $j--) {
            if ($val < $arr[$j]) {
                $arr[$j + 1] = $arr[$j];
                $arr[$j] = $val;
                $times ++;
            } else {
                break;
            }
        }
    }

    return $times;
}

function quickSort($arr, $start, $end) {
    global $times_2;

    if ($end - $start < 2)
        return;
    $p = $arr[$end - 1];
    $i = $start;
    for ($j=$start; $j < $end; $j++) {
        if ($arr[$j] <= $p) {
            $temp = $arr[$i];
            $arr[$i] = $arr[$j];
            $arr[$j] = $temp;
            $times_2 ++;
            $i ++;
        }
    }

    quickSort($arr, $start, $i - 1);
    quickSort($arr, $i, $end);

    return $times_2;
}

$handle = fopen("php://stdin", "r");
fscanf($handle, "%d", $t);

$arr = explode(' ', trim(fgets($handle)));

global $times_2;
$times_2 = 0;

echo insertionSort($arr) - quickSort($arr, 0, count($arr)) . PHP_EOL;
