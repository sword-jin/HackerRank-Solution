<?php

$handle = fopen("php://stdin", "r");
fscanf($handle, "%d", $t);

while ($t --) {
    fscanf($handle, "%d", $n);
    $arr = array_map('intval', explode(' ', trim(fgets($handle))));

    if ($n == 1) {
        echo "YES\n";
        continue;
    }

    $exists = false;

    $sum = array_sum($arr);
    $right = $sum;

    for ($i=0; $i < $n; $i++) {
        $left = $sum - $right;
        $right = $right - $arr[$i];

        if ($left == $right) {
            $exists = true;
            break;
        }
    }

    echo $exists ? "YES\n" : "NO\n";
}
