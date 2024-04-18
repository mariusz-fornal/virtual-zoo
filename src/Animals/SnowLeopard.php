<?php

namespace App\Animals;

use App\Animal;
use App\AnimalTypes;
use App\Comb;

class SnowLeopard extends Animal
{
    use Comb;

    protected function getSpecies(): string
    {
        return 'Irbis śnieżny';
    }

    public function getType(): AnimalTypes
    {
        return AnimalTypes::Carnivore;
    }
}