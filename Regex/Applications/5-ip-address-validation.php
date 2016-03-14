<?php

$handle = fopen("php://stdin", "r");
fscanf($handle, "%d", $t);

$ip4_regex = '/^(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?).){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/';
$ip6_regex = '/^(?:[a-fA-F0-9]{1,4}:){7}[a-fA-F0-9]{1,4}$/';

while ($t --) {
    fscanf($handle, "%s", $str);

    if (preg_match($ip4_regex, $str)) {
        printf("IPv4\n");
    } else if (preg_match($ip6_regex, $str)) {
        printf("IPv6\n");
    } else {
        printf("Neither\n");
    }
}
