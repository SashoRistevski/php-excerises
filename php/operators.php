<?php

// Arithmetic ( + - / % ** )
//$x = 10;
//$y = 2;
//var_dump($x + $y).PHP_EOL;
//var_dump($x - $y).PHP_EOL;
//var_dump($x / $y).PHP_EOL;
//var_dump($x * $y).PHP_EOL;
//var_dump($x % $y).PHP_EOL; // modulo gives us the remainder of the division between the numb1 and numb2 ( x y )
// and always returns integers even if you use floats
//var_dump(fmod()); // this will allow us to use floats as to get the remainder
//var_dump($x ** $y).PHP_EOL;

// Assigment ( = += -= *= /= %= **= )
//$x = 5;
//$x = $x *3; // 15
//$x *= 3; // 15
//$x += 3; // 8
//$x -= 3; // 2
//
//// String (. *= )
//$x = 'Hello';
//$x = $x. ' World';
//$x .= 'World';
//// Comparisons ( == === != <> !== < > <= >= <=> ?? ?: )
//$x =5;
//$y = 5;
//var_dump($x == $y); // loose
//var_dump($x != $y); // loose
//var_dump($x === $y); /// strict, checks data type as well
//var_dump($x !== $y);
//var_dump($x <=> $y); // returns -1, 0 or 1
//
//var_dump(0 == 'hello'); // false
//var_dump('0' == 'hello'); // now in php 8 comparing int with string converts the into to string and makes comparison
// var_dump(0) == '0'; // true
//
//// always do strict comparison
//$y = 'Hello World';
//$z = strpos($y, 'W'); // strpos = string position
////if ($z === false){
////    echo 'W Not Found';
////}else{
////    echo 'W Found at index' . $z;
////}
//// ternary operator, expects 3 vaslues
//$result = $z === false ? 'W not found' : 'W found at index '. $z;
//echo $result. PHP_EOL;
//
////  ?? :?
//$x = null;
//$y = $x ?? 'hello'; // checks if x is null, if not assigns the value to y, if x is null then assigns 'hello
////echo $y; // 'hello'
//
//// Error control (@)
//$x = @file('file.txt'); // suppresses the error, don't use it ever
//
////Increment/ Decrement (++ --)
//$x = 5;
//$x = null; // can increment null but can't decrement
//$x = 'abc'; // abd, can increment the characters, can;t decrement
//$x++;
//echo $x. PHP_EOL;
//
//// Logical ( && || ! and or xor )
//
//$x = false;
//$y = true;
//var_dump($x && $y); // for and to work both have to be true
//
//$x = 0;
//$y = 2;
////var_dump($x && $y); //false
//
//$x = 1;
//$y = 1;
////var_dump($x && $y); // true
//$x = 1;
//$y = 0;
////var_dump($x || $y); // true
//
//$x = 0;
//$y = false;
////var_dump($x || $y); // false
//
//$x = 0;
//$y = false;
////var_dump(!$x || $y); // ! negates the value of x so it becomes true
//// || operator checks the first va,ue, if it is true it does not continue checking after, even if the second value
//// is true as well

$x = false;
$y = false;

function hello()
{
    echo 'Hello World';

    return false;
}

var_dump($x || hello()); // true cause x is true, hello never runs
var_dump($x && hello() || true); // hello world and false
var_dump($x && hello() || true); // hello won't run again cause && has precedence over ||
// and checks "$x && hello()" first, which is false

// Bitwise ( & | ^ ~ << >> )

$x = 6;
$y = 3;
var_dump($x << $y); // 48
var_dump($x >> $y); // 0

// Array ( + == === != <> !== )

$x = ['a','b','c'];
$y = ['d','e','f'];
// if they have the same indexes they wont be joined
$z = $x + $y;
print_r($z);

$x = ['a','b','c'];
$y = ['d','e','f', 'g','h'];
$z = $x + $y;
// will append g and h to the $x array
print_r($z);

// the === will match the arrays and return true only if the keys and values are the same and have same order and data type
// with the loose comparison == only checks keys and values


