<?php

$handle = fopen("php://stdin", "r");
fscanf($handle, "%s", $str);

$length = strlen($str);

$flag = true;
$some = [];

for ($i=0; $i < $length; $i++) {
    $index = ord($str[$i]) - ord('a');
    if (isset($some[$index])) {
        $some[$index] ++;
    } else {
        $some[$index] = 1;
    }
}

if ($length % 2 == 0) {
    foreach ($some as $a) {
        if ($a % 2 !== 0) {
            $flag = false;
            break;
        }
    }
} else {
    $odd = 0;
    $even = 0;
    foreach ($some as $a) {
        if ($a % 2 !== 0) {
            $even ++;
        } else {
            $odd ++;
        }
    }

    if ($even != 1 || $odd == $length - 1) {
        $flag = false;
    }
}

echo $flag ? "YES\n" : "NO\n";
