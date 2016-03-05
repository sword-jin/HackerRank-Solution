<?php

// timeout.. cpp

$handle = fopen("php://stdin", "r");
fscanf($handle, "%d", $T);

while ($T --) {
    fscanf($handle, "%s", $str);

    $res = stringSimilarity($str);
    echo "$res\n";
}

function stringSimilarity($s) {
    $letters = str_split($s);
    $length = count($letters);
    $count = $length;
    for ($i=1; $i < $length; $i++) {
        $j = 0;
        while ($letters[$j] == $letters[$j + $i]) {
            $j ++;
        }
        $count += $j;
    }

    return $count;
}
