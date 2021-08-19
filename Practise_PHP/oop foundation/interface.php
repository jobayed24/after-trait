<?php



interface BaseAnimal{
    function isAlive();
    function isEat();
}

interface Animal extends BaseAnimal{
    function notEat();
}

class Cat implements Animal{
    function isAlive(){}
    function isEat(){}
    function notEat(){}
}

interface BaseHuman extends Animal{
    function walking();
}

class Human implements BaseHuman{
    function isAlive(){}
    function isEat(){}
    function notEat(){}
    function walking(){}
}

abstract class FinalHuman extends Human{
    abstract function eating();
}


class FinalResult extends FinalHuman{
     function eating(){}
}