<?php
//TUGAS 1
class Animal{
    public $name;
    public $foot;
    public $type;

    public function __construct($name,$foot,$type)
    {
        $this->name = $name;
        $this->foot = $foot;
        $this->type = $type;
    }

    public function run()
    {
        print ("{$this->name} is running");
    }

    public function stop()
    {
        print ("{$this->name} is standing");
    }
}
//$animal = new Animal("Bird","2","Herbivore");

//print($animal->run()."\n");
//print($animal->stop()."\n");
?>