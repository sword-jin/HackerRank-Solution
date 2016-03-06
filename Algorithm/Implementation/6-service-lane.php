<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d %d",$n,$t);
$width_temp = fgets($handle);
$width = explode(" ",$width_temp);
array_walk($width,'intval');
for($a0 = 0; $a0 < $t; $a0++){
    fscanf($handle,"%d %d",$i,$j);

    $through = array_slice($width, $i, $j - $i + 1);
    printf("%d\n", min($through));
}
