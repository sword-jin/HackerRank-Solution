<?php

$handle = fopen("php://stdin", "r");
fscanf($handle, "%d", $t);
$languages = ['C','CPP','JAVA','PYTHON','PERL','PHP','RUBY','CSHARP','HASKELL','CLOJURE','BASH','SCALA','ERLANG','CLISP','LUA','BRAINFUCK','JAVASCRIPT','GO','D','OCAML','R','PASCAL','SBCL','DART','GROOVY','OBJECTIVEC'];

while ($t --) {
    $s = trim(fgets($handle));

    if (preg_match('/(\d{1,5}) ([A-Z]+)/', $s, $matches)) {
        print_r($matches);
        if ($matches[1] >= 10000 && $matches[1] < 100000 && in_array($matches[2], $languages)) {
            echo "VALID\n";
        } else {
            echo "INVALID\n";
        }
    } else {
        echo "INVALID\n";
    }
}
