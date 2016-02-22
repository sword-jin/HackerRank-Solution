<?php

$handle = fopen ("php://stdin", "r");
fscanf($handle, "%s", $time);

$flag = substr($time, -2, 2);
$hour = substr($time, 0, 2);
$rest = substr($time, 2, -2);

if ($flag == 'PM' && (int) $hour < 12) {
    echo (int) $hour + 12 . $rest;
} else if ($flag == 'AM' && (int) $hour == 12) {
    echo '00' . $rest;
} else {
    echo $hour . $rest;
}

// if ($flag == 'PM') {
//     if ($hour == 0 || $hour == 12) {
//         echo '12' . $rest;
//     } else {
//         echo (int) $hour + 12 . $rest;
//     }
// } else {
//     if ($hour == 12) {
//         echo '00' . $rest;
//     } else {
//         echo $hour . $rest;
//     }
// }
