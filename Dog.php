<?php
require_once("Animal.php");
class Dog extends Animal{
    public function __construct()
    {
        $this->name = "Dog";
        $this->foot = 4;
        $this->type = "Carnivora";
    }
    public function barking()
    {
        print ("{$this->name} is barking: Hug...Hug...!!!");
    }
}

//$dog = new Dog();

//print($dog->barking()."\n");
?>