<?php

$handle = fopen("php://stdin", "r");
fscanf($handle, "%d", $t);

$lines = '';
while ($t --) {
    $lines .= ' ' . trim(fgets($handle));
}

fscanf($handle, "%d", $n);

while ($n --) {
    fscanf($handle, "%s", $word);
    $count = 0;

    $regex = '/(\b' . $word. '\b)/';

    printf("%d\n", preg_match_all($regex, $lines));
}
