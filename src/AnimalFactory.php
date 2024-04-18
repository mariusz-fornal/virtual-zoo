<?php

namespace App;

use App\Animals\Elephant;
use App\Animals\Fox;
use App\Animals\Rabbit;
use App\Animals\Rhinoceros;
use App\Animals\SnowLeopard;
use App\Animals\Tiger;
use Exception;

class AnimalFactory
{
    public function createAnimal(string $animalType, string $animalName) : Animal
    {
        return match ($animalType) {
            'elephant' => new Elephant($animalName),
            'fox' => new Fox($animalName),
            'rabbit' => new Rabbit($animalName),
            'rhinoceros' => new Rhinoceros($animalName),
            'snow_leopard' => new SnowLeopard($animalName),
            'tiger' => new Tiger($animalName),
            default => throw new Exception('Animal type not supported'),
        };
    }
}