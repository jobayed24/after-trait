<?php

class A{
   protected static $name;
    function sayHi(){
      self::$name="jobayed \n";
    }


}

class B extends A{
    function saySomething(){
       echo paarent::$name="jk";
    }
}

  B::saySomething();
