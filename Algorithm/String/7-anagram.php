<?php

$handle = fopen("php://stdin", "r");
fscanf($handle, "%d", $T);

while ($T --) {
    fscanf($handle, "%s", $str);

    if (strlen($str) % 2 == 1) {
        echo "-1\n";
        continue;
    }

    $count = 0;
    $letter = [];
    $length = strlen($str);
    for ($i=0; $i < 26; $i++) {
        $letter[$i] = 0;
    }

    for ($i=0; $i < $length / 2; $i++) {
        $letter[ord($str[$i]) - ord('a')] ++;
    }

    for ($i=$length / 2; $i < $length; $i++) {
        $letter[ord($str[$i]) - ord('a')] --;
    }

    for ($i=0; $i < 26; $i++) {
        $count += abs($letter[$i]);
    }

    echo $count / 2 . PHP_EOL;
}
