<?php

$handle = fopen("php://stdin", "r");
fscanf($handle, "%s", $one);
fscanf($handle, "%s", $two);

$some = [];
$other = [];

for ($i=0; $i < 26; $i++) {
    $some[$i] = 0;
    $other[$i] = 0;
}

for ($i=0; $i < strlen($one); $i++) {
    $index = ord($one[$i]) - ord('a');

    if (isset($some[$index])) {
        $some[$index] ++;
    } else{
        $some[$index] = 0;
    }
}

for ($i=0; $i < strlen($two); $i++) {
    $index = ord($two[$i]) - ord('a');

    $other[$index] ++;
}

$count = 0;
for ($i=0; $i < 26; $i++) {
    $count += abs($some[$i] - $other[$i]);
}

echo $count . PHP_EOL;
