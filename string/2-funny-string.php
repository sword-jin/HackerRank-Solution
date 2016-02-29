<?php

$handle = fopen("php://stdin", "r");
fscanf($handle, "%d", $T);

for ($i=0; $i < $T; $i++) {
    $s = fgets($handle);
    $s = trim($s);
    $r = strrev($s);

    $funny = true;
    for ($j=1; $j < strlen($s); $j++) {
        if (abs(ord($s[$j]) - ord($s[$j - 1])) != abs(ord($r[$j]) - ord($r[$j - 1]))) {
            $funny = false;
            break;
        }
    }

    echo $funny ? "Funny\n" : "Not Funny\n";
}
