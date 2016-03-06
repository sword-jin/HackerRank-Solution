<?php

$handle = fopen("php://stdin", "r");

fscanf($handle, "%d", $t);

for ($a0=0; $a0 < $t; $a0++) {
    fscanf($handle, "%d", $n);
    fscanf($handle, "%d", $a);
    fscanf($handle, "%d", $b);

    if ($a > $b) {
        $temp = $a;
        $a = $b;
        $b = $temp;
    }

    $result = [];
    for ($i=0; $i <= $n - 1; $i++) {
        $temp = ($n - 1 - $i) * $a + $i * $b;
        if (! in_array($temp, $result)) {
            $result[] = $temp;
        }
    }

    echo implode(" ", $result) . PHP_EOL;
}
