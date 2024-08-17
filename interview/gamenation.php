<?php

$fp = fopen('data.txt', 'r', true);
$nameArray = [];
while($name = fgets($fp)) {
    $key = strlen(trim($name)) . '_' . uniqid();
    $value = trim($name);
    
    $nameArray[$key] = $value;
}
krsort($nameArray);

print_r($nameArray);