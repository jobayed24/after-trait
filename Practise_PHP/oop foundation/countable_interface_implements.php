<?php

class DistrictCollection implements iteratorAggregate,Countable{
    private $districts;
    function __construct()
    {
        $this->districts=array();
    }
    function add($district){
        array_push($this->districts,$district);
    }
   
    function getIterator()
    {
        return new ArrayIterator($this->districts);
    }
    function count()
    {
        return count($this->districts);
    }
}


$dc=new DistrictCollection;

$dc->add("Dhaka");
$dc->add("Chittagong");
$dc->add("Rajshahi");
$dc->add("Khulna");

echo count($dc);



