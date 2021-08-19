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
    function __call($name, $arguments)
    {
        if(!isset($this->track[$name])){
            if($arguments){
                echo "There is no mehtod like this {$arguments[0]}";
            }else{
                echo "There is no mehtod like this";
            }
        }
    }
   static function __callStatic($name, $arguments)
    {
        if(!isset(self::$track[$name])){
            if($arguments){
                echo "This is too static {$arguments[0]}";
            }else{
                echo "This is too static";
            }
        }
    }
}

$mfc=new MyFavCal("300mile","20kmh","2km");
MyFavCal::justTest("not bad ");
//$mfc->detu("200 percent made");


