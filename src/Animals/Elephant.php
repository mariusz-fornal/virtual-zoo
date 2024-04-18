<?php

namespace App\Animals;

use App\Animal;
use App\AnimalTypes;

class Elephant extends Animal
{
    protected function getSpecies(): string
    {
        return 'Słoń';
    }

    public function getType(): AnimalTypes
    {
        return AnimalTypes::Herbivore;
    }
}