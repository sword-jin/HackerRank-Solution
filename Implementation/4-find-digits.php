<?php

$handle = fopen("php://stdin", "r");
fscanf($handle, "%d", $t);

// one
// for ($i=0; $i < $t; $i++) {
//     fscanf($handle, "%d", $n);

//     $n_str = (string)$n;

//     $array = str_split($n_str);

//     $result = 0;

//     foreach ($array as $a) {
//         if ($a != 0 && $n % $a == 0) {
//             $result ++;
//         }
//     }

//     echo $result . PHP_EOL;
// }

// two
for ($i=0; $i < $t; $i++) {
    fscanf($handle, "%d", $n);

    $m = $n;

    $result = 0;

    while ($m > 0) {
        $current_digit = $m % 10;
        $m = (int) $m / 10;
        if ($current_digit != 0 && $n % $current_digit == 0) {
            $result ++;
        }
    }

    echo $result . PHP_EOL;
}
