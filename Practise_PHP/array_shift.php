<?php
$array_shift=array("tanvir","rasel","shakawat","jk","taiub");

$search=array_search("shakawat",$array_shift);

if($search){
    array_shift($array_shift);
}

print_r($array_shift); 