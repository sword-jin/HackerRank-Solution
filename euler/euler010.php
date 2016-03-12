<?php

$handle = fopen("php://stdin", "r");
fscanf($handle, "%d", $T);

$primes = [2, 3];

while ($T --) {
    fscanf($handle, "%d", $n);

    solve($n);
}

function solve($n) {
    global $primes;
    $length = count($primes);

    $result = 0;
    $i = 0;
    for (; $i < $length; $i ++) {
        if ($primes[$i] <= $n) {
            $result += $primes[$i];
        } else {
            break;
        }
    }
    if ($primes[$length - 1] >= $n) {
        printf("%d\n", $result);
        return;
    }

    for ($i = $primes[$i - 1] + 2; $i <= $n; $i += 2) {
        if (isPrime($i)) {
            $result += $i;
        }
    }
    printf("%d\n", $result);
}

function isPrime($n) {
    global $primes;

    if ($n == 3) {
        return false;
    }

    for ($i = 3; $i < floor(sqrt($n)) + 2; $i += 2) {
        if ($n % $i == 0) {
            return false;
        }
    }

    $primes[] = $n;

    return true;
}
