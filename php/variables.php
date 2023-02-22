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
$foo = 'bar';
$$foo = 'baz'; // takes the value of $foo and makes it a variable
echo $foo, $bar. PHP_EOL; // output bar baz
echo $foo, ${$foo}; // output bar baz




