<?php

require("Animal.php");
require("Dog.php");
require("Chicken.php");

// class Main{
//     public $nama;

//     public function __construct()
//     {
//         self::getInfo();
//     }
//     //static method
//     public static function getInfo()
//     {
//         print("Terdapat beragam binatang");
//     }
// }

//new Main();

$animal = new Animal("Bird","2","Herbivore");
$dog = new Dog();
$chicken = new Chicken();

print($animal->run());
print("\n");
print($animal->stop());
print("\n");
print($dog->barking());
print("\n");
print($chicken->crowing());
    
?>