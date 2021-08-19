<?php
class MyFav{
    private $cname;
    function __construct($cname)
    {
        $this->cname=$cname;
    }

    function __toString()
    {
        return $this->cname;
    }
}

$mf=new MyFav("Green");

echo $mf;