<?php
// * An empty statement is a statement that does not perform any action and is represented by semicolon (;)

// todo: first question

if($i=10) {
    echo 'hello';
} else {
    echo 'not hello';
}

// todo: second question

$i = 10;
$i = $i++; // return $i value (10), then increment by 1
$i = $i++; // return $i value (10), then increment by 1
echo $i;

$i = 10;
echo ++$i + $i++;

// echo PHP_EOL;
// echo $i;

$i = 10;
$i = ++$i;
$i = ++$i;
$i++ + $i++; // (12 + 13) but not used or stored in this code
// so the sequential incremnents of $i is 14, so the last value will be 14 
echo $i;


for($i=0; $i<=10; $i++){;
    // empty statement
    ;
    echo $i . PHP_EOL;
};

// todo: third question

for($i=0; $i<=10; $i++);
{
    echo $i . PHP_EOL;
}

// ? if you put semicolon (;) right after the `for` loop it will become empty `for` loop due to semicolon (;) and code inside the braces `{}` will be executed only once, not as part of loop.

// empty statement
;

// __autoload
// ! __autoload is magic method used for loading class automatically, it is depreciated in php 7.2 and removed in php 8.0

// PUT vs PATCH
// ! PUT request is used to replace the entire resource with new data. PUT requests are `idempotent`
// ! PATCH request is used to update only specified fields of the resource. PATCH requests are non-idempotent

// final class and final method
// ! final keyword is used to prevent inheritence or overridding of classes and methods
// ! A final class can't be inherited by other class
// ! A final method can't be overridden by child class method

// * example
final class Logger {
    public static function log($message) {
        // Logging implementation
    }
}

// abstract class vs interface (scenario)
// ! An abstract class is a class that cannot be instantiated on its own.
// ! It can be inherited by other classes.
// ! It can contain both abstract and concrete methods.

abstract class Vehicle {
    protected $speed;

    abstract public function accelerate();

    public function getSpeed() {
        return $this->speed;
    }
}

class Car extends Vehicle {
    public function accelerate() {
        $this->speed += 10;
    }
}

$car = new Car();
$car->accelerate();
echo $car->getSpeed(); // Output: 10

// ! An interface is a contract that specifies a set of methods that must be implemented by any class that implements it.
// ! Interface provides full abstraction
// ! Interfaces cannot contain concrete methods.

interface AnimalInterface {
    public function sounds();
}

class Dog implements AnimalInterface {
    public function sounds() {
        echo "Barks" . PHP_EOL;
    }
}

class Cat implements AnimalInterface {
    public function sounds() {
        echo "Meow" . PHP_EOL;
    }
}

$dog = new Dog();
$dog->sounds();

$cat = new Cat();
$cat->sounds();

// hashing vs encryption
// ! hashing
// * 1. hashing is one-way process
// * 2. hashing is irreversible
// * 3. hashing ensures data integrity
// * 4. hashing alorithm like md5(), sh1(), crc32() & password_hash()

// ! encription
// * 1. encryption is two-way process
// * 2. encryption is reversible
// * 3. encryption ensures data confidentiality
// * 4. encryption algorithm like base64_encode(), base64_decode()

// OAuth vs basic auth
// ! Basic auth
// * 1. simple authentication method
// * 2. client provides username and password in each request
// * 3. credentials are sent in base64 encoded
// * 4. less secure and used for simple APIs

// ! OAuth
// * 1. standard authorization framework
// * 2. access token is used to authenticate the request
// * 3. more scalable and secure than Basic auth

// API key vs token
// ! API Key
// * 1. API keys are long-lived and remain valid until revoked.
// * 2. API keys are static strings.
// * 3. less secure.

// ! Token
// * 1. Tokens are short-lived and expire after a certain time.
// * 2. Tokens are generated dynamically for each request or session.
// * 3. more secure than API keys.