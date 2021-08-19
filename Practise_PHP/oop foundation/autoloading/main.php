<?php

function autoLoad($name){
    $search=strpos($name,"Planet_");
    if($search!==false){
        $filename=str_replace("Planet_","",$name);
        include "planets/".strtolower("{$filename}.php");
    }else{
        include strtolower("{$name}.php");
    }
        
    
}

spl_autoload_register("autoLoad");

// $p=new Moto("KMN acho ?");
// $p->setName("MY name is ino ");

// $p->getName();

(new Planet_Planet)->getJp();
(new Planet)->getName();

(new Planet_Marse)->getMarse();