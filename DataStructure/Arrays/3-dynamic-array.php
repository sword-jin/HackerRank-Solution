<?php

$handle = fopen("php://stdin", "r");
fscanf($handle, "%d %d", $n, $q);

$lastans = 0;

for ($i=0; $i < $n; $i++) {
    $nums[$i] = [];
}

while ($q --) {
    fscanf($handle, "%d %d %d", $type, $x, $y);

    if ($type == 1) {
        $nums[($lastans ^ $x) % $n][] = $y;
    } else if ($type == 2) {
        $size = count($nums[($lastans ^ $x) % $n]);
        $lastans = $nums[($lastans ^ $x) % $n][$y % $size];
        printf("%d\n", $lastans);
    }
}

