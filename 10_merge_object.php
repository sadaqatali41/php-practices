<?php
// PHP program to merge two objects

class Geeks {
	// Empty class
}

$objectA = new Geeks();
$objectA->a = 1;
$objectA->b = 2;
$objectA->d = 3;

$objectB = new Geeks();
$objectB->d = 4;
$objectB->e = 5;
$objectB->f = 6;

$obj_merged = (object) array_merge((array) $objectA, (array) $objectB);
		
print_r($obj_merged);

