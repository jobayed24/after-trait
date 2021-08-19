<?php

class DistrictCollection implements iteratorAggregate{
    private $districts;
    function __construct()
    {
        $this->districts=array();
    }
    function add($district){
        array_push($this->districts,$district);
    }
    // function getDistrict(){
    //     return $this->districts;
    // }
    function getIterator()
    {
        return new ArrayIterator($this->districts);
    }
}


$dc=new DistrictCollection;

$dc->add("Dhaka");
$dc->add("Chittagong");
$dc->add("Rajshahi");
$dc->add("Khulna");


// $_districts =$dc->getDistrict();

// foreach($_districts as $district){
//     echo $district."\n";
// }

foreach($dc as $district){
    echo $district."\n";
}

