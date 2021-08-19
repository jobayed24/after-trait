<?php

class Planet{
    public $name;
    function __construct($name)
    {
        $this->name=$name;
    }
}

$e=new Planet("Naptune");

$e1=new Planet("Earth");

if($e==$e1){
    echo "this is simillar";
}else{
    echo "this is not simillar";
}