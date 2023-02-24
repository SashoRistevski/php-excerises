<?php

//function foo(){
//    echo 'Hello';
//}
//foo();
//
//function foo(){
//    return 'hello';
//}
//$x = foo();
//echo foo();

//execute the function upon a condition, also in this case the func call have to be after the condition, not before
//if (true){
//    function foo(){
//       return 'Hello';
//    }
//}
//echo foo();

//foo();
//bar();// cat func can not be called before the main function
//function foo(){
//    echo 'Foo' ."\n";
//    function bar(){
//        echo  'Bar';
//    }
//    return 'Hello';
//}

/* tell the function what is returning, even if i put '1' it won't throw error
VOID - NOT RETURNING ANYTHING NULL
you can also specify to return int or0 float, if we expect more types we can specify mixed */
//function foo(): mixed
//{
//    return '1';
//}

//function calc(int $x, int $y)
//{ // x and y are parameters
//    return $x * $y;
//}
//
//echo calc(4, 5); // down here they are arguments, cause we give them values\

//function foo(int|float &$x, int|float $y): int|float // when we add the & to reference the value of $a will change to 3.
//{
//    if ($x % 2 === 0) {
//        $x /= 2;
//    }
//    return $x * $y;
//}
//
//$a = 6.0;
//$b = 3;
//
//echo foo($a, $b) . "\n";
//var_dump($a, $b);
/* The function foo takes two arguments, $x and $y, both of which can be either an integer or a float.
The function returns the product of $x and $y as an integer or a float.
The function first checks whether $x is even by checking whether its remainder when divided by 2 is equal to 0.
If $x is even, then it is divided by 2. If $x is odd, then it is left unchanged.
After the check is complete, the function returns the product of $x and $y.
The code then assigns the values 6 and 3 to the variables $a and $b, respectively.
The code then calls the foo function with $a and $b as arguments and prints the result followed by a newline character.
Finally, the code uses the var_dump function to print the values of $a and $b to the screen, which will output
their types and values.*/

function sum(...$numbers): int|float // when we add the & to reference the value of $a will change to 3.
{
    //$sum = 0;
//foreach ($numbers as $number)
//{
//    $sum += $number;
//}
//    return $sum;
    return array_sum($numbers);
}

$a = 6.0;
$b = 3;
$numbers = [50, 100, 30, 20];
//echo sum($a, $b, 50, 100, 30, 20) . "\n";
//echo sum($a, $b,...$numbers) . "\n";
//var_dump($a, $b);



function order(int $x, int $y){
    // This checks if $x is divisible by $y, using the modulo operator (Remainder of $x divided by $y
    if ($x % $y === 0){
        // If $x is divisible by $y, then return the result of $x divided by $y.
        return $x / $y;
    }
    // If $x is not divisible by $y, then return the value of $x.
    return $x;
}

// Here we're assigning the value 7 to the variable $x, and the value 3 to the variable $y.
$x = 12;
$y = 3;

$arr = ['x' => 1, 'y' => 2]; // the keys here are being treated as argument names
echo order($x, $y); // if you mess up the order of the passing arguments, now we can name the arguments,
echo order(y: $y, x: $x);
echo order(...$arr); // the ... unpacks the array