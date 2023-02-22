<?php

# Scalar Types
 # bool = True / False
$completed = true;
 # int = 1 , 2, 3....
$score = 22;
 # float = 1.2, 2.5, -0.5
$price = 2.39;
 #strings = 'Sasho', "hello world"
$greeting = 'Hello Sasho';

//echo $completed. PHP_EOL;
//echo $score. PHP_EOL;
//echo $price. PHP_EOL;
//echo $greeting. PHP_EOL;
//
//echo gettype($price). PHP_EOL;
//
//print_r($completed);


# Compound Types

 # arrays
$companies = [1,2,3, -4, -0.5, 'Adidas', true];
//var_dump($companies);
 # objects
 # callable
 #iterable

# Special Types
 # resource
 # null - no value

function sum(int $x, int $y){// is will convert them to what is specified in the function, further the type may change
    $x = 5.5;
    var_dump($x,$y) .PHP_EOL;
    return $x + $y;
}
 $sum = sum(2.5,'3'). PHP_EOL;

echo $sum . PHP_EOL;

var_dump($sum). PHP_EOL;
