<?php


trait TestStatic{
    abstract function AddVlaue();
}

class UseTrait{
    use TestStatic;
    function AddVlaue()
    {
        echo "Hi";
    }
}

$ut=new UseTrait();
$ut->AddVlaue();