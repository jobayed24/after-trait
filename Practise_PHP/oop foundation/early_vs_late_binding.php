<?php


class Planet{
    static public function Marse(){
        echo static::getName();
    }

    static  function getName(){
        return "My name is Earth";
    }
}

class Planet1 extends Planet{
    static function getName(){
        return "My name is anoter Earth";
    }
}

Planet1::Marse();