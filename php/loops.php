<?php

// LOOPS

// while
//$i = 0;
//while ($i <= 15){
//    echo $i++;
//}
//while (true){ // loop will run as long as the while condition is true
//    if ($i >= 15){ // in this case the loop will break when we reach 15
//        break;
//    }
//    echo $i++;
//}

//while (true){
//    while ($i >=10){
//        break 2; // this means when the condition is met we will break out of 2 loops.If i remove the 2 we will exit the first loop but not the second
//    }
//    echo $i++;
//}

//while($i <= 15){
//    if ($i % 2 === 0){ // we are getting the odd numbers
//        $i++;
//        continue;
//
//    }
//    echo $i++;
//}

// do while

//do{
//    echo $i++; // it will print once even if the while condition is false
//}while($i <= 15);

// for

//for ($i = 0; $i <= 15; $i++){
//    echo $i .',';
//}

//$text = 'Hello World';
//$arr =['a', 'b', 'c', 'd'];
//for ($i=0; $i < strlen($text); $i++){
//    echo $text[$i]. PHP_EOL;
//}
//
//for ($i=0; $i < count($arr); $i++){
//    echo $arr[$i]. PHP_EOL;
//}
//$length = count($arr); // this is better performance wise, do the count outside the loop
//for ($i=0; $i < $length; $i++){
//    echo $arr[$i]. PHP_EOL;
//}
// foreach = used on arrays and objects

$programingLanguages = ['php', 'java', 'c++', 'python', 'javascript', 'rust'];

foreach ($programingLanguages as $language) {
        echo  $language . PHP_EOL;
}
foreach ($programingLanguages as $key => $language) {
    echo $key. ':' .  $language . PHP_EOL;
}

$user = [
    'name' => 'Sasho',
    'age' => '35',
    'email' => 'sasho@gmail.com',
    'skills' => ['php', 'javascript', 'laravel'],
];

foreach ($user as $key => $value){
    echo $key . ':' . $value. PHP_EOL; // we get error cause the skills is array, cant be converted to string
}

 // better alternative
foreach ($user as $key => $value){
    echo $key . ':' . json_encode($value). PHP_EOL; // use json encode on the value
}