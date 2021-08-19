<?php


namespace Astronomy;
include "earth.php";
include "marse.php";
include "earth1.php";
use \Astronomy\Earth\Earth as e;

$e1=new \Astronomy\Earth1\Earth();

$e1->getName();

$e=new e();
$e->getName();