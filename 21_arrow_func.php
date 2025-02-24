<?php
$str = "Hello World";
$hello = fn($a) => $str . $a;

echo $hello('!');

echo PHP_EOL;

$double = fn($n) => $n * 2;
echo $double(5);