<?php


use chapter2\Book;

require_once 'Book.php';
require_once 'PhysicalBook.php';
require_once 'DigitalBook.php';


$book = new \chapter2\PhysicalBook('title', 'John Doe', 1000, 200);
$digitalBook = new \chapter2\DigitalBook('efheiyg', 'eighf', 276, 28976);

print $digitalBook->write() . PHP_EOL;
//echo $book->getPriceAsCurrency();


print $book->write() . PHP_EOL;

