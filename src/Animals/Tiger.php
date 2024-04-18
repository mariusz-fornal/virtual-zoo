<?php

namespace App\Animals;

use App\Animal;
use App\AnimalTypes;
use App\Comb;

class Tiger extends Animal
{
    use Comb;

    protected function getSpecies(): string
    {
        return 'Tygrys';
    }

    public function getType(): AnimalTypes
    {
        return AnimalTypes::Carnivore;
    }
}