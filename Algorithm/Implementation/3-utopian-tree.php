<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$t);
for($a0 = 0; $a0 < $t; $a0++){
    fscanf($handle,"%d",$n);

    if ($n % 2 == 0)
        $height = (pow(2, (int) ($n / 2)) - 1) * 2 + 1;
    else
        $height = (pow(2, (int) ($n / 2) + 1) - 1) * 2;

    echo $height . PHP_EOL;
}

