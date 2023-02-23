<?php
$x = true;
$y = false;
$z = true;
var_dump($x && !$y); // true cause ! has higher precedence than &&

$x = true;
$y = false;
$z = true;

var_dump($x && !$y || $z); // true, will check left first cause of higher porecedence, that is false but then
//we have || which means true in the end

// use parenthesis to make it readable, and to make sure the logic works instead of relying on the precedence
