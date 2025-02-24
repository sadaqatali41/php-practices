<?php

class Student {

    protected $id;
    protected $name;

    private function __construct() {

    }

    public static function forId($id) {
        $instance = new self();
        $instance->id = $id;
        return $instance;
    }

    public static function rowFromDB($dbRow) {
        $instance = new self();
        $instance->id = $dbRow->id;
        $instance->name = $dbRow->name;
        return $instance;
    }

    public function getDetail() {
        if($this->id) {
            echo 'ID : ' . $this->id . PHP_EOL;
        }
        if($this->name) {
            echo 'Name : ' . $this->name . PHP_EOL;
        }
    }
}

// $obj = Student::forId(10);
// $obj->getDetail();
// echo PHP_EOL;
$obj = Student::rowFromDB((object) ['id' => 12, 'name' => 'Ali']);
$obj->getDetail();