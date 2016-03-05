<?php

// timeout.
$handle = fopen("php://stdin", "r");
fscanf($handle, "%d", $t);

while ($t --) {
    fscanf($handle, "%d", $n);
    $arr = array_map('intval', explode(' ', trim(fgets($handle))));

    $count = countShifts($arr);

    echo $count . PHP_EOL;
}

function countShifts(&$array) {
    $count = count($array);
    if ($count < 2) {
        return 0;
    }

    $middle = (int) ($count / 2);
    //make left
    for ($i=0; $i < $middle; $i++) {
        $left[] = $array[$i];
    }
    // make right
    for ($i=$middle; $i < $count; $i++) {
        $right[] = $array[$i];
    }

    return countShifts($left) + countShifts($right) + merge($array, $left, $right);
}

function merge(&$array, $left, $right) {
    $inversions_count = 0;
    $i = 0;
    $j = 0;
    $left_count = count($left);
    $right_count = count($right);
    while ($i < $left_count || $j < $right_count) {
        if ($i == $left_count) {
            $array[$i + $j] = $right[$j];
            $j ++;
        } else if ($j == $right_count) {
            $array[$i + $j] = $left[$i];
            $i ++;
        } else if ($left[$i] <= $right[$j]) {
            $array[$i + $j] = $left[$i];
            $i ++;
        } else {
            $array[$i + $j] = $right[$j];
            $inversions_count += $left_count - $i;
            $j ++;
        }
    }

    return $inversions_count;
}
