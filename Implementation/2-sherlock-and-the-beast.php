<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$t);
for($a0 = 0; $a0 < $t; $a0++){
    fscanf($handle,"%d",$n);

    $found = false;

    for ($i = $n ; $i >= 0; $i -= 5) {
        if (($n - $i) % 5 == 0 && ($i % 3 == 0)) {
            echo str_repeat('5', $i) . str_repeat('3', $n - $i) . PHP_EOL;
            $found = true;
            break;
        }
    }

    if (! $found) echo '-1' . PHP_EOL;
}
