<?php


// variable functions
//function sub(...$numbers): int|float {
//    return array_sum($numbers);
//}

//$x = 'sum'; // php is automatically looking for a function 'sum'
// we can also manually check with an if statement

//if (is_callable($x)){
//    echo $x(1,2,3,4);
//}else{
//    echo 'Not Callable';
//}

// Anonymous functions
//$x = 1; // this variable is outside the function scope, to access it we can use the use() and pass it.
// so even if we change the value locally inside the function, the global value is still 1 if we echo outside the function.
//$sum = function(...$numbers) use($x): int|float {
//    $x = 15;
//    echo $x;
//    return array_sum($numbers);
//};
//
//echo $sum(1,2,3,4);


// echo $x; // outputs 1


// Callable and callback functions


// Callback func are function passed as an arguments inside another functions
//$sum = function(callable $callback, int|float...$numbers): int|float {
//    return $callback(array_sum($numbers));
//};

//echo $sum('foo',1,2,3,4); // outputs 20

// another way
//echo $sum(function ($element){
//   return $element *2;
//},1,2,3,4);

//function foo($element){
//    return $element *2;
//}
//
//$array = [1,2,3,4];
//
//$array2 = array_map(function($element){
//    return $element *2;
//}, $array);
//
//print_r($array). PHP_EOL;
//print_r($array2). PHP_EOL;

// Arrow functions

$array = [ 1,2,3,4];
$array2 = array_map(function ($number){
    return $number * $number;
}, $array);

print_r($array2);

// cleaner way with arrow function

$y = 5; // in parent scope can be accessed
$array3 = array_map(fn($number) => $number * $number + $y, $array);
print_r($array3);