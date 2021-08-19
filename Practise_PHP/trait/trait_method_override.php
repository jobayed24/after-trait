<?php

trait MytraitA{
    function traitMethodA(){
        $this->traitMethodB();
        echo "Printing Trait method A\n";
    }
    private function traitMethodB(){
        echo "Printing Trait method B\n";
    }
}

trait MytraitB{
    function traitMethodC(){
        
        echo "Hlw From Trait Method C\n";
    }
    function traitMethodD(){
        echo "Hlw From Trait Method D\n";
    }
}

class UsiingMyTrait{
    use MytraitB;
}

$umt=new UsiingMyTrait();
$umt->traitMethodC();