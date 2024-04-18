<?php

namespace App\Foods;

use App\Food;
use App\FoodTypes;

class Boar extends Food
{
    public function getType(): FoodTypes
    {
        return FoodTypes::MEAT;
    }

    public function __toString(): string
    {
        return 'Dzik';
    }
}