<?php

require_once '../chapter1/Song.php';

$songTitles = ['yesterday', 'billy jean', 'ace of spades'];

$song = new Song($songTitles[0], 100);

//$song->name = $songTitles;
$song->numberOfPlays = 200;

var_dump($song->numberOfPlays);