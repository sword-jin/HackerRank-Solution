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
    $regex = '/' . substr($s, 0, strlen($s) - 2) . '[sz]' . substr($s, strlen($s) - 1) . '/';

    printf("%d\n", preg_match_all($regex, $words));
}
