<?php
// static binding or early binding
// Static binding happens at compile time. It resolves methods and properties using the class where they are defined, not where they are inherited from.
// Static binding is used when you want to call a method or access a property of a class,
// but you don't want to use the class name as a prefix for the method or property name

class ParentClass {
    public static function staticMethod() {
        echo __CLASS__;
    }

    public static function callStaticMethod() {
        static::staticMethod(); // * late static binding
    }
}

class ChildClass extends ParentClass {
    public static function staticMethod() {
        echo __CLASS__;
    }
}

ChildClass::callStaticMethod();

// ! example 2 for static binding

class Animal {
    public static function sound() {
        return "Animal sound";
    }
}

class Dog extends Animal {
    public static function sound() {
        return "Bark";
    }
}

$animal = 'Dog';
echo $animal::sound(); // Output: Bark
