<?php
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");

arsort($fruits);

foreach($fruits as $key=>$values){
    echo "$key = $values\n";
}