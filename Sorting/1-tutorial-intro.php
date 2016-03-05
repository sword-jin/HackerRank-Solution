<?php

$handle = fopen("php://stdin", "r");
fscanf($handle, "%s", $V);
fscanf($handle, "%n", $n);
$ar = explode(' ', trim(fgets($handle)));

echo array_search($V, $ar);
