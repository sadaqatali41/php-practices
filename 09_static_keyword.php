<?php

// * static keyword refers to the class in which the method was called, it does not refer to the class where it was defined.

class StaticA {
    public static function who() {
        echo __CLASS__;
    }

    public static function xprint() {
        echo static::who(); // refers to the class that was called (late static binding)
        // echo static::class; // also same
    }
}

class StaticB extends StaticA {
    public static function who() {
        echo __CLASS__;
    }
}

StaticB::xprint();