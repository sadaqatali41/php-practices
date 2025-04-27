<?php

// oops paradigam

// 1. Inheritence (child & parent class)
// 2. Encapsulation (hide internal data)
// 3. Polymorphism (same method, different behavior)
// 4. Abstraction (hide complexity, show essential features)

// Abstraction focuses on hiding complexity and showing only necessary part
// Abstration can be achieved with abstract class and interface

// Encapsulation foucuses on protecting the internal state and controlling access to data
// Encapsulation can be achieved using private and protected kewords

abstract class Shape {
    protected $name;
    
    abstract public function draw();
    
    public function setName($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }
}

class Circle extends Shape {
    public function draw() {
        echo "Drawing a circle";
    }
}

$circle = new Circle();
$circle->setName("Circle");
echo $circle->getName();  // Output: Circle
$circle->draw();  // Output: Drawing a circle

// Here, the abstraction is shown through the Shape class with the abstract method draw(), 
// while encapsulation is seen in the name property, which is protected and accessed 
// via getter/setter methods.

// ! what is vibe coding?

// Vibe coding is all about collaborating with the AI tools and 
// build the code by giving prompts to the AI tools.
