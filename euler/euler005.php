<?php

$handle = fopen("php://stdin", "r");
fscanf($handle, "%d", $T);

while ($T --) {
    fscanf($handle, "%d", $n);

    solve($n);
}

function solve($n) {
    // 8 (2 * 3) * (3) * (5) * (7)
    $result = 1;

    if ($n !== 1) {
        $primes = array_filter(range(2, $n), function($num) {
            return ! in_array(0, array_map(function($i) use ($num) {
                return $num % $i;
            }, range(2, floor(sqrt($num)) + 1)));
        });
        $primes[] = 2;

        foreach ($primes as $prime) {
            $i = 1;
            while (pow($prime, $i) <= $n) {
                $i ++;
            }
            $result = $result * pow($prime, $i - 1);
        }
    }

    printf("%d\n", $result);
}
