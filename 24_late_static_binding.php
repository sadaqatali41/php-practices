<?php

// ! Late static binding is a feature in PHP that allows a class's static methods and properties to reference the calling class's context at runtime, rather than the context of where the method was defined.

class ParentClass {
    protected static $name = "ParentClass";

    public static function getName() {
        return static::$name;
    }
}

class ChildClass extends ParentClass {
    protected static $name = 'ChildClass';
}

echo ChildClass::getName();