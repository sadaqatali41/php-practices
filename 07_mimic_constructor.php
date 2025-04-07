<?php

// ! Constructor mimic is a technique where we can create our own initialisation logic without using __contruct() or making it private to prevent direct instanciation

// ! using Static Factory Methods
// ? Factory methods are static methods that create and return instances of a class. They can have different parameter lists and names, allowing you to simulate multiple constructors based on different initialization scenarios.

class MyClass {
    private $param1;
    private $param2;

    // Private constructor to prevent direct instantiation
    private function __construct($param1 = null, $param2 = null) {
        $this->param1 = $param1;
        $this->param2 = $param2;
    }

    public static function withOneParameter($param1) {
        return new self($param1); //! constructor with one parameter
        // $inst = new self(); // ! using named constructor
        // $inst->param1 = $param1;
        // return $inst;
    }

    public static function withTwoParameters($param1, $param2) {
        return new self($param1, $param2); //! constructor with two parameters
    }

    public function details() {
        $msg = '';
        if($this->param1 && $this->param2) {
            $msg .= 'Hello : ' . $this->param1 . ' && '. $this->param2 . PHP_EOL;
        } else if($this->param1) {
            $msg .= 'Hello : ' . $this->param1 . PHP_EOL;
        } else if($this->param2) {
            $msg .= 'Hello : ' . $this->param2 . PHP_EOL;
        }
        echo $msg;
    }
}

$instance1 = MyClass::withOneParameter('Ali'); //! static factory method
print_r($instance1->details());
$instance2 = MyClass::withTwoParameters('Saif', 'Imran'); //! static factory method
print_r($instance2->details());

// ! example 2 with same method

class User {
    private $name;
    private $email;
    private $age;

    // Private constructor to prevent direct instantiation
    private function __construct($name = null, $email = null, $age = null) {
        $this->name = $name;
        $this->email = $email;
        $this->age = $age;
    }

    // Static factory method for name only
    public static function withName($name) {
        return new self($name); //! constructor with one parameter
    }

    // Static factory method for name and email
    public static function withNameAndEmail($name, $email) {
        return new self($name, $email); //! constructor with two parameters
    }

    // Static factory method for name, email, and age
    public static function withAllDetails($name, $email, $age) {
        return new self($name, $email, $age); //! constructor with three parameters
    }

    // Method to display user details
    public function display() {
        echo "Name: " . $this->name . "\n";
        if ($this->email) {
            echo "Email: " . $this->email . "\n";
        }
        if ($this->age) {
            echo "Age: " . $this->age . "\n";
        }
    }
}

$user1 = User::withName('Sadaqat Ali');
$user2 = User::withNameAndEmail('Sadaqat Ali', 'sadaqatali890@gmail.com');
$user3 = User::withAllDetails('Saif Ali', 'saifali890@gmail.com', 18);

$user1->display();
echo "\n";
$user2->display();
echo "\n";
$user3->display();

