<?php
$array = array(
    'fruit1' => 'apple',
    'fruit2' => 'orange',
    'fruit3' => 'grape',
    'fruit4' => 'apple',
    'fruit5' => 'apple');


 while($array_kes=current($array)){
     if($array_kes=="apple"){
         echo key($array)."\n";
     }
     next($array);
 }