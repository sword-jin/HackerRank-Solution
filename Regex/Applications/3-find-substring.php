<?php

$handle = fopen("php://stdin", "r");
fscanf($handle, "%d", $t);

while ($t --) {
    $lines[] = trim(fgets($handle));
}

fscanf($handle, "%d", $n);

while ($n --) {
    $count = 0;
    fscanf($handle, "%s", $pattern);
    $regex = "/[0-9a-zA-Z_]+" . $pattern . "[0-9a-zA-Z_]+/";
    foreach ($lines as $line) {
        foreach (explode(" ", $line) as $word) {
            if (preg_match($regex, $word)) {
                $count ++;
            }
        }
    }

    echo $count . PHP_EOL;
}
