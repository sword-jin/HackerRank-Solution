<?php

$handle = fopen("php://stdin", "r");
fscanf($handle, "%d", $t);

$lines = '';
while ($t --) {
    $lines .= ' ' . trim(fgets($handle));
}

fscanf($handle, "%d", $n);

preg_match_all('/\b[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.*\b/', $lines, $emails);

$emails = array_unique($emails[0]);
sort($emails);

printf("%s\n", implode(";", $emails));
