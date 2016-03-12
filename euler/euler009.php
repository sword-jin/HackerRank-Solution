<?php

$handle = fopen("php://stdin", "r");
fscanf($handle, "%d", $T);

while ($T --) {
    fscanf($handle, "%d", $n);

    solve($n);
}

function solve($n) {
    $result = -1;

    for ($a = 1; $a < $n; $a ++) {
        if ((pow($n, 2) - 2 * $a * $n) / (2 * $n - 2 * $a) == floor((pow($n, 2) - 2 * $a * $n) / (2 * $n - 2 * $a))) {
            $b = (pow($n, 2) - 2 * $a * $n) / (2 * $n - 2 * $a);
            $c = $n - $a - $b;

            if ($c > 0 && $b > 0 && $a * $b * $c > $result) {
                $result = $a * $b * $c;
            }
        }
    }

    echo $result . PHP_EOL;
}
