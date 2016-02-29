<?php

$handle = fopen("php://stdin", "r");
fscanf($handle, "%d", $T);

while ($T --) {
    fscanf($handle, "%s", $str1);
    fscanf($handle, "%s", $str2);

    // one
    // $exists = false;
    // $letter = [];
    // for ($i=0; $i < 26; $i++) {
    //     $letter[$i] = 0;
    // }

    // for ($i=0; $i < strlen($str1); $i++) {
    //     $letter[ord($str1[$i]) - ord('a')] ++;
    // }

    // for ($i=0; $i < strlen($str2); $i++) {
    //     $index = ord($str2[$i]) - ord('a');

    //     if ($letter[$index] != 0) {
    //         $exists = true;
    //         break;
    //     }
    // }

    // two
    $exists = false;

    foreach (range('a', 'z') as $letter) {
        if (strpos($str1, $letter) !== false && strpos($str2, $letter) !== false) {
            $exists = true;
            break;
        }
    }

    echo $exists ? "YES\n" : "NO\n";
}
