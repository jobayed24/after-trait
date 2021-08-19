<?php
class Human{
    public $name;
    function sayHi(){
        echo "Salam \n";
        $this->getName();
    }
    private function getName(){
        echo "My name is {$this->name}\n";
    }
}


$human =new Human();
$human1=new Human();
$human->name="Jobayed";
$human1->name="Rasel";
$human->sayHi();
$human1->sayHi();
