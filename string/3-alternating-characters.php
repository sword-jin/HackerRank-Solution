<?php

$handle = fopen("php://stdin", "r");
fscanf($handle, "%d", $T);

for ($i=0; $i < $T; $i++) {
    fscanf($handle, "%s", $str);

    $count = 0;
    for ($j=1; $j < strlen($str); $j++) {
        if ($str[$j] == $str[$j - 1]) {
            $count ++;
        }
    }

    echo $count . PHP_EOL;
}
