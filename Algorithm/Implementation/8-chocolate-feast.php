<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$t);
for($a0 = 0; $a0 < $t; $a0++){
    fscanf($handle,"%d %d %d",$n,$c,$m);

    $wrappers = (int) ($n / $c);
    $count = $wrappers;
    while ($wrappers >= $m) {
        $wrappers -= $m;
        $count ++;
        $wrappers ++;
    }

    echo $count . PHP_EOL;
}

