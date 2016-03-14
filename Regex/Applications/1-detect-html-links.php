<?php

$handle = fopen("php://stdin", "r");
fscanf($handle, "%d", $t);

$html = '';
while ($t --) {
    $html .= trim(fgets($handle));
}

if (preg_match_all('/<a .*?href="(.*?)".*?>(.*?)<\/a>/', $html, $matches)) {
    foreach ($matches[1] as $i => $link) {
        printf("%s,%s\n", $link, trim(strip_tags($matches[2][$i])));
    }
}
