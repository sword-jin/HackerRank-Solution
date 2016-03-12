<?php

$handle = fopen("php://stdin", "r");
fscanf($handle, "%d", $t);

while ($t --) {
    fscanf($handle, "%d", $n);

    echo getResult($n) . PHP_EOL;
}

function getResult($n) {
    $three_num = floor(($n - 1) / 3); // 12 -> 3,6,9 4
    $five_num = floor(($n - 1) / 5);
    $fif_num = floor(($n - 1) / 15);

    $result = (($three_num + 1) * $three_num / 2) * 3
            + (($five_num + 1) * $five_num / 2) * 5
            - (($fif_num + 1) * $fif_num / 2) * 15;

    return $result;
}
