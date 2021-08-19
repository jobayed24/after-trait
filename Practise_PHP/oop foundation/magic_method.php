<?php



class MyClass{
    private $name;
    private $age;
    private $class;
    function __construct($name='',$age='',$class='')
    {
        $this->name=$name;
        $this->age=$age;
        $this->class=$class;

    }
    function __set($props, $value)
    {
        $this->props=strtolower( $value);
    }

    function __get($props)
    {
        return $this->props;
    }
}

$mc=new MyClass("rasel",23,"twelve");



$mc->class="twelve";

echo $mc->class;