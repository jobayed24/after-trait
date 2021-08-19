<?php

$array=array(4,5,array("rasel","tanvir"));

$reverse=array_reverse($array);
$reverse_with_containing_index=array_reverse($array,true);
print_r($reverse_with_containing_index);