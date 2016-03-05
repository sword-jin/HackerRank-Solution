<?php

$handle = fopen("php://stdin", "r");
fscanf($handle, "%d", $t);

$arr = explode(' ', trim(fgets($handle)));

$max = max($arr);

$results = [];

for ($i=0; $i <= $max; $i++) {
    $results[$i] = 0;
}

foreach ($arr as $a) {
    $results[$a] ++;
}

for ($i=0; $i <= $max; $i++) {
    echo $results[$i] . ' ';
}
