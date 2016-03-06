<?php

$T = trim(fgets(STDIN));

while ($T --) {
    fscanf(STDIN, "%d %d", $n, $m);
    $nums = array_map('intval', explode(' ', trim(fgets(STDIN))));

    $psum = array(-1 => 0);
    $msum = array(-1 => 0);
    $midx = array();
    $midx[0][] = -1;
    $max = 0;
    for ($i=0; $i < $n; $i++) {
        $psum[$i] = $psum[$i - 1] + $nums[$i];
        $msum[$i] = $psum[$i] % $m;
        $midx[$msum[$i]][] = $i;
        if ($msum[$i] > $max)
            $max = $msum[$i];
    }
    // print_r($psum);
    // print_r($msum);

    sort($msum);
    for ($i=1; $i <= $n; $i++) {
        $sum1 = $msum[$i - 1];
        $sum2 = $msum[$i];
        // echo "sum1:$sum1, sum2:$sum2\n";
        foreach ($midx[$sum1] as $p1) {
            foreach ($midx[$sum2] as $p2) {
                if ($p1 > $p2) {
                    $d = $sum1 - $sum2;
                    if ($d < 0 && $m + $d > $max) {
                        $max = $m + $d;
                    }
                }
            }
        }
    }

    echo $max . "\n";
}
