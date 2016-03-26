<?php

$handle = fopen("php://stdin", "r");
fscanf($handle, "%d", $t);

$html = '';
while ($t --) {
    $html .= trim(fgets($handle));
}

$tags = [];
$regex = '/(<\s*([\w]+) ?.*?>|\[.*?\])/';

if (preg_match_all($regex, $html, $matches)) {
    foreach ($matches[2] as $g) {
        $tags[] = $g ?: 'a';
    }
}

$tags = array_unique($tags);
sort($tags);

echo implode(";", $tags) . PHP_EOL;
