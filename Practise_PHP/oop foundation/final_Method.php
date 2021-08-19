<?php

use MyClass as GlobalMyClass;
use OurClass as GlobalOurClass;

abstract class OurClass{
    final function sayHi(){
        echo "Say something about yourslef \n";
    }
}

class Myclass extends OurClass{
    function sayNo()
    {
        echo "Say Nothing \n";
    }
}

$mc=new Myclass();
$mc->sayNo();
$mc->sayHi();
