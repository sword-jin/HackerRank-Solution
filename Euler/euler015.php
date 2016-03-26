<?php

$handle = fopen("php://stdin", "r");
fscanf($handle, "%d", $t);

while ($t --) {
    fscanf($handle, "%d %d", $m, $n);
    if ($m < $n) {
        $temp = $n;
        $n = $m;
        $m = $temp;
    }

    printf("%s\n", gmp_strval(gmp_mod(gmp_div(Factorial($m + 1, $m + $n), (Factorial(1, $n))), 1000000007)));
}

function Factorial($m, $n) {
    $result = gmp_init(1);

    foreach (range($m, $n) as $num) {
        $result = gmp_mul($result, $num);
    }

    return $result;
}
