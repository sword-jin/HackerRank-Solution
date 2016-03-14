<?php

$handle = fopen("php://stdin", "r");

$code = '';
$t = 1000;
while ($t --) {
    $code .= trim(fgets($handle)) . "\n";
}

$regex_c = '/#include/';
$regex_java = '/import java/';

if (preg_match($regex_c, $code)) {
    echo "C\n";
}  else if (preg_match($regex_java, $code)) {
    echo "Java\n";
} else {
    echo "Python\n";
}
