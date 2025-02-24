<?php

$st = microtime(true);
$a = 1;
while($a < 20) {
    $a++;
}
$end = microtime(true);
echo $end - $st;