<?php

$fp = fopen("php://stdin", "r");
$n = fgets($fp);
$s = "";
for(;$n>0;$n-=1)
    $s.=fgets($fp);

$s = preg_replace("/(ww[w2-9]\.)/", "", $s);
preg_match_all("/https?:\/\/([a-z0-9._\-]+)/", $s, $m);

foreach($m[1] as $v) {
  if(!preg_match("/[a-z0-9_\-]+\.[a-z]+$/", $v))
    continue;
  $arr[] = $v;
}
$arr = array_unique($arr);
sort($arr);
echo implode(";", $arr);
