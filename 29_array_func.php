<?php

// Indexed Arrays: Arrays with numeric indices (0, 1, 2, etc.).
// Associative Arrays: Arrays where keys are named (string or integer).
// Multidimensional Arrays: Arrays containing one or more arrays.

$arr = [1,2,3,4,5,6,7,8,9,10];
$arr1 = [11,12,13,14,15,16,17,18,19,20];

// create associative array with multiple keys and values
$assocArr = [
    'name' => 'John',
    'age' => 30,
    'city' => 'New York',
    'hobbies' => ['reading', 'traveling', 'sports']
];

$merged = array_merge($arr, $arr1);

// print_r($merged);

$evenArr = array_filter($arr, function($value) {
    return $value % 2 == 0;
});

// print_r($evenArr);

$sliced = array_slice($arr, 1, 2); 

// print_r($sliced);

$squared = array_map(function($value) {
    return $value * $value;
}, $arr);

// print_r($squared);

$reversed = array_reverse($arr);

// print_r($reversed);

$sum = array_reduce($arr, function($carry, $item) {
    return $carry + $item;
}, 0);

// print_r($sum);

$assoc = array_flip($arr);

// print_r($assoc);

// How to get random value from array
$randomValue = $arr[array_rand($arr)];

// print_r($randomValue);

// How to change all values of an array to uppercase/lowercase?
$arr2 = ['apple', 'banana', 'cherry', 'date', 'elderberry'];
$upperCaseArr = array_map('strtoupper', $arr2);
$lowerCaseArr = array_map('strtolower', $arr2);

// print_r($upperCaseArr);
// print_r($lowerCaseArr);

// How to remove a specific value from an array?
$arr3 = ['apple', 'banana', 'cherry', 'date', 'elderberry'];
$removeValue = 'cherry';
$arr3 = array_diff($arr3, [$removeValue]);

// print_r($arr3);

// How to use array_walk to apply a function to each element of an array?
$arr4 = ['apple', 'banana', 'cherry', 'date', 'elderberry'];
array_walk($arr4, function(&$value, $key) {
    $value = strtoupper($value) . " (key: $key)";
});

// print_r($arr4);

// What does the following PHP code output, and why?

$array = [1, 2, 3, 4, 5];
foreach ($array as &$value) {
    $value *= 2;
}
unset($value);
$result = array_map(function($v) { return $v - 1; }, $array);
// echo implode(", ", $result);