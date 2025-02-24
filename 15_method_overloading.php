<?php

// ! In PHP, method overloading refers to the ability to define multiple methods with the same name but different parameters. PHP does not support method overloading, but we can achieve this by using some PHP magic methods

// * __call() – triggered while invoking overloaded methods in the object context.
// * __callStatic() – triggered while invoking overloaded methods in static context.

// * The above methods are called when invoking methods that are inaccessible or not defined within the class.

class MyClass {

    public function __call($method, $args) {
        echo "Calling object method '$method' with arguments " . count($args);
    }

    public static function __callStatic($method, $args) {
        echo "Calling static method '$method' with arguments " . count($args);
    }

    public function lineBreak() {
        echo PHP_EOL;
    }
}

$obj = new MyClass();
$obj->runTest('in object context', 'hello', 'test');
$obj->lineBreak();
MyClass::runTest('in static context');