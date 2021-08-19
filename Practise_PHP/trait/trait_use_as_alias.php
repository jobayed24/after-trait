<?php

trait OneTrait{
    function methodOne(){
        echo "Hi i am from Method One";

    }
  function methodTwo(){
      echo "Hi i am from Method ONw+++";
  }

}
trait TwoTrait{
    function methodOne(){
        echo "Hi i am from Method Two";

    }
    function methodTwo(){
        echo "Hi i am from Method Two++";
    }
   

}

class UseMyTrait{
   use OneTrait,TwoTrait{
       OneTrait::methodOne insteadOf TwoTrait;
       OneTrait::methodTwo insteadOf TwoTrait;
       OneTrait::methodOne as methodOne1;
       OneTrait::methodTwo as methodOne2;

   }
    function methodOne(){
        echo "From main class Method";
    }
}

$umt=new UseMyTrait();
$umt->MethodOne2();