<?php

namespace App\Animals;

use App\Animal;
use App\AnimalTypes;
use App\Comb;

class Fox extends Animal
{
    use Comb;

    protected function getSpecies(): string
    {
        return 'Lis';
    }

    public function getType(): AnimalTypes
    {
        return AnimalTypes::Omnivore;
    }

}