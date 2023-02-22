<?php

require_once 'Counter.php';
require_once 'Connection.php';

$connection1 = new \chapter3\Connection();


$connection2= new \chapter3\Connection();

print \chapter3\Connection::$count . PHP_EOL;


//\chapter3\Counter::$count ++;
//
//print \chapter3\Counter::$count . PHP_EOL;