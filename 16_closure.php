<?php

// ! A closure in PHP, is an anonymous function that can be stored in a variable or passed as an argument to other functions
// ! The `use` keyword in closures is used to bring variables from the outer scope into the closure's scope, allowing the closure to access and manipulate these variables even after the outer scope has finished execution.

$greeting = "Hello";

$closure = function($name) use ($greeting) {
    echo $greeting . ', ' . $name;
};

$closure('Sadaqat Ali');

// todo: example by passing by reference

$count = 0;

$increment = function() use (&$count) {
    $count++;
};

$increment();
echo $count;
echo PHP_EOL;
$increment();
echo $count;
echo PHP_EOL;

// * closure as a parameter
$tot = 0;

$callback = function($value, $key) use (&$tot) {
    $tot += $value;
};

$ele = [1,2,3,4,5,6];
array_walk($ele, $callback);

echo 'Total Value : ' . $tot;