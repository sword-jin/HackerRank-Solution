<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$t);
for($a0 = 0; $a0 < $t; $a0++){
    fscanf($handle,"%d %d",$b, $w);
    fscanf($handle,"%d %d %d", $x, $y, $z);

    if ($x + $z <= $y) {
        echo ($b + $w) * $x + $w * $z . PHP_EOL;
    } else if ($y + $z <= $x) {
        echo $b * $z + ($b + $w) * $y . PHP_EOL;
    } else {
        echo $b * $x + $w * $y . PHP_EOL;
    }
}
