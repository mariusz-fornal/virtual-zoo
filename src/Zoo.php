<?php

namespace App;

class Zoo
{
    /**
     * @var Animal[] $animals
     */
    private array $animals;

    public function __construct(Animal ...$animals)
    {
        $this->animals = $animals;
    }

    public function addAnimal(Animal $animal): void
    {
        $this->animals[] = $animal;
    }

    public function getAnimals(): array
    {
        return $this->animals;
    }
}