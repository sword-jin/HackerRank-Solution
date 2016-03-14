<?php

function insertionSort(&$arr){
   for ($i=1; $i < count($arr); $i++) {
      $val = $arr[$i];
      for ($j=$i - 1; $j >= 0; $j--) {
         if ($val < $arr[$j]) {
            $arr[$j + 1] = $arr[$j];
            $arr[$j] = $val;
         } else {
            break;
         }
      }
   }
}

$handle = fopen ("php://stdin","r");
$t = fgets($handle);
$arr = split(' ', fgets($handle));

insertionSort($arr);

foreach($arr as $value) {
  print $value." ";
}
