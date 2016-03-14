<?php

// php time out.

$handle = fopen("php://stdin", "r");
fscanf($handle, "%s", $str);

$length = strlen($str);

$max = $length;
$collection = [];

for ($i=1; $i < $length + 1; $i++) {
    for ($j=0; $j < $length + 1 - $i ; $j++) {
        $current = substr($str, $j, $i);
        if (! in_array($current, $collection)) {
            $collection[] = $current;
            $count = 0;
            $start = $j;

            if (strlen($current) > 1 && $current[0] == $current[1]) {
                while (($pos = strpos($str, $current, $start)) !== false) {
                    $count ++;
                    $start = $pos + 1;
                }
            } else {
                $count = substr_count($str, $current);
            }

            if (($count * $i) > $max) {
                $max = $count * $i;
            }
        }
    }
}

echo $max . PHP_EOL;
