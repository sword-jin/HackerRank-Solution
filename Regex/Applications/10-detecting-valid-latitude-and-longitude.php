<?php

$handle = fopen("php://stdin", "r");
fscanf($handle, "%d", $t);

$lines = [];
while ($t --) {
    $lines[] = trim(fgets($handle));
}

foreach ($lines as $line) {
    if (preg_match_all('/\(\+?-?((?:[1-9]\d*)|(?:[1-9]\d*)\.\d+), \+?-?((?:[1-9]\d*)|(?:[1-9]\d*)\.\d+)\)/', $line, $matches)) {
        if ($matches[1][0] > 90 || $matches[2][0] > 180) {
            echo "Invalid\n";
        } else {
            echo "Valid\n";
        }
    } else {
        echo "Invalid\n";
    }
}
