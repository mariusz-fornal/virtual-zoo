<?php

namespace unit;

use App\AnimalFactory;
use App\Animals\Elephant;
use App\Animals\Fox;
use App\Animals\Rabbit;
use App\Animals\Rhinoceros;
use App\Animals\SnowLeopard;
use App\Animals\Tiger;
use Exception;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

#[CoversClass(AnimalFactory::class)]
class AnimalFactoryTest extends TestCase
{
    #[DataProvider('getAnimalsProvider')]
    public function testCreateAnimal(string $animalType, string $name, string $expectedClass): void
    {
        $animalFactory = new AnimalFactory();

        $elephant = $animalFactory->createAnimal($animalType, $name);
        $this->assertInstanceOf($expectedClass, $elephant);
    }

    public static function getAnimalsProvider(): array
    {
        return [
            ['elephant', 'Dumbo', Elephant::class],
            ['fox', 'Foxy', Fox::class],
            ['rabbit', 'Bugs', Rabbit::class],
            ['rhinoceros', 'Rhino', Rhinoceros::class],
            ['snow_leopard', 'Snowy', SnowLeopard::class],
            ['tiger', 'Tony', Tiger::class]
        ];
    }

    public function testCreateNotImplementedAnimal(): void
    {
        $this->expectException(Exception::class);

        $animalFactory = new AnimalFactory();

        $animalFactory->createAnimal('Lion', 'Simba');
    }
}