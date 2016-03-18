<?php

$handle = fopen("php://stdin", "r");
fscanf($handle, "%d", $T);

while ($T --) {
    fscanf($handle, "%d", $n);

    echo solve($n) . PHP_EOL;
}

function solve($n) {
    $i = 2;
    $largest_prime = 1;
    while ($i * $i <= $n) { // 221
        while ($n % $i == 0) {
            $largest_prime = $i; //13
            $n /= $i; // 17
        }
        $i ++; // 14
    }
    if ($n > $largest_prime)
        $largest_prime = $n;

    return $largest_prime;
}

/**
 * I have on idea.
 */
// function solve($n) {
//     while ($n % 2 == 0) {
//         $n = $n / 2;
//     }
//     if ($n == 1) {
//         return 2;
//     }
//     // 100 -> 5
//     $i = 3;
//     while ($n != 1) {
//         if ($n % $i == 0) {
//             $n = $n / $i;
//             $max = $i;
//         } else {
//             $i += 2;
//         }
//     }

//     return $max;
// }

/**
 * time out.
 */
// function solve($n) {
//     if (isPrime($n)) {
//         return $n;
//     }

//     for ($i = $n - 1; $i > 1; $i --) {
//         if ($n % $i == 0 && isPrime($i)) {
//             return $i;
//         }
//     }
// }

// function isPrime($n) {
//     for ($i = 2; $i <= floor(sqrt($n)); $i ++) {
//         if ($n % $i == 0) {
//             return false;
//         }
//     }

//     return true;
// }

/**
 * time out.
 */
// function solve($n) {
//     $i = 2;
    // while ($n != 1) {
    //     if ($n % $i == 0) {
    //         $n = $n / $i;
    //         $max = $i;
    //     } else {
    //         $i += 1;
    //     }
    // }

//     return $max;
// }
