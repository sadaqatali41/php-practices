<?php

// ! A generator is a special function in PHP that allows the developer to create an iterator that can be used to iterate over a set of values. Generators are created using the yield keyword, which allows the generator function to pause execution and return a value to the caller. The generator function can then be resumed at a later time, allowing the developer to iterate over the values returned by the generator.

// * The heart of a generator function is the yield keyword.
// * Any function containing yield is a generator function.

function a($items) {
    foreach($items as $key => $item) {
        yield $key => $item + 1;
    }
}

$items = [1,2,3,4];

// $generator = a($items);
foreach(a($items) as $key => $val) {
    echo $key . '=>' . $val . PHP_EOL;
}
