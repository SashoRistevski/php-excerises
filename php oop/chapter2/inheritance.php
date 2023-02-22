<?php
require 'PhysicalBook.php';
require 'DigitalBook.php';
use chapter2\PhysicalBook;
use chapter2\DigitalBook;


$book = new \chapter2\Book('Parent Book', 'John Doe', 2000);

echo $book->print() . PHP_EOL;

$physicalBook = new PhysicalBook('newTitle', 'John Doe', 2000, 300);

echo $physicalBook->print();

//

//$digitalBook = new DigitalBook('Title2', 'John Doe', 300, 1080);
//
//var_dump($physicalBook);