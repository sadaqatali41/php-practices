<?php

// ! traits :- 
// ? 1. traits are a mechanism for code reuse. 
// ? 2. traits can have abstract and non-abstract methods with public, private, protected
// ? 3. traits can have properties also

// * traits precedence
// 1. class method override traits method
// 2. traits method override parent class method
// 3. Multiple Traits with Same method Name - has to use 'insteadof' keyword with 'as' 

// ! example 1 (class method override trait method)

trait Aa {
    public function sayHello() {
        echo 'Hello from Trait A';
    }
}

class TestClass {
    use Aa;
    public function sayHello() {
        echo 'Hello from : ' . __CLASS__;
    }
}

$obj = new TestClass();

// $obj->sayHello();

// ! example 2 (trait method override parent class method)

class BaseClass {
    public function sayHello() {
        echo "Hello from ". __CLASS__ ."\n";
    }
}

trait TraitA {
    public function sayHello() {
        echo "Hello from TraitA\n";
    }
}

class MyClass extends BaseClass {
    use TraitA;
}

$object = new MyClass();
$object->sayHello();


// ! example 3 (traits name conflict)

trait TraitsA {
    public function hi() {
        echo 'Hi from TraitsA' . PHP_EOL;
    }
}
trait TraitsB {
    public function hi() {
        echo 'Hi from TraitsB' . PHP_EOL;
    }
}

class ConflictClass {
    use TraitsA, TraitsB {
        TraitsA::hi insteadof TraitsB;
        TraitsB::hi as hiFromTraitB;
    }
}

$cnf = new ConflictClass;

$cnf->hi();
$cnf->hiFromTraitB();