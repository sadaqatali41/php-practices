<?php

function findSumNumber(string $string) {
    $pattern = '/[^0-9]/';

    $numString = preg_replace($pattern, '', $string);
    $sum = 0;
    for($i = 0; $i < strlen($numString); $i++) {
        $sum += intval($numString[$i]);
    }
    return $sum;
}

echo findSumNumber('hello 5 ali 4 sady 1 and 9 others');