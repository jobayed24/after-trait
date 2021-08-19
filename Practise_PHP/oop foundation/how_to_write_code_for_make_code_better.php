<?php


class Shape{

}

class Shapes{
    private $shape;
    function __construct()
    {
        $this->shape=array();
    }
    function addShape(Shape $shape){
        array_push($this->shape,$shape);
    }
    function countShape(){
        return count($this->shape);
    }
}

class Rectangle extends Shape{

}

class Tringle extends Shape{

}
class Students{

}
$s=new Shapes();
$s->addShape(new Tringle());
$s->addShape(new Rectangle());
echo $s->countShape();