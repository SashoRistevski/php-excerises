<?php

namespace chapter2;
require_once 'Book.php';

class PhysicalBook extends Book
{
    public $weight;


public function __construct(string $title, string $author, int $price, int $weight)
{
    parent::__construct($title, $author, $price);
    $this->weight = $weight;
}
    public function getWeightInMetrics() :string
    {
        return  $this->weight / 1000 .  "kg" ;
    }
    public function getWeight(): int
    {
        return $this->weight;
    }

    public function print() : string
    {
        return "{$this->title}, {$this->author}, weight: {$this->weight}";
    }
        public function write(): string
        {
            return "{$this->title}, weight: {$this->weight}";
        }

}