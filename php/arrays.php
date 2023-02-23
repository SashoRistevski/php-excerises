<?php

$programingLanguages = ['php', 'java', 'python'];

//echo $programingLanguages[1]. PHP_EOL; // java

// check if element exist in array with isset function
//var_dump(isset($programingLanguages[0])); /// true
//var_dump(isset($programingLanguages[5])); /// false
// replace element in the array

$programingLanguages[2] = 'C++';
//echo $programingLanguages[2];

//echo count($programingLanguages). PHP_EOL;
$programingLanguages[] = 'C#'; // pushes element to the end of the array

//print_r($programingLanguages);

array_push($programingLanguages, 'Javascript', 'Go', 'Swift'); // built in func to push more el to array
//print_r($programingLanguages);

// ASSOCIATIVE ARRAYS

$countriesLanguage = [
    'UK' => 'English',
    'USA' => 'English',
    'France' => 'French',
    'Germany'=>'German'];
//echo $countriesLanguage['UK'].PHP_EOL; // English
//echo $countriesLanguage['Germany'].PHP_EOL; // German

$countriesLanguage['Macedonia'] = 'Macedonian'; // adding key and value to the array, can be used in indexed arrays too
//print_r($countriesLanguage);

// another way is to assign a variable and use it to add to the array
$newCountry= 'Spanish';
$countriesLanguage[$newCountry] = 'Spanish';

//print_r($countriesLanguage);

$cars = [
    'Volvo' => ['models' => ['v60', 'v30', 'v50']],
    'BMW' => ['models' => ['x5', 'x6', 'x3']],
    'Ford' => ['models' => ['focus', 'fiesta', 'mondeo']]
];

$php = [
    'creator' => 'Rasmus Lerdorf',
    'extension' => 'php',
    'website' => 'php.net',
    'isOpenSource' => true,
    'versions' => [
        ['version' => 8, 'release date' => 'Nov 26, 2022'],
        ['version' => 7.4, 'release date' => 'Nov 28, 2019']
    ]
];
echo $cars['BMW']['models'][2]. PHP_EOL;  // X3
echo $php['versions'][0]['release date']; // Nov 26, 2022


$array =[1, 2, 'a', 'b','c', true, 'Sasho'];
array_pop($array); // removes the last element
array_shift($array); // removes the first elements, this also re indexes the array
unset($array[2]); // removes an element, but the array does not get re indexed, it's like destroy
$arr = [1,2,3];
unset($arr[0], $arr[1], $arr[2]); // removes the elements and their indexes
$arr[] = 1; // this will have index 3, because index 0,1,2 were destroyed before
//var_dump($arr);
//print_r($array);


$x = 5;
//var_dump((array) $x); // creates array with 0 => int(5)


$numbers = ['a' => 1, 'b' => 2, 'c' => 3, 'd'=> null];
var_dump(array_key_exists('a', $numbers).PHP_EOL); // returns true/false
var_dump(array_key_exists('d', $numbers).PHP_EOL); // checks if the key exists that is all
var_dump(isset($numbers['d']). PHP_EOL); // checks if the key exists and is not null, so it returns False


