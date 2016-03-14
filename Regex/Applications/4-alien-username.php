<?php

$handle = fopen("php://stdin", "r");
fscanf($handle, "%d", $t);

while ($t --) {
    fscanf($handle, "%s", $username);

    $regex = '/^[\._]\d+[a-zA-Z]*_?$/';

    echo preg_match($regex, $username) ? "VALID\n" : "INVALID\n";
}
