<?php

declare(strict_types=1);

//function sum($x,$y){
//    $z = $x + $y;
//    return $z; // return here does not stop the script, we can echo past the sum() call
//}
//$z = sum(3,4);
//echo $z;
//return; // if we return outside the func, the script will stop
//echo 'Hello World';


function sum(int $x, int $y){
    return $x + $y;
}
echo sum('5', 5); // works normal with int, if we change to string '5" it will give error


