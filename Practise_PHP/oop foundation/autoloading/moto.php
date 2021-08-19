<?php
class Moto{
    private $motor;
    function __construct($motor)
    {
        $this->motor=$motor;
    }
    function getName(){
        echo  $this->motor;
    }
    function setName($name){
        $this->motor=$name;
    }
}

$m=new Moto("Motor BIke");