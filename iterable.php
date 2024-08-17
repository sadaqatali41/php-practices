<?php

// ? An iterable is any value which can be looped through with a foreach() loop.
// ? The iterable keyword can be used as a data type of a function argument or as the return type of a function:
// ? All arrays are iterables, so any array can be used as an argument of a function that requires an iterable.

// ! iterable as an argument
function printIterable(iterable $myIterable) {
    foreach($myIterable as $item) {
      echo $item . " ";
    }
}
  
$arr = ["a", "b", "c"];
printIterable($arr);

// ! iterable as a return type

function getIterable():iterable {
    return ["a", "b", "c"];
}
  
$myIterable = getIterable();
foreach($myIterable as $item) {
    echo $item . ' ';
}