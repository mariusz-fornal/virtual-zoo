<?php

namespace App\Exceptions;

use App\Animal;
use App\Food;
use RuntimeException;

class AnimalCantEatException extends RuntimeException
{
    public function __construct(Animal $animal, Food $food)
    {
        parent::__construct($animal . ' can\'t eat ' . $food);
    }
}