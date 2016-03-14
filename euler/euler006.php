<?php

$handle = fopen("php://stdin", "r");
fscanf($handle, "%d", $T);

while ($T --) {
    fscanf($handle, "%d", $n);

    solve1($n);
}

// easiest solution.
function solve1($n) {
    $one = 0;
    $two = 0;
    foreach (range(1, $n) as $a) {
        $one += pow($a, 2);
        $two += $a;
    }

    printf("%d\n", pow($two, 2) - $one);
}

