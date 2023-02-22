<?php


require_once '../chapter1/Song.php';

$song = new Song('yesterday', 100);

$song->setRating(3.25);

print $song->getRating() . PHP_EOL;

