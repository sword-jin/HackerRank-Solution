<?php

$handle = fopen("php://stdin", "r");
fscanf($handle, "%d", $t);

$s = [];
while ($t --) {
    fscanf($handle, "%s", $s[]);
}

$sum = 0;
foreach ($s as $n) {
    $sum = gmp_add($sum, $n);
}

echo substr(gmp_strval($sum), 0, 10) . PHP_EOL;
