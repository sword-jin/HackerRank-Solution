<?php

$handle = fopen("php://stdin", "r");
fscanf($handle, "%d", $T);

while ($T --) {
    fscanf($handle, "%s", $S);

    $length = strlen($S);
    $start = 0;
    $end = $length - 1;
    $count = 0;
    while ($start < $end) {
        if ($S[$start] == $S[$end]) {
            $start ++;
            $end --;
            continue;
        } else {
            $count += abs(ord($S[$start]) - ord($S{$end}));
            $start ++;
            $end --;
        }
    }

    echo $count . PHP_EOL;
}
