<?php

$handle = fopen("php://stdin", "r");
fscanf($handle, "%d", $t);

while ($t --) {
    $s = trim(fgets($handle));

    if ($s == 'hackerrank') {
        echo "0\n";
    } else {
        $pos = strpos($s, 'hackerrank');
        if ($pos === false) {
            echo "-1\n";
        } else if ($pos === 0) {
            echo "1\n";
        } else if ($pos + 10 == strlen($s)) {
            echo "2\n";
        } else {
            echo "-1\n";
        }
    }
}
