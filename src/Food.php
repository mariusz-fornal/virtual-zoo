<?php

namespace App;

abstract class Food
{
    abstract public function getType(): FoodTypes;
}