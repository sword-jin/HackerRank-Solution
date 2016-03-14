<?php

$handle = fopen("php://stdin", "r");
fscanf($handle, "%d", $t);

$twitters = '';
while ($t --) {
    $twitters .= trim(fgets($handle)) . " ";
}

echo preg_match_all('/HackerRank/i', $twitters);
