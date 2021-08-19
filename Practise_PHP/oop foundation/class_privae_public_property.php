<?php


class Fund{
    private $fund;

    public function __construct($inifund=0)
    {
        $this->fund=$inifund;
    }
    public function addFund($money){
        $this->fund+=$money;
    }

    public function deductFund($money){
        $this->fund-=$money;
    }
    
    public function getTotal(){
        echo "Total Fund {$this->fund}";
    }
}


$newFund=new Fund();

$newFund->addFund(200);
$newFund->deductFund(120);

$newFund->getTotal();