<?php
function prettyPrintArray(array $value){
    echo '<pre>';
    print_r($value);
    echo '</pre>';
}

// ARRAY CHUNK

$input_array =['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
//prettyPrintArray(array_chunk($input_array,2, true));

// ARRAY COMBINE // add the first elements of the first array as keys, both arrays must be same count

//$array1 = ['a','b','c'];
//$array2 = [5,10,15];
//prettyPrintArray(array_combine($array1,$array2));

// ARRAY FILTER

$array1 = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
$array2 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$array3 = [1,2,false, 0.0,4,5];

$even = array_filter($array3); // it will filter out the falsy values

//$even = array_filter($array2,fn($number, $key) => $number % 2 === 0, ARRAY_FILTER_USE_BOTH );

$even = array_values($even);
prettyPrintArray($even);


// Array Keys

$array4 = ['d' => 5, 'a' => 3, 'c' => 3, 'b' => 2, 'e' => 8];
$keys = array_keys($array4, '5', true);
prettyPrintArray($keys);

// Array Map

$array5 = [1,2,3,4,5,6,7];

$result = array_map(fn($number) => $number * $number, $array5);

prettyPrintArray($result);
// if you pass one array the keys will be preserved, if you use more arrays the resulted array will be re indexed
$array6 = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
$array7 = ['f' => 6, 'g' => 7, 'h' => 8, 'i' => 9, 'j' => 10];

$result1 = array_map(fn($number, $number1) => $number * $number1, $array6, $array7);

prettyPrintArray($result1);


// Array Merge

$arr1 = [1,2,3];
$arr2 = [4,5,6];
$arr3 = [7,8,9];
// if the arrays have keys and same keys have diff values the second value will overwrite the first in the merge.
$merged = array_merge($arr1,$arr2, $arr3);
prettyPrintArray($merged);


// Array Reduce

$invoiceItems = [
    ['price' => 20,  'qty' => 100,  'desc' => 'item 1'],
    ['price' => 5.99,  'qty' => 20,  'desc' => 'item 2'],
    ['price' => 4.99,  'qty' => 10,  'desc' => 'item 3'],
    ['price' => 8.5,  'qty' => 45,  'desc' => 'item 4'],
    ['price' => 9.99,  'qty' => 15,  'desc' => 'item 5'],
];

$total = array_reduce($invoiceItems, fn($sum, $item) =>
        $sum + $item['price'] * $item['qty']);

echo $total;

// Array Search

$arr4 = ['a', 'b','c', 'bc', 'ab', 'bb', 'da', 'F', 'G', 'Y' ];
$findKey = array_search('ab', $arr4, true);
// if you have multiple same values in the array, this will only return the first it finds
var_dump($findKey). PHP_EOL;

$findKey1 = in_array('D', $arr4);

var_dump($findKey1);

// Array diff

$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("e"=>"red","f"=>"black","g"=>"purple");
$a3=array("a"=>"red","b"=>"black","h"=>"yellow");

prettyPrintArray(array_diff($a1,$a2,$a3)) .PHP_EOL; // this checks just the values
prettyPrintArray(array_diff_assoc($a1,$a2,$a3)). PHP_EOL; // this will check thr keys and values as well
prettyPrintArray(array_diff_key($a1,$a2,$a3)) . PHP_EOL; // this will check the

// Array Sort

$ar = ['d' => 4, 'c' => 3, 'g' => 2, 'f' => 5];

asort($ar);
prettyPrintArray($ar);

ksort($ar);

prettyPrintArray($ar);

usort($ar,fn($a, $b) => $a <=> $b); // this sort removes custom keys and re indexes
prettyPrintArray($ar);

// Array Destructor

$array8 = [1, 2, [3, 4]];
[$a, $b, [$c, $d]] = $array8;
echo $a . ' ' . $b . ' ' . $c . ' ' . $d. PHP_EOL;
