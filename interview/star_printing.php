<?php

for($i = 1; $i <= 5; $i++) {
    for($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "\n";
}

echo "\n";

for($i = 5; $i >= 1; $i--) {
    for($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "\n";
}

for($i = 1; $i <= 5; $i++) {
    for($j = 1; $j <= 5 - $i; $j++) {
        echo " ";
    }
    for($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "\n";
}

echo "\n";

for($i = 5; $i >= 1; $i--) {
    for($j = 1; $j <= 5 - $i; $j++) {
        echo " ";
    }
    for($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "\n";
}

echo "\n";

// create a pyramid pattern
for($i = 1; $i <= 5; $i++) {
    for($j = 1; $j <= 5 - $i; $j++) {
        echo " ";
    }
    for($j = 1; $j <= (2 * $i - 1); $j++) {
        echo "*";
    }
    echo "\n";
}