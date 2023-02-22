<?php

require_once '../chapter1/Playlist.php';
require_once '../chapter1/Song.php';


$metallicaSongs = new Playlist();

$song = new Song('Master Of Puppets', 100);

$fakeSong = 'This is not a song...it is a string';

$metallicaSongs->addSong($song);

var_dump($metallicaSongs->getSongs());

