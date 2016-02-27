<?php

$handle = fopen ("php://stdin", "r");
fscanf($handle, "%s", $s);

$rows = floor(sqrt(strlen($s)));
$column = ceil(sqrt(strlen($s)));

$arr = str_split($s, $column);

$results = [];
for ($i = 0; $i < $column; $i ++) {
    $str = '';
    for ($j = 0; $j <= $rows; $j ++) {
        if (isset($arr[$j][$i])) {
            $str .= $arr[$j][$i];
        }
    }
    $results[] = $str;
}

echo implode(" ", $results) . PHP_EOL;
