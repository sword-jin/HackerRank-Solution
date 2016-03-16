<?php

// php momery out... check c++.

$handle = fopen("php://stdin", "r");
fscanf($handle, "%d", $t);

$cache = array_fill(0, 5000002, 0);
$cache[1] = 1;

for ($i = 2; $i <= 5000000; $i ++) {
    $sequence = $i;
    $k = 0;
    while ($sequence != 1 && $sequence >= $i) {
        $k ++;
        if ($sequence % 2 == 0) {
            $sequence = $sequence / 2;
        } else {
            $sequence = $sequence * 3 + 1;
        }
    }
    $cache[$i] = $k + $cache[$sequence];
}

$max = 1;
$max_at = 1;
for ($i = 1; $i <= 5000000; $i ++) {
    if ($cache[$i] >= $max) {
        $max = $cache[$i];
        $max_at = $i;
    }
    $cache[$i] = $max_at;
}

while ($t --) {
    fscanf($handle, "%d", $n);

    printf("%d\n", $cache[$n]);
}
