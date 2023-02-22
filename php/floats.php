<?php

$x = 13.5; // 13.5
$x = 13.5e3; // 13500
$x = 13.5e-3; // 0.0135

$x = floor((0.1 + 0.7) *10); // 7 not 8 cause its 7.99999, rounds down
$x = ceil((0.1 + 0.7) *10); // 8, rounds up
$x = ceil((0.1 + 0.2) *10); // 4, cause the result is 3.0000000004 and rounds up to 4 cause it is above 3

//never compare floats directly
echo $x;

$y = 5;
$y = 'string'; // double(0)
$y = '5'; // double(5)
var_dump((float) $y) . PHP_EOL; // double(5)

