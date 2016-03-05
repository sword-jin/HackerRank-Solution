<?php

$handle = fopen("php://stdin", "r");
fscanf($handle, "%d", $T);

while ($T --) {
    fscanf($handle, "%s", $str);

    $start = 0;
    $end = strlen($str) - 1;

    while ($start < $end) {
        if ($str[$start] == $str[$end]) {
            $start ++;
            $end --;
        } else {
            break;
        }
    }

    if ($start >= $end) {
        echo "-1\n";
        continue;
    }

    $left = true;
    $start_temp = $start;
    $end_temp = $end;
    $start_temp ++;
    while ($start_temp < $end_temp) {
        if ($str[$start_temp] == $str[$end_temp]) {
            $start_temp ++;
            $end_temp --;
        } else {
            $left = false;
            break;
        }
    }

    echo $left ? $start : $end;
    echo "\n";
}
