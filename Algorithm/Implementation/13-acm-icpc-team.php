<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d %d",$n,$m);
$topic = array();
for($topic_i = 0; $topic_i < $n; $topic_i++) {
   fscanf($handle,"%s",$topic[]);
}

// timeout haha...
// $length = strlen($topic[0]);
// $highest = -1;
// $bestTeams = 0;

// for ($i=0; $i < $n - 1; $i++) {
//     for ($j=$i + 1; $j < $n; $j++) {
//         $know = 0;
//         for ($x=0; $x < $length; $x++) {
//             $know += $topic[$i][$x] | $topic[$j][$x];
//         }
//         if ($know > $highest) {
//             $highest = $know;
//             $bestTeams = 1;
//         } else if ($know == $highest) {
//             $bestTeams += 1;
//         }
//     }
// }

// echo $highest . PHP_EOL;
// echo $bestTeams . PHP_EOL;


// just soso..
// $highest = -1;
// $bestTeam = 0;

// for ($i=0; $i < $n - 1; $i++) {
//     for ($j=$i + 1; $j < $n; $j++) {
//         $temp = substr_count($topic[$i] | $topic[$j], "1");
//         if ($temp > $highest) {
//             $highest = $temp;
//             $bestTeam = 1;
//         } else if ($temp == $highest) {
//             $bestTeam ++;
//         }
//     }
// }

// echo $highest . PHP_EOL;
// echo $bestTeam . PHP_EOL;

 $highest = -1;
 $bestTeam = 0;
 $n = $topic;
 for ($i=0; $i < count($n) - 1; $i++) {
     for ($j=$i + 1; $j < count($n); $j++) {
         $temp = substr_count($topic[$i] | $topic[$j], "1");
         if ($temp > $highest) {
             $highest = $temp;
             $bestTeam = 1;
         } else if ($temp == $highest) {
             $bestTeam ++;
         }
     }
 }
 return [$highest,$bestTeam];
