<?php

$alto = intval(readline("cual es la altura de tu arbol?")); 

function makeTree($alto) {
    $bool = true;
    for($i = 1; $i <= $alto; $i++) {
        if($bool){
            echo str_repeat(" ", $alto - $i);
            echo str_repeat("*", (2 * $i - 1));
            echo PHP_EOL;
            echo str_repeat(" ", $alto - ($i + 2));
            echo str_repeat("*", 5);
            echo PHP_EOL;
            echo str_repeat(" ", $alto - ($i + 1));
            echo "* *";
            echo PHP_EOL;
            $bool = false;
        }
        echo str_repeat(" ", $alto - $i);
        echo str_repeat("*", (2 * $i - 1));
        echo PHP_EOL;
    }
    echo str_repeat(" ", $alto - 2);
    echo "|||";
    echo PHP_EOL;
}

//     *
//   *****
//    * *
function makeStar($alto) {
    echo str_repeat(" ", $alto - 1);
    echo str_repeat("*", (2 * 1 - 1));
    echo PHP_EOL;
    echo str_repeat(" ", $alto - 1);
    echo str_repeat("*", (2 * 1 - 1));
    echo PHP_EOL;
}


makeTree($alto);