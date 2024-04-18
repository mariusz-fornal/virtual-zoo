<?php

namespace unit;

use App\Animal;
use App\Animals\Fox;
use App\Animals\Rabbit;
use App\Animals\Rhinoceros;
use App\Animals\Elephant;
use App\Animals\SnowLeopard;
use App\Animals\Tiger;
use PHPUnit\Framework\Attributes\CoversFunction;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

#[CoversFunction(Animal::class, '::comb')]
class CombTest extends TestCase
{
    #[DataProvider('getFurredAnimals')]
    public function testIfAnimalsWithFurCanBeCombed(Animal $furryAnimal): void
    {
        $this->assertNull($furryAnimal->comb());
    }

    public static function getFurredAnimals(): array
    {
        return [
            [new Fox('Titus')],
            [new Rabbit('Roger')],
            [new SnowLeopard('Leo')],
            [new Tiger('Surya')],
        ];
    }

    #[DataProvider('getNotFurredAnimals')]
    public function testIfAnimalsWithoutFurCantBeCombed(Animal $notFurryAnimal): void
    {
        $this->assertNotContains('comb', get_class_methods($notFurryAnimal));
    }

    public static function getNotFurredAnimals(): array
    {
        return [
            [new Elephant('Tomasz')],
            [new Rhinoceros('Alex')],
        ];
    }
}