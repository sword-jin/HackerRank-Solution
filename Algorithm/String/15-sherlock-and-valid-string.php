<?php

$handle = fopen("php://stdin", "r");
fscanf($handle, "%s", $str);

$letters = [];

foreach (range('a', 'z') as $letter) {
    if (substr_count($str, $letter)) {
        $letters[] = substr_count($str, $letter);
    }
}

$max = max($letters);
$min = min($letters);
if ($max == $min) {
    echo "YES\n";
} else if ((array_count_values($letters)[$min] == 1 && ($min == 1 || $min - $max == 1)) || (array_count_values($letters)[$max] == 1 && ($max == 1 || $max - $min == 1))) {
    echo "YES\n";
} else {
    echo "NO\n";
}
