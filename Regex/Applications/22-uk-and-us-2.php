<?php

$handle = fopen("php://stdin", "r");
fscanf($handle, "%d", $t);

$words = '';
while ($t --) {
    $words .= trim(fgets($handle)) . " ";
}

fscanf($handle, "%d", $n);

while ($n --) {
    fscanf($handle, "%s", $s);
    $s = str_replace("our", "ou?r", $s);
    $regex = '/(?=\b' . $s . '\b)/i';

    if (preg_match_all($regex, $words, $matches)) {
        echo count($matches[0]) . "\n";
    } else {
        echo "0\n";
    }
}
