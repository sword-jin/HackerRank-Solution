<?php

$handle = fopen("php://stdin", "r");
fscanf($handle, "%d", $t);

for ($i=0; $i < $t; $i++) {
    fscanf($handle, "%d %d", $m, $n);

    echo floor(sqrt($n)) - ceil(sqrt($m)) + 1 . PHP_EOL;
}
