<?php
/// here one class contain static funciton and you don't use it you just print out baseclass 
/// function


class MathCalculator{
    private $number;
    static $name;

    static function fibonacci($n){
        self::$name="Jobayed";
        echo "this is print out up to {$n} \n";
       self::factorials(9t);
       
    }
    function factorials($n){g
        self::$name="MR. ".self::$name;
        echo "this Factorials is print out up to {$n} \n";
    }
}

MathCalculator::fibonacci(4);