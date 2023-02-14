<?php
require_once 'Playlist.php';

require_once 'Song.php';


$playlist = new Playlist();

$song1 = new Song('Porch', 15);
$song2 = new Song('Black', 29);

$playlist->addSong($song1);
$playlist->addSong($song2);

foreach ($playlist->songs as $song)
{
     print $song->name . PHP_EOL;
}