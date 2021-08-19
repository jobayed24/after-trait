<?php

class ParentClass{
    protected $name;
    function __construct($name)
    {
        $this->name=$name;
        $this->sayHi();
       
    }
    public function sayHi(){
        echo "Hello From Parent \n";
    }
}

class ChildClass extends ParentClass{
    function sayHi()
    {
        parent::sayHi();
        echo "Hello from {$this->name}";
    }
}

$cc=new ChildClass("ABCD");