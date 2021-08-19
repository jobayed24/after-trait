<?php
abstract class  OurClass{
    function sayHi(){
        echo "Hay  I am human \n";
    }

    abstract function cat($n,$m=2);

}

class MyClass extends OurClass{
    function cat($n,$m=4){
        echo "Cat barking like Meow";
    }
}

$mc=new MyClass();
$mc->sayHi();
$mc->cat("hi");