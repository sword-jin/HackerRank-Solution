<?php

$handle = fopen("php://stdin", "r");
fscanf($handle, "%d", $t);
$regex = '//';

while ($t --) {
    $string = trim(fgets($handle));

    if (preg_match($regex, $string, $matches)) {
        printf("CountryCode=%s,LocalAreaCode=%s,Number=%s\n", $matches[1], $matches[3], $matches[4]);
    }
}
