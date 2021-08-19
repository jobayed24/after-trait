<?php

use Human as GlobalHuman;

class Animal{
    protected $name;
    public function __construct($name)
    {
        $this->name=$name;
    }
    public function eat(){
        echo  "{$this->name} is eating \n";  
    }
    public function run(){
        echo "{$this->name} is running \n";
    }
    function getName(){
      echo   $this->name;
    }
    protected function greet(){}
    protected function addTitle($addTitile){
        $this->name=$addTitile ." ".$this->name;
    }
    
}

class Cat extends Animal{

}
class Human extends Animal{
    function greet()
    {
         $this->addTitle("MR.");
       // echo "HI \n";
    }
    
}
$human1=new Human("Katu \n");
$human1->greet();
$human1->getName();
$human=new Human("rasel");
//$cat =new Cat("Cat");
$human->greet();
$human->eat();
$human->run();
$human->getName();
//$cat->run();
