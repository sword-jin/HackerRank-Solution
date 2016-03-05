<?php

$handle = fopen("php://stdin", "r");
fscanf($handle, "%d %d %d", $N, $K, $Q);

$A = explode(' ', trim(fgets($handle)));

$times = $K % $N;

while ($Q --) {
    fscanf($handle, "%d", $a);

    if ($a - $times >= 0) {
        echo $A[$a - $times] . PHP_EOL;
    } else {
        echo $A[$a - $times + $N] . PHP_EOL;
    }
}
