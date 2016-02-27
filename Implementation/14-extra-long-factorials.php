<?php

$handle = fopen("php://stdin", "r");
fscanf($handle, "%d", $n);

// one
$result = 1;

while ($n >= 1) {
    $result = bcmul($result, $n);
    $n --;
}

echo $result . PHP_EOL;

// two
$arr = [];
$arr[0] = 1;

$k = 0;
$carry = 0;

for ($i = 1; $i <= $n; $i ++) {
    for ($j = 0; $j <= $k; $j ++) {
        $arr[$j] = $arr[$j] * $i + $carry;
        $carry = $arr[$j] / 10;
        $arr[$j] %= 10;
    }
    while ($carry) {
        $k ++;
        $arr[$k] = $carry % 10;
        $carry /= 10;
    }
}

foreach ($arr as $a) {
    echo $a;
}

echo "\n";
