<?php

$handle = fopen("php://stdin", "r");
fscanf($handle, "%d", $m);
$ar = explode(' ', trim(fgets($handle)));

insertSort2($ar);

function insertSort2(array $arr) {
    $count = count($arr);

    for ($i=1; $i < $count; $i++) {
        $temp = $arr[$i];

        for ($j=$i - 1; $j >= 0; $j--) {
            if ($temp < $arr[$j]) {
                $arr[$j + 1] = $arr[$j];
                $arr[$j] = $temp;
            } else {
                break;
            }
        }

        echo implode(" ", $arr) . PHP_EOL;
    }
}
