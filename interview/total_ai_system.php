<?php

function is_palindrome($num) {
    $str = strval($num);
    return $str === strrev($str);
}
function findPalindrome(int $number, int $count) : iterable {

    $palindromes = [];

    while(count($palindromes) < $count) {
        if(is_palindrome($number)) {
            $palindromes[] = $number;
        }
        $number++;
    }

    return $palindromes;
}

foreach(findPalindrome(161, 3) as $key => $number) {
    echo $number . PHP_EOL;
}