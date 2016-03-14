<?php

$handle = fopen("php://stdin", "r");
fscanf($handle, "%d", $T);

while ($T --) {
    fscanf($handle, "%d %d", $n, $k);
    $string = trim(fgets($handle)); // 10

    $max = 0;
    for ($i = 0; $i < $n - $k; $i ++) {
        $current = 1;
        for ($j = $i; $j < $i + $k; $j ++) {
            $current *= $string[$j];
        }
        if ($current > $max) {
            $max = $current;
        }
    }

    echo $max . PHP_EOL;
}
