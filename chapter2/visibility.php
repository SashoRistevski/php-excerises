<?php

use chapter2\BaseClass;
use chapter2\SubClass;

require 'BaseClass.php';
require 'SubClass.php';

$baseObject = new BaseClass();
$subObject = new SubClass();

//echo $subObject->publicProperty . PHP_EOL;
//echo $subObject->getParentProtectedProperty();

print $subObject->getParentPrivateProperty() .PHP_EOL;

//echo $subObject->getParentPrivateProperty();

//echo $baseObject->publicProperty . PHP_EOL;

//echo $subObject->publicProperty;