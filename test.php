<?php
$gest = 'Hello ';
$hello = fn($str) => $gest . $str;

// echo $hello('Sady');

// ! error to exception
function errorHandler() {
    throw new Exception('Error founded.');
}


set_error_handler('errorHandler');

try {
    echo $undefinedVariable;
} catch (Exception $th) {
    echo $th->getMessage();
}

restore_error_handler();

echo PHP_EOL;

// yeild kewords

function generator($item) {
    foreach($item as $i) {
        yield $i * 2;
    }
}

$arr = [1,2,3,4];

$gen = generator($arr);
foreach($gen as $i) {
    echo $i . PHP_EOL;
}

echo PHP_EOL;

// ! custom error handler

function customErrorHandler() {
    echo 'Custom error handler';
}

set_error_handler('customErrorHandler');

echo $undefinedVariable . PHP_EOL;


function customExceptionHandler($exception) {
    echo 'Custom exception handler : ' . $exception->getMessage();
}

set_exception_handler('customExceptionHandler');
// throw new Exception("Error Processing Request");

// ! constructor mimics using static factory method

class MyClass {
    private $p1;
    private $p2;

    private function __construct($p1 = null, $p2 = null) {
        $this->p1 = $p1;
        $this->p2 = $p2;
    }

    public static function one($p1) {
        return new self($p1);
    }

    public static function two($p1, $p2) {
        return new self($p1, $p2);
    }
}

$instance1 = MyClass::one('One');
$instance2 = MyClass::two('One', 'Two');
