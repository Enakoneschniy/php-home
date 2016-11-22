<?php
include_once 'init.php';
$khKiev=new Cargo(500,"Intercity",10,20);
var_dump($khKiev);
echo $khKiev->total(),"<br>";
$khKiev1=new Passenger(500,"Intercity",10,54);
var_dump($khKiev1);
echo $khKiev1->total(),"<br>";