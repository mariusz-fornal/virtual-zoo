<?php

namespace App\Foods;

use App\Food;
use App\FoodTypes;

class Grass extends Food
{
    public function getType(): FoodTypes
    {
        return FoodTypes::PLANT;
    }

    public function __toString(): string
    {
        return 'Trawa';
    }
}