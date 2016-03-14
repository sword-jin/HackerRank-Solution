<?php

$handle = fopen("php://stdin", "r");
fscanf($handle, "%d", $n);

$arr = explode(' ', trim(fgets($handle)));
sort($arr);

$results = [];
$min = $arr[1] - $arr[0];
$mins = [1];

for ($i=2; $i < $n; $i++) {
    if ($arr[$i] - $arr[$i - 1] < $min) {
        $min = $arr[$i] - $arr[$i - 1];
        $mins = [$i];
    } else if ($arr[$i] - $arr[$i - 1] == $min) {
        $mins[] = $i;
    }
}

foreach ($mins as $a) {
    echo $arr[$a - 1] . ' ' . $arr[$a] . ' ';
}
