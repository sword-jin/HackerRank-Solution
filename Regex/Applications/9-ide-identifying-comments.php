<?php

$handle = fopen("php://stdin", "r");
$code = '';

$i = 200;
while ($i --) {
    $code .= trim(fgets($handle)) . "\n";
}

if (preg_match_all('/(\/\*(\s|.)*?\*\/|\/\/[^\n]*)/', $code, $matches)) {
    echo implode("\n", $matches[1]);
}
