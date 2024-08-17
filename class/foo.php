<?php

class Foo {
    function __construct() {
        echo __CLASS__ . ' is loaded on Line No : ' . __LINE__ . ' from directory ' . __DIR__;
    }
}