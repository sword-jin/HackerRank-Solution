<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$h);
fscanf($handle,"%s",$m);

$time = [
    1 => 'one',
    2 => 'two',
    3 => 'three',
    4 => 'four',
    5 => 'five',
    6 => 'six',
    7 => 'seven',
    8 => 'eight',
    9 => 'nine',
    10 => 'ten',
    11 => 'eleven',
    12 => 'twelve',
    13 => 'thirteen',
    14 => 'fourteen',
    15 => 'fifteen',
    16 => 'sixteen',
    17 => 'seventeen',
    18 => 'eighteen',
    19 => 'nineteen',
    20 => 'twenty'
];

function _next($a) {
    return $a == 12 ? 1 : $a + 1;
}

$minutes = function($a) use ($time) {
    if ($a > 20) {
        return $time[20] . ' ' . $time[(int) ($a % 10)];
    }

    return $time[$a];
};

if ($m == 0) {
    echo $time[$h] . ' o\' clock' . PHP_EOL;
} else if ($m == 1) {
    echo $time[(int)$m] . ' minute past ' . $time[$h] . PHP_EOL;
} else if ($m == 15) {
    echo 'quarter past ' . $time[$h] . PHP_EOL;
} else if ($m < 30) {
    echo $minutes((int)$m) . ' minutes past ' . $time[$h] . PHP_EOL;
} else if ($m == 30) {
    echo 'half past ' . $time[$h] . PHP_EOL;
} else if ($m == 31) {
    echo $minutes(60 - (int)$m) . ' minute to ' . $time[_next($h)] . PHP_EOL;
} else if ($m == 45) {
    echo 'quarter to ' . $time[_next($h)] . PHP_EOL;
} else {
    echo $minutes(60 - (int)$m) . ' minutes to ' . $time[_next($h)] . PHP_EOL;
}
