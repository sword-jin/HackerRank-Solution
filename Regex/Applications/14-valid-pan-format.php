<?php

$handle = fopen("php://stdin", "r");
fscanf($handle, "%d", $t);

$regex = '/^[A-Z]{5}[0-9]{4}[A-Z]$/';
while ($t --) {
    fscanf($handle, "%s", $s);

    echo preg_match($regex, $s) ? "VALID\n" : "INVALID\n";
}
