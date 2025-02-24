<?php

// Cross-site scripting (or XSS) allows an attacker to execute arbitrary JavaScript within the browser of a victim user.

// Cross-site request forgery (or CSRF) allows an attacker to induce a victim user to perform actions that they do not intend to.

// Cross-Site Request Forgery (CSRF) is an attack that forces an end user to execute unwanted actions on a web application in which they’re currently authenticated.

// A CSRF (Cross-Site Request Forgery) token is also known as synchronizer token or challenge token, that verifies the authenticity of requests made by a user.

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