<?php
interface NetworkConnect{
    function connect();
    function getName();
}

class DiskFullException extends Exception{}
class NetworkOverLoad extends Exception{}
class SystemBusy extends Exception{}

class MySql implements NetworkConnect{
    function connect(){
        throw new DiskFullException();
    }
    function getName()
    {
        return "MySql";
    }
}
class MsSql implements NetworkConnect{
    function connect(){
        return $this;
    }
    function getName()
    {
        return "MsSql";
    }
}
class PosgreSql implements NetworkConnect{
    function connect(){
    throw new SystemBusy();
    }
    function getName()
    {
        return "PostgreSql";
    }
}

class ConnectionPool{
    private $connected;
    private $storage;

    function __construct()
    {
        $this->storage=array();
    }

    function addStorage(NetworkConnect $storage){
        array_push($this->storage,$storage);
    }

    function disStorage(){
        foreach($this->storage as $storage){
            try{
            $this->connected=  $storage->connect();
            }catch(DiskFullException $e){
                echo "{$storage->getName()} disk is full\n";
            }catch(NetworkOverLoad $e){
                echo "{$storage->getName()} is huge load\n";
            }catch(SystemBusy $e){
                echo "{$storage->getName()} System is busy\n";
            }
            if($this->connected){
                break;
            }
        }
        if($this->connected){
            return $this->connected;
        }
        return false;
    }
}


$cp=new ConnectionPool();
$mysql=new MySql();
$pgsql=new PosgreSql();
$mssql=new MsSql();
$cp->addStorage($mysql);
$cp->addStorage($mssql);
$cp->addStorage($pgsql);



$newvalue=$cp->disStorage();
print_r($newvalue);

