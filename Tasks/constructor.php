<?php

class Person {
    //  properties
    public $name;
    public $age;

    // Constructor 
    public function __construct($name, $age) {
        
        $this->name = $name;
        $this->age = $age;
    }

    //  display info
    public function displayInfo() {
        echo "Name: " . $this->name . "<br>";
        echo "Age: " . $this->age . "<br>";
    }

    //  adult or not
    public function isAdult() {
        if ($this->age >= 18) {
            echo $this->name . " is an adult.<br>";
        } else {
            echo $this->name . " is not an adult.<br>";
        }
    }
}

// Creating object
$person1 = new Person("Satya", 22);
$person2 = new Person("Sai", 16);

// Calling displayInfo 
$person1->displayInfo();
// $person1->isAdult();

$person2->displayInfo();
$person2->isAdult();
?>
