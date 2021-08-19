<?php



class MyClass{
    const VILLAGE="ashwdiya\n";

    function myClass(){
        return $this::VILLAGE;
    }
}

$mc=new MyClass();

 echo $mc->myClass();