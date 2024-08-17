<?php

#first question
function primeOrNot($num) : int {
    if($num < 2) return -1;
    $bool = true;
    for($i = 2; $i < $num; $i++) {
        if($num % $i === 0) {
            $bool = false;
            return 0;
        }
    }
    $sum = 0;
    if($bool) {
        for($i = 1; $i <= $num; $i++) {
            $sum += $i;
        }
    }
    return $sum;
}

// echo primeOrNot(13);

#second question
function findMinMaxSum($n, $arr, $k) {
    $oldArr = $arr;
    array_splice($arr, 0, $k);
    $maxNum = array_sum($arr);

    array_splice($oldArr, -$k, $k);

    $minNum = array_sum($oldArr);

    return $maxNum . ':' . $minNum;
}
$array = [1,1,1,1,1,1];
$count = sizeof($array);
$k = 3;
print_r(findMinMaxSum($count, $array, $k));


// ! some PHP usefull array functions
// * array_map(myfunction, arrray);
// * array_reduce(array, myfunction, initial)
// * array_filter(array, callbackfunction, flag)
// * array_walk(array, myfunction, parameter...)
// * array_flip(array)