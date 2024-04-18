<?php

namespace App\Animals;

use App\Animal;
use App\AnimalTypes;

class Rhinoceros extends Animal
{
    protected function getSpecies(): string
    {
        return 'Nosorożec';
    }

    public function getType(): AnimalTypes
    {
        return AnimalTypes::Herbivore;
    }
}