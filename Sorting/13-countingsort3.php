<?php

$handle = fopen("php://stdin", "r");
fscanf($handle, "%d", $t);

$str = [];
$a = [];
$count = array_fill(0, 101, 0);
for ($i=0; $i < $t; $i++) {
    fscanf($handle, "%d %s", $a[$i], $str[]);
    $count[$a[$i]] ++;
}

for ($i=0; $i < 100; $i++) {
    if ($i != 0) {
        $count[$i] = $count[$i] + $count[$i - 1];
    }

    printf("%d ", $count[$i]);
}
