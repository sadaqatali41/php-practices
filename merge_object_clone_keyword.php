<?php
// ! The clone keyword is used to create a copy of an object.

function merge_objects($obj1, $obj2) {
    $merged = clone $obj1;

    foreach ($obj2 as $key => $value) {
        $merged->$key = $value;
    }

    return $merged;
}

$obj1 = (object) ['a' => 1, 'b' => 2];
$obj2 = (object) ['b' => 3, 'c' => 4, 'd' => 5];

$merged = merge_objects($obj1, $obj2);
print_r($merged);
