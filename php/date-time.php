<?php
date_default_timezone_set('Europe/Skopje');
$currentTIme = time(); // outputs in seconds
echo $currentTIme. PHP_EOL;

echo $currentTIme + 5 * 24 * 60 * 60 . PHP_EOL; // current time in 5 days

echo $currentTIme - 60 * 60 * 24 , PHP_EOL; // this is a day before

echo date('m/d/y g:ia'). PHP_EOL;

echo date('m/d/y g:ia', $currentTIme + 5 * 24 * 60 * 60). PHP_EOL;
