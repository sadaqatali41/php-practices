<?php

class ParentClass {
    public static function whoAmI() {
        echo static::class;
    }

    public static function whoAreYou() {
        echo self::class;
    }
}

class ChildClass extends ParentClass {
}

ChildClass::whoAmI();  // Outputs: ChildClass
echo PHP_EOL;
ChildClass::whoAreYou(); // Outputs: ParentClass