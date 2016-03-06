<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$n);
$grid = array();
for($grid_i = 0; $grid_i < $n; $grid_i++) {
   fscanf($handle,"%s",$grid[]);
}

for ($i = 1; $i < $n - 1; $i++) {
    for ($j = 1; $j < $n - 1; $j++) {
        if ($grid[$i][$j] > $grid[$i][$j + 1] &&
            $grid[$i][$j] > $grid[$i][$j - 1] &&
            $grid[$i][$j] > $grid[$i + 1][$j] &&
            $grid[$i][$j] > $grid[$i - 1][$j]) {
            $grid[$i][$j] = 'X';
        }
    }
}

foreach ($grid as $g) {
    print $g . PHP_EOL;
}
