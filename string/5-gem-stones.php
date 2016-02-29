<?php

$handle = fopen("php://stdin", "r");
fscanf($handle, "%d", $N);

for ($i=0; $i < 26; $i++) {
    $some[$i] = 0;
}

for ($i=0; $i < $N; $i++) {
    fscanf($handle, "%s", $str);

    for ($j=0; $j < strlen($str); $j++) {
        if ($some[ord($str[$j]) - ord('a')] == $i) {
            $some[ord($str[$j]) - ord('a')] ++;
        }
    }
}

$count = 0;
for ($i=0; $i < 26; $i++) {
    if ($some[$i] == $N) $count ++;
}

echo $count . PHP_EOL;
