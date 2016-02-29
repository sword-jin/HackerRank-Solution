<?php

$handle = fopen("php://stdin", "r");
$string = fgets($handle);

$string = strtolower($string);

$exists = true;

foreach (range('a', 'z') as $c) {
    if (strpos($string, $c) === false) {
        $exists = false;
        break;
    }
}

echo ($exists ? "pangram" : "not pangram") . PHP_EOL;
