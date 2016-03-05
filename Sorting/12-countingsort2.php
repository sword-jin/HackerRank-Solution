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

$results = array_filter($results, function($result) {
    return $result != 0;
});

foreach ($results as $key => $value) {
    echo str_repeat("$key ", $value);
}
