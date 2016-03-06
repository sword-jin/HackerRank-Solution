<?php

// not solve

$handle = fopen("php://stdin", "r");
fscanf($handle, "%d", $m);
fscanf($handle, "%d", $n);

while ($m --) {
    $matrix[] = array_map('intval', explode(' ', trim(fgets($handle))));
}
// var_dump($matrix);
