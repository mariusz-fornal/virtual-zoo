<?php

namespace App;

use App\Exceptions\AnimalCantEatException;

abstract class Animal
{
    abstract protected function getSpecies(): string;
    abstract protected function getType(): AnimalTypes;

    public function __construct(protected string $name) { }

    public function feed(Food $food): void
    {
        if (!$this->canEat($food)) {
            throw new AnimalCantEatException($this, $food);
        }
    }

    private function canEat(Food $food): bool
    {
        if ($this->getType() === AnimalTypes::Herbivore) {
            return $food->getType() === FoodTypes::PLANT;
        }
        if ($this->getType() === AnimalTypes::Carnivore) {
            return $food->getType() === FoodTypes::MEAT;
        }
        return true;//Omnivore eats everything
    }

    public function __toString(): string
    {
        return sprintf('%s %s', $this->getSpecies(), $this->name);
    }
}