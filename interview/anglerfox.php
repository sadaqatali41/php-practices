<?php

// ! find most repeating characters in the string eg. qwertyqqq => output - q

function getChar($str) {
    $arr = str_split($str);

    $values = array_count_values($arr);

    arsort($values);
    $keys = array_keys($values);

    return $keys[0];
}
$str = 'qwertyqqq';

print_r(getChar($str));

echo PHP_EOL;

// ! given input1 = 'abcd' and input2 = '1234' output like 2a*4b*6c*8d


function concatString($input1, $input2) {
    $output = '';

    $len = strlen($input1);
    $len2 = strlen($input2);

    if($len !== $len2) {
        return 'invalid string';
    }

    for($i = 0; $i < $len; $i++) {
        $prefix = (2 * $input2[$i]) . $input1[$i] . '*';

        $output .= $prefix;
    }

    return rtrim($output, '*');
}

$input1 = 'abcd';
$input2 = '1234';

echo concatString($input1, $input2);


// sort() - sort arrays in ascending order
// rsort() - sort arrays in descending order
// asort() - sort associative arrays in ascending order, according to the value
// ksort() - sort associative arrays in ascending order, according to the key
// arsort() - sort associative arrays in descending order, according to the value
// krsort() - sort associative arrays in descending order, according to the key