<?php

$handle = fopen("php://stdin", "r");
fscanf($handle, "%d", $n);

$arr = explode(' ', trim(fgets($handle)));
sort($arr);

echo $arr[floor($n / 2)];
