<?php

use Human as GlobalHuman;

class Human{
    public $name;
    public $age;
    function __construct($personName,$personAge=0)
    {
       // echo "New object has initialization \n";
        $this->name=$personName;
        $this->age=$personAge;
    }
    function sayHi(){
        echo "Salam \n";
        $this->getName();
    }
    private function getName(){
        if($this->age){
            echo "My name is {$this->name} and I am {$this->age} years old\n";
        }else{
            echo "My name is {$this->name} i don't know how old i am\n";
        }
        
    }
}

$human=new Human("jobayed",22);
$human1=new Human("Tushar");

$human->sayHi();
$human1->sayHi();