<?php
// dynamic binding or late binding
// Dynamic binding happens at runtime and is resolved based on the object that is calling the method. It is used with instance methods and properties.

// dynamic binding example

class Animal {
    public function makeSound() {
        echo 'Animal Shound' . PHP_EOL;
    }
}

class Dog extends Animal {
    public function makeSound() {
        echo 'Bark' . PHP_EOL;
    }
}

class Cat extends Animal {
    public function makeSound() {
        echo 'Meow' . PHP_EOL;
    }
}

class Horse extends Animal {
    public function makeSound() {
        echo 'Hurr' . PHP_EOL;
    }
}

function makeAnimalSound(Animal $animal) {
    $animal->makeSound();
}

$dog = new Dog();
$cat = new Cat();
$horse = new Horse();

makeAnimalSound($dog);


// ! summary

// * Static Binding: Resolved at compile time using the class where methods/properties are defined. Suitable for static methods/properties.
// * Dynamic Binding: Resolved at runtime based on the object instance. Suitable for instance methods/properties.