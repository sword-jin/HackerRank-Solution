<?php

$handle = fopen("php://stdin", "r");
fscanf($handle, "%d %d", $N, $Q);

$xml = "<root>\n";
while ($N --) {
    $xml .= fgets($handle);
}
$xml .= "</root>";
$parser = new SimpleXMLElement($xml);

while ($Q --) {
    $query = trim(fgets($handle));
    $pos = strpos($query, '~');

    if ($pos !== false) {
        $path = '/root/' . join('/', explode('.', substr($query, 0, $pos)));
        $attribute = substr($query, $pos + 1);

        $results = $parser->xpath($path);
        if (count($results) == 0) {
            echo "Not Found!\n";
        } else {
            foreach ($results as $node) {
                if ($node->attributes()->$attribute != null) {
                    echo $node->attributes()->$attribute . PHP_EOL;
                } else {
                    echo "Not Found!\n";
                }
            }
        }
    } else {
        echo "Not Found!\n";
    }
}
