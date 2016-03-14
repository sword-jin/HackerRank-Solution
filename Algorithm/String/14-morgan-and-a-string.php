<?php

// to do...
$handle = fopen("php://stdin", "r");
fscanf($handle, "%d", $T);

while ($T --) {
    fscanf($handle, "%s", $str1);
    fscanf($handle, "%s", $str2);

    $length = strlen($str1);

    $index_1 = 0;
    $index_2 = 0;

    $result = '';
    while ($index_1 < $length - 1 && $index_2 < $length - 1) {
        if (compare($str1, $str2, $index_1, $index_2) < 0) {

        } else {

        }
    }
}

function compare($a, $b, $i, $j) {
    // $length_1 = strlen($a) - $i
}

