<?php

function insertionSort($arr){
    $times = 0;

    for ($i=1; $i < count($arr); $i++) {
      $val = $arr[$i];
      for ($j=$i - 1; $j >= 0; $j--) {
         if ($val < $arr[$j]) {
            $arr[$j + 1] = $arr[$j];
            $arr[$j] = $val;

            $times ++;
         } else {
            break;
         }
      }
   }

   echo $times . PHP_EOL;
}

$handle = fopen ("php://stdin","r");
$t = fgets($handle);
$arr = split(' ', fgets($handle));

insertionSort($arr);
