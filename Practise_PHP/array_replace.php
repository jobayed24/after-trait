<?php

$base=array("orange","banana","apple","raspberry");

$replacement=array(0=>"tanvir",5=>"JK");

$result=array_replace($base,$replacement);
print_r($result);