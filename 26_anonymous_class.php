<?php

// An anonymous class in PHP is a class that has no name, It is instantiated on the fly and is useful when you need one time use object.

// 1. Basic example

$obj = new class {
    public function greet() {
        return "Hello from Anonymous Class! \n";
    }
};
echo $obj->greet();

// 2. Implementing an Interface with an Anonymous Class

interface Logger {
    public function log($message);
}

$logger = new class implements Logger {
    public function log($message) {
        echo "Logging: " . $message . "\n";
    }
};

$logger->log('User Logged in');

// 3. Extending an Existing Class

class Base {
    public function sayHello() {
        return "Hello from Base class! \n";
    }
}

$obj = new class extends Base {
    public function sayHi() {
        return "Hi from Anonymous Class! \n";
    }
};
echo $obj->sayHello();
echo $obj->sayHi(); 

// 4. Using Anonymous class inside a function

function getGreeter() {
    return new class {
        public function greet() {
            return "Hello from Function! \n";
        }
    };
}

$greeter = getGreeter();
echo $greeter->greet();