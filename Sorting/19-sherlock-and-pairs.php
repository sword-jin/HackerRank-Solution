<?php

$handle = fopen("php://stdin", "r");
fscanf($handle, "%d", $T);

while ($T --) {
    fscanf($handle, "%d", $n);
    $arr = array_map('intval', explode(' ', trim(fgets($handle))));

    $times = [];
    foreach ($arr as $a) {
        if (isset($times[$a])) {
            $times[$a] ++;
        } else {
            $times[$a] = 1;
        }
    }

    $count = 0;
    foreach ($times as $a) {
        if ($a == 1) continue;

        $count += ($a - 1) * $a;
    }

    echo $count . PHP_EOL;
}
