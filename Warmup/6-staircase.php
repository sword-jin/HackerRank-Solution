<?php

// test#11 1.02s

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$n);

for ($i = 1; $i <= $n; $i ++) {
    $s = str_repeat(' ', $n - $i) . str_repeat('#', $i) . "\n";

    echo $s;
}
