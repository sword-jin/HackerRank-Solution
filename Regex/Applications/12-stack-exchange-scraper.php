<?php

$handle = fopen("php://stdin", "r");

$html = '';
$t = 3600;
while ($t --) {
    $html .= trim(fgets($handle)) . "\n";
}

preg_match_all('/(?:<h3><a href="\/questions\/(\d*).*>(.*)<\/a>|class="relativetime">(.*)<\/span>)/', $html, $matches);

for ($i = 0; $i < count($matches[0]) / 2; $i ++) {
    printf("%s;%s;%s\n", $matches[1][$i * 2], $matches[2][$i * 2], $matches[3][($i + 1) * 2 - 1]);
}
