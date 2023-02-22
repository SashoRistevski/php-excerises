<?php


$x = 5;
$y = 10;
$z = PHP_INT_MAX +1; // will change to float
echo $z;
var_dump($z); // double(9.2233720368548E+18)
$j = (int) null; // returns true cause we are casting int
$x = (int) 200_000; // int(200000)

var_dump($x);