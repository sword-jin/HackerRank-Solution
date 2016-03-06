<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d %d %d",$d1,$m1,$y1);
fscanf($handle,"%d %d %d",$d2,$m2,$y2);

$fine = null;

if ($y1 !== $y2) {
    $fine = null ? $fine : 1000;
}

if ($m1 !== $m2) {
    $fine = null ? $fine : 500 * abs($m1 - $m2);
}

if ($d1 !== $d2) {
    $fine = null ? $fine : 15 * abs($d1 - $d2);
}

echo $fine . PHP_EOL;
