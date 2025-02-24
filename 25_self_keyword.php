<?php

// * The self keyword is used to refer to the current class in which it is used. It is mainly used for accessing static properties and methods of the class in which it is defined. It does not consider inheritance.

class A {
    public static function who() {
        echo __CLASS__;
    }

    public static function xprint() {
        echo self::who(); // A::who()
    }
}

class B extends A {
    public static function who() {
        echo __CLASS__;
    }
}

B::xprint();