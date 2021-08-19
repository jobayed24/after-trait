<?php

trait NumberSerize{
    function numberSerizeA(){
        parent::numberSerizeA();
        echo "Number Serize A\n";
    }
}

class Osabamago {
    function numberSerizeA()
    {
        
        echo "This is another number serize\n";
    }
}

class PrintNS extends Osabamago{ 
    use NumberSerize;

    
}

$pns=new PrintNS();

$pns->numberSerizeA();