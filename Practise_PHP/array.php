<?php


$fruit1=['p'=>'pineaple',"j"=>'jeckfruit','t'=>'tomato','l'=>'letu32s','a'=>'apple'];


////data key loose if i use shuffle in an array
//// to do without it array_rand use is good

shuffle($fruit1);

$rnd=array_rand($fruit1);
print_r($rnd);
echo "\n";
echo $fruit1[$rnd];

$fruits=$fruit1;
$rand=rand(0,4);
shuffle($fruits);
echo $fruits[$rand]; 