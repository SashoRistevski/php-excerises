<?php

$firstName = 'Sasho';
$lastName = 'Ristevski';

$fullName = "{$firstName} $lastName";
echo $fullName. PHP_EOL;

echo $firstName[2].PHP_EOL; // s, access a letter in a string, same as array
echo $lastName[-1].PHP_EOL; // i, access a letter form the back

$firstName[0] = 's'; // access and change the letter to lowercase
echo $firstName.PHP_EOL;


$x = 1;
$y = 2;
$z = 3;
// Heredoc
$text = <<<TEXT

<div>
<p>Hello World</p>
</div>
Line 1 $x
Line 2 $y
Line 3 $z
TEXT;
echo $text. PHP_EOL;

//Nowdoc

$text = <<<'TEXT'
Line 1 $x
Line 2 $y
Line 3 $z
TEXT;
echo $text. PHP_EOL;