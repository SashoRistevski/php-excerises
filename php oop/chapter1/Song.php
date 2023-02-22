<?php

class Song
{
public string $name;
public int $numberOfPlays;

private int|float $rating;

public function __construct( string $name,  int $numberOfPlays)
{
    $this->name = $name;
    $this->numberOfPlays = $numberOfPlays;

}

    public function setRating(float|int $rating): void
    {
        $rating = max($rating, 0);
        $this->rating = min($rating, 5);
    }


    public function getRating(): int|float
    {
        return $this->rating;
    }







}