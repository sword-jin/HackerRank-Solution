<?php

$handle = fopen("php://stdin", "r");
fscanf($handle, "%d", $t);
$regex_1 = '/<([a-zA-Z0-9]+) ?(?:\w*="?\'?[^"\']*\'?"? ?){0,}/';
$regex_2 = '/ (\w*)=/';

$code = [];

while ($t --) {
    $code[] = trim(fgets($handle));
}

$tags = [];

foreach ($code as $c) {
    if (preg_match_all($regex_1, $c, $matches_1)) {
        for ($i = 0; $i < count($matches_1[0]); $i ++) {
            if (strpos($matches_1[0][$i], '=') !== false) {
                preg_match_all($regex_2, $matches_1[0][$i], $matches_2);

                foreach ($matches_2[1] as $attr) {
                    if (! isset($tags[$matches_1[1][$i]])) {
                        $tags[$matches_1[1][$i]][] = $attr;
                    } else {
                        if (! in_array($attr, $tags[$matches_1[1][$i]])) {
                            $tags[$matches_1[1][$i]][] = $attr;
                        }
                    }
                }
            } else {
                if (! isset($tags[$matches_1[1][$i]])) {
                    $tags[$matches_1[1][$i]] = [];
                }
            }
        }
    }
}

ksort($tags);

foreach ($tags as $tag => $attributes) {
    sort($attributes);

    printf("%s:%s\n", $tag, implode(',', $attributes));
}
