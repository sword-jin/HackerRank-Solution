<?php

$_fp = fopen("php://stdin", "r");
fscanf($_fp, "%d", $t);

while ($t --) {
    $str = trim(fgets($_fp));

    if (next_permutation($str)) {
        echo "$str\n";
    } else {
        echo "no answer\n";
    }
}

function next_permutation(&$str) {
    $length = strlen($str);
    $i = $length - 1;
    while ($i > 0 && $str[$i - 1] >= $str[$i]) {
        $i --;
    }

    // no nect permutation.
    if ($i <= 0) return false;

    // search right greater pivot.
    $j = $length - 1;
    while ($str[$j] <= $str[$i - 1]) {
        $j --;
    }

    // change pivot and right.
    $temp = $str[$i - 1];
    $str[$i - 1] = $str[$j];
    $str[$j] = $temp;

    // reverse.
    $j = $length - 1;
    while ($i < $j) {
        $temp = $str[$i];
        $str[$i] = $str[$j];
        $str[$j] = $temp;
        $i ++;
        $j --;
    }

    return true;
}
