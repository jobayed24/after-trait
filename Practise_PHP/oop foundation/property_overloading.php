<?php


class MyFavCal{
    private $track;
    function __construct($mileage,$speed,$slowest)
    {
        $this->track=array();  
        $this->track["mileage"]=$mileage;
        $this->track["speed"]=$speed;
        $this->track["slowest"]=$slowest;
        
    }

    function __get($name)
    {
       echo  $this->track[$name];
    }

    function __set($name, $value)
    {
       $this->track[$name]=$value;
    }
    function __isset($name)
    {
        if(!isset($this->track[$name])){
            echo "Result not found";
            return false;
        }
        return true;
    }
    function __unset($name)
    {
        print_r($this->track);
        unset($this->track[$name]);
        print_r($this->track);
    }
}

$mfc=new MyFavCal("300mile","20kmh","2km");

$mfc->mileage="150cc";
if(isset($mfc->slow)){
    $mfc->slow;
}
unset($mfc->mileage);


