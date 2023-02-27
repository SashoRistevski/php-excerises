<?php

// Constants

//define('STATUS_PAID', 'paid');
// define('STATUS_PAID', '1'); // error +, can't redefine constants

//echo STATUS_PAID.PHP_EOL;

//echo defined('STATUS_PAID'); // returns bool

//const STATUS_PAID = 'paid';

//if (true){
//    define('STATUS_PAID', 9);
//}

// dynamic assigned value
//$paid = 'PAID';
//define('STATUS_'. $paid, $paid);
//echo STATUS_PAID. PHP_EOL;

// variable variables
//$foo = 'bar';
//$$foo = 'baz'; // takes the value of $foo and makes it a variable
//echo $foo, $bar. PHP_EOL; // output bar baz
//echo $foo, ${$foo}; // output bar baz

// variables are generally with global scope unless you define them inside a function
// 1. Define it inside the function.
// 2/ Define it as a parameter and pass it in as argument
// 3. You can also make the variable global
$x = 5;
function foo(){
    $x = 1;
    echo $x;
}

foo();

$y = 4;
function bar($y){
   // echo $y;
}
bar($y);

$z = 5;
function globe(){
    global $z; // this is just a reference to the variable, you can change the value after that.
    $z = 10;
   // echo $z;
}
globe();
// php stores globals in associative array called $GLOBALS[]

function getVAlue(){

   static $value = null; // we use the static value to cache it so we don't wait total of 9 seconds fo every call
   if ($value === null){
       $value =someVeryExpensiveFunction();
   }

    return $value;
}
function someVeryExpensiveFunction(){
    sleep(3);
    echo 'Processing'; // Processing is printed only one time, if we remove the static keyword it wil print it 3 times
    return 10;
}
echo getVAlue(). PHP_EOL;
echo getVAlue(). PHP_EOL;
echo getVAlue(). PHP_EOL;


