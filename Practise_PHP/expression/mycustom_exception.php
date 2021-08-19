<?php

class MyExcepton extends Exception{}
class NetworkException extends Exception{}

function testException(){
    throw new NetworkException();
}

try{
    testException();
}catch(MyExcepton $m){
    echo "this is my exception";
}catch(NetworkException $n){
    echo "This is network exception";
}catch(Exception $e){
    echo "this is main exception";
}finally{
    echo "\n Cleaned Up";
}