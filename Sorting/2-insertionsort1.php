<?php

function insertSort($arr)
{
    $count = count($arr);
    $last = $arr[$count - 1];

    for ($i=$count - 2; $i >= 0; $i--) {
        if ($arr[$i] > $last) {
            $arr[$i + 1] = $arr[$i];
            echo implode(' ', $arr) . PHP_EOL;
        } else {
            $arr[$i + 1] = $last;
            echo implode(' ', $arr) . PHP_EOL;
            break;
        }

        if ($i == 0) {
            $arr[0] = $last;
            echo implode(' ', $arr) . PHP_EOL;
        }
    }
}

$handle = fopen("php://stdin", "r");
fscanf($handle, "%d", $m);
$ar = explode(' ', trim(fgets($handle)));

insertSort($ar);
