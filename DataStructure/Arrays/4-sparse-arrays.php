<?php

$handle = fopen("php://stdin", "r");
fscanf($handle, "%d", $n);

while ($n --) {
    fscanf($handle, "%s", $temp);
    $strings[] = $temp;
}

fscanf($handle, "%d", $q);

while ($q --) {
    $count = 0;
    fscanf($handle, "%s", $str);


    foreach ($strings as $string) {
        if ($string === $str) $count ++;
    }

    printf("%d\n", $count);
}
