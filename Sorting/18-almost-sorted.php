<?php

$handle = fopen("php://stdin", "r");
fscanf($handle, "%d", $n);

$origin = array_map('intval', explode(' ', trim(fgets($handle))));
$sorted = $origin;
sort($sorted);

$diff = [];
for ($i=0; $i < $n; $i++) {
    if ($origin[$i] != $sorted[$i]) {
        $diff[] = $i;
    }
}

$count = count($diff);

//sorted
if ($count == 0) {
    echo "yes\n";
} else if ($count == 2 && // swap
    $sorted[$diff[0]] == $origin[$diff[1]] &&
    $sorted[$diff[1]] == $origin[$diff[0]]) {
    printf("yes\nswap %d %d\n", $diff[0] + 1, $diff[1] + 1);
} else if ($count > 2) {
    $reverse = false;
    for ($i=0; $i < $count; $i++) {
        if ($sorted[$diff[$i]] == $origin[$diff[$count - 1 - $i]]) {
            $reverse = true;
        } else {
            $reverse = false;
            break;
        }
    }
    if ($reverse) {
        printf("yes\nreverse %d %d\n", $diff[0] + 1, $diff[$count - 1] + 1);
    } else {
        echo "no\n";
    }
}
