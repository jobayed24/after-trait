<?php
$base=array("citus"=>array("orange"),"berries"=>array("blackberry","jackfruits"));
$replacement=array("citus"=>array("jk"));

$array_replace=array("citus"=>array("tanvir"),"berries"=>array("tanvir"));

$array_replace_result=array_replace($base,$array_replace);
$array_replace_recursive=array_replace_recursive($base,$replacement);

print_r($array_replace_result);
