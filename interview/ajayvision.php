<?php

// ! Question 1 : Columns in Excel are named A,B,C...Z and AA, AB,AC...AZ and BA,BB,...BZ and so on. Given a string containing column name S as appear in an excel sheet, write a program to return its corresponding column number in PHP.

function excelColumnToNumber($columnName) : int {
    $length = strlen($columnName);
    $result = 0;

    for($i = 0; $i < $length; $i++) {
        $result *= 26;
        $result += ord($columnName[$i]) - ord('A') + 1;
    }
    return $result;
}
$columnName = 'AB';
echo excelColumnToNumber($columnName);
echo PHP_EOL;

// ! Question 2 : Given a string S, find the longest palindrome substring in S. Incase there are two or more substrings of same length, return the substring which occurs first (with the least starting index) in PHP.

function longestPalindrome($s): string {
    $n = strlen($s);
    if ($n < 2) {
        return $s;
    }

    $start = 0;
    $maxLength = 1;

    function expandAroundCenter($s, $left, $right) {
        while ($left >= 0 && $right < strlen($s) && $s[$left] == $s[$right]) {
            $left--;
            $right++;
        }
        return $right - $left - 1;
    }

    for ($i = 0; $i < $n; $i++) {
        // Check for odd-length palindromes
        $len1 = expandAroundCenter($s, $i, $i);

        // Check for even-length palindromes
        $len2 = expandAroundCenter($s, $i, $i + 1);

        // Get the maximum length palindrome centered at index i
        $len = max($len1, $len2);

        // Update the start and maxLength if a longer palindrome is found
        if ($len > $maxLength) {
            $start = $i - intval(($len - 1) / 2);
            $maxLength = $len;
        }
    }

    return substr($s, $start, $maxLength);
}

$input = "babad";
echo longestPalindrome($input);
echo PHP_EOL;

// ! Question 3 : Mahesh is given a box of chocolates having unique numbers between 1 to N. All chocolates are arranged in ascending order of their number. A friend has stolen one of the chocolate from the box. Given the array of size n-1, consisting of unique numbers from 1 to N(max value). Find the missing chocolate in the box using PHP.

function findMissingChocolate($arr, $N) {
    // Sum of numbers from 1 to N (inclusive)
    $totalSum = ($N * ($N + 1)) / 2;

    // Sum of numbers in the given array
    $arraySum = array_sum($arr);

    // The missing number is the difference between the total sum and array sum
    return $totalSum - $arraySum;
}

// Example usage:
$N = 5;  // Max value of chocolates (numbers from 1 to N)
$arr = [1, 2, 4, 5];  // Chocolate array with one missing number
echo findMissingChocolate($arr, $N);  // Output: 3