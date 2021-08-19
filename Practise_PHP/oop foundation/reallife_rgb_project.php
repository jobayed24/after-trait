<?php

class RGB{
    private $color;
    private $red;
    private $green;
    private $blue;
    function __construct($colorCode='')
    {
        $this->color=ltrim($colorCode,"#");
        $this->parseColor();
    }
    public function setColor($colorCode){
        $this->color=ltrim($colorCode,"#");
        $this->parseColor();

    }
    public function getRGB(){
        return array($this->red,$this->green,$this->blue);
    }
    public function readRGB(){
        echo "Red = {$this->red} \nGreen = {$this->green} \nBlue = {$this->blue}";
    }
    private function parseColor(){
       list($this->red,$this->green,$this->blue) = sscanf($this->color,"%02x%02x%02x");
      
    }
    public function getColor(){
       return $this->color;
    }
    public function Red(){
       echo  $this->red;
    }
    public function Green(){
       echo  $this->green;
    }
    public function Blue(){
       echo  $this->blue;
    }

}


$mycolor=new RGB("#00ff00");
$mycolor->readRGB();

