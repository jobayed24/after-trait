<?php

$fruits=array("d"=>"orange","a"=>"lemon","b"=>"banana","c"=>"apple");


function test_alter(&$item1,$key,$prefix){
    $item1="$prefix: $item1";
}
function test_print($item2,$key){
    echo "$key. $item2 \n";
}

echo "Before.....:\n";

array_walk($fruits,"test_print");

array_walk($fruits,"test_alter","fruits");
echo "After......\n";

array_walk($fruits,"test_print");