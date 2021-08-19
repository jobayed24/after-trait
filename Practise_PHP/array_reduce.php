<?php
function sum($carry,$item){
    $carry+=$item;
    return $carry;
}


$a=array(2,3,4,5);
$b=array();

$result=array_reduce($a,"sum");

$result1=array_reduce($b,"sum","there is no data to reduce");
print_r($result1);