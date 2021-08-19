<?php
class Color{
    public $color1;
    function __construct($color1)
    {
        $this->color1=$color1;
    }
    function setColor($color1){
        $this->color1=$color1;
    }
}
class MyColor{
    public $color;
    public $data;

    function __construct($color,$data)
    {
        $this->color=$color;
        $this->data=new Color($data);
    }

    function updateColor($color){
        $this->color=$color;
    }
    function __clone()
    {
        $this->data=clone $this->data;
    }
}

$mc=new MyColor("Some Data","Red");

//print_r($mc);

$mc1=clone $mc;

$mc1->updateColor("More Data");

//print_r($mc);

print_r($mc);
$mc1->data->setColor("green");
print_r($mc);

print_r($mc1);