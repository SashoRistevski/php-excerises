<?php

class Playlist
{
private $songs = [];
public function addSong(Song $song): void
{
    $this->songs = $song;
}

public function getSongs()
{
  return $this->songs;
}

//public function addSong(Song $song)
//{
//$this->songs[] = $song;
//}
//
//public function countLenght() : int
//{
//    return count($this->songs);
//
//}


}