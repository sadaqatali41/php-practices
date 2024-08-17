<?php

#first way
function factorial($n) {
    if ($n <= 1) {
        return 1;
    } else {
        return $n * factorial($n - 1); // ! that is called recursion
    }
}

echo factorial(5);

echo PHP_EOL;
// todo: second way

function factSecond($n) {
    $fact = 1;
    for ($i = 1; $i <= $n; $i++) {
        $fact *= $i;
    }
    return $fact;
}

echo factSecond(4);