<?php

$handle = fopen("php://stdin", "r");
fscanf($handle, "%d", $t);

$regex = '/^[a-z]{0,3}\d{2,8}[A-Z]{3,}$/';
while ($t --) {
    fscanf($handle, "%s", $s);

    echo preg_match($regex, $s) ? "VALID\n" : "INVALID\n";
}
