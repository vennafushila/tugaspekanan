<?php
require_once("Animal.php");
class Chicken extends Animal{
    public function __construct()
    {
        $this->name = "Chicken";
        $this->foot = 2;
        $this->type = "Omnivore";
    }
    public function crowing()
    {
        print ("{$this->name} is crowing : Kukuruyuk……!!");
    }
}

//$chicken = new Chicken();

//print($chicken->crowing()."\n");
?>