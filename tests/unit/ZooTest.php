<?php

namespace unit;

use App\Animal;
use App\Zoo;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(Zoo::class)]
class ZooTest extends TestCase
{
    public function testAddAnimal(): void
    {
        $zoo = new Zoo();
        $animal = $this->createMock(Animal::class);

        $zoo->addAnimal($animal);

        $this->assertContains($animal, $zoo->getAnimals());
    }

    public function testGetAnimals(): void
    {
        $animal1 = $this->createMock(Animal::class);
        $animal2 = $this->createMock(Animal::class);

        $zoo = new Zoo($animal1, $animal2);

        $this->assertEquals([$animal1, $animal2], $zoo->getAnimals());
    }

}