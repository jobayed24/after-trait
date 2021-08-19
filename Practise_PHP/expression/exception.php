<?php

class Teacher{
    private $tname,$tage;

    function __construct($tname,$age)
    {
        $this->tname=$tname;
        if($age<24){
            throw new Exception("Invalid Age","1001");
        }elseif($age>30){
            throw new Exception("Too old use perfect old","221");
        }else{
            $this->age=$age;
        }
        
    }
}



try{
    $T=new Teacher("Jolil","29");
    echo " Perfect Old you input";
}catch(Exception $e){
    echo $e->getCode() .":" .$e->getMessage(); 
}