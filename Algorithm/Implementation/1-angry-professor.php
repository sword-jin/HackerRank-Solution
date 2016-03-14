<?php

$handle = fopen("php://stdin", "r");
fscanf($handle, "%d", $t);

for ($a0 = 0; $a0 < $t; $a0 ++) {
    fscanf($handle, "%d %d", $n, $k);
    $a_temp = fgets($handle);
    $a = explode(" ", $a_temp);
    array_walk($a, 'intval');

    if (count(array_filter($a, function($temp) {
            return $temp <= 0;
        })) < $k) {
        echo "YES" . PHP_EOL;
    } else {
        echo "NO" . PHP_EOL;
    }
}

