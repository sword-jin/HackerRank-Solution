<?php

$handle = fopen("php://stdin", "r");
fscanf($handle, "%d", $T);

while ($T --) {
    fscanf($handle, "%d", $M);
    fscanf($handle, "%d", $N);
    $prices = array_map('intval', explode(' ', trim(fgets($handle))));

    $searched = [];
    for ($i=0; $i < $N; $i++) {
        $diff = $M - $prices[$i];

        if (array_key_exists($diff, $searched)) {
            printf("%d %d\n", $searched[$diff] + 1, $i + 1);
            break;
        }

        $searched[$prices[$i]] = $i;
    }
}
