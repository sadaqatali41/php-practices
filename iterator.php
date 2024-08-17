<?php

// todo: iterators are powerful tools for traversing collections of data. They provide a way to loop through objects that implement the Iterator interface

class CustomIterator implements Iterator
{
    private $items = [];
    private $position = 0;
    public function __construct($items){
        $this->items = $items;
    }

    public function rewind() : void {
        $this->position = 0;
    }

    public function current() : mixed {
        return $this->items[$this->position];
    }

    public function key() : mixed {
        return $this->position;
    }

    public function next() : void {
        ++$this->position;
    }

    public function valid() : bool {
        return isset($this->items[$this->position]);
    }
}
$myArray = ['apple', 'banana', 'cherry'];
$iterator = new CustomIterator($myArray);

foreach ($iterator as $key => $value) {
    echo "Key: " . $key . ", Value: " . $value .  "\n";
}