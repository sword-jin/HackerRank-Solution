<?php

$handle = fopen("php://stdin", "r");
fscanf($handle, "%d", $t);

while ($t --) {
    fscanf($handle, "%d", $n);

    $result = gmp_pow(2, $n);
    printf("%d\n", array_sum(str_split(gmp_strval($result))));
}
