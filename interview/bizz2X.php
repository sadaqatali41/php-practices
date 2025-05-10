<?php

// Question 1
$arr = ['name' => 'Biz2X'];
//echo 'Hi! ' . $arr->name; // This will cause an error because $arr is an array, not an object.
echo 'Hi! ' . $arr['name']; // This will work correctly.

echo PHP_EOL;

// Question 2
$x = 5;
echo $x++;
echo ++$x;
echo $x--;
echo --$x;

echo PHP_EOL;

// Question 3
// 1 
// 1 2 1 
// 1 2 3 2 1 
// 1 2 3 4 3 2 1

function printPattern($n) {
    for ($i = 1; $i <= $n; $i++) {
        // Print increasing numbers
        for ($j = 1; $j <= $i; $j++) {
            echo $j . " ";
        }
        // Print decreasing numbers
        for ($j = $i - 1; $j >= 1; $j--) {
            echo $j . " ";
        }
        echo "\n"; // Move to the next line after each row
    }
}

// printPattern(4); // Change the number to print more or fewer rows

echo PHP_EOL;

// lets check another way to print the pattern

for($i = 1; $i <= 4; $i++) {
    for($j = 1; $j <= $i; $j++) {
        echo $j . " ";
    }
    for($k = $j-2; $k >= 1; $k--) {
        echo $k . " ";
    }
    echo "\n";
}

// SQL question
// select student_id, sum(marks) AS tot_mark from exam_marks where 1=1 group by student_id order by tot_mark desc limit 0,3

// ! 2nd round interview question

// $arr = [1,3,4,2];
// find the second largest number in the array

function findSecondLargest($arr) {
    if (count($arr) < 2) {
        return null; // Not enough elements
    }

    $first = $second = PHP_INT_MIN;
    // $first = $second = $arr[0];
    
    foreach ($arr as $num) {
        if ($num > $first) {
            $second = $first;
            $first = $num;
        } elseif ($num > $second && $num != $first) {
            $second = $num;
        }
    }
    
    return $second;
}

$arr = [10, 20, 4, 45, 99, 46, 99];
$secondLargest = findSecondLargest($arr);
echo "The second largest number is: " . $secondLargest . PHP_EOL;

// find the second lowest number in the array
function findSecondLowest($arr) {
    if (count($arr) < 2) {
        return null; // Not enough elements
    }

    $first = $second = PHP_INT_MAX;
    
    foreach ($arr as $num) {
        if ($num < $first) {
            $second = $first;
            $first = $num;
        } elseif ($num < $second && $num != $first) {
            $second = $num;
        }
    }
    
    return $second;
}

$secondLowest = findSecondLowest($arr);
echo "The second lowest number is: " . $secondLowest . PHP_EOL;


// Find nth largest number in the array
$arr = [1,4,3,5,2,6];

function findNthLargest($arr, $nth){
    // if array contains duplicates, remove them
    $n = count($arr);

    if($nth > $n) {
        return null;
    }

    // sort the array in descending order
    for($i = 0; $i < $n - 1; $i++) {
        for($j = $i + 1; $j < $n; $j++) {
            if($arr[$j] > $arr[$i]) {
                $temp = $arr[$i];
                $arr[$i] = $arr[$j];
                $arr[$j] = $temp;
            }
        }
    }
    return $arr[$nth - 1];
}
$nthLargest = findNthLargest($arr, 2);
echo "The 2nd largest number is: " . $nthLargest . PHP_EOL;