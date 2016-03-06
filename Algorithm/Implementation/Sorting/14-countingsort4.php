<?php

$handle = fopen("php://stdin", "r");
fscanf($handle, "%d", $t);

$array = [];
$out = [];

$i = 0;
while ($ar = trim(fgets($handle))) {
    $i ++;
    list($a, $s) = explode(' ', $ar);
    if ($i <= $t / 2) {
        $s = '-';
    }
    $array[(int)$a][] = $s;
}

ksort($array);

foreach ($array as $s) {
    foreach ($s as $x) {
        $out[] = $x;
    }
}

echo implode(' ', $out);
