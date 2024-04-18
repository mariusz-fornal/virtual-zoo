<?php

namespace App\Foods;

use App\Food;
use App\FoodTypes;

class Chicken extends Food
{
    public function getType(): FoodTypes
    {
        return FoodTypes::MEAT;
    }

    public function __toString(): string
    {
        return 'Kurczak';
    }
}