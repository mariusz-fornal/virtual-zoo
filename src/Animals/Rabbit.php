<?php

namespace App\Animals;

use App\Animal;
use App\AnimalTypes;
use App\Comb;

class Rabbit extends Animal
{
    use Comb;

    protected function getSpecies(): string
    {
        return 'Królik';
    }

    public function getType(): AnimalTypes
    {
        return AnimalTypes::Herbivore;
    }
}