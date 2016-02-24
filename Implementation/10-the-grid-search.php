<?php

$handle = fopen ("php://stdin", "r");
fscanf($handle, "%d", $t);

for ($a0 = 0; $a0 < $t; $a0++) {
    $big = array();
    $small = array();

    fscanf($handle, "%d %d", $R, $C);
    for ($big_i = 0; $big_i < $R; $big_i++) {
       fscanf($handle, "%s", $big[]);
    }

    fscanf($handle, "%d %d", $r, $c);
    for ($small_i = 0; $small_i < $r; $small_i++) {
       fscanf($handle, "%s", $small[]);
    }

    echo gridExists($big, $small) ? "YES\n" : "NO\n";
}

function gridExists(array $big, array $small) {
    $exists = false;
    $match = [];

    foreach ($big as $key => $bigLine) {
        if ($exists) break;

        $start = 0;

        while (($position = strpos($bigLine, $small[0], $start)) !== false) {
            if ($exists) break;

            $match = [$key, $position];
            // $start += strlen($small[0]);

            for ($i = 1, $j = $match[0] + 1; $i < count($small); $i ++, $j ++) {
                $position = strpos($big[$j], $small[$i], $start);

                if ($position === false || $position !== $match[1]) {
                    $exists = false;
                    break;
                } else {
                    $exists = true;
                }
            }

            $start ++;
        }
    }

    return $exists;
}
