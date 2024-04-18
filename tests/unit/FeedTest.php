<?php

namespace unit;

use App\Animal;
use App\Animals\Fox;
use App\Animals\Rabbit;
use App\Animals\SnowLeopard;
use App\Exceptions\AnimalCantEatException;
use App\Foods\Boar;
use App\Foods\Carrot;
use App\Foods\Chicken;
use App\Foods\Grass;
use PHPUnit\Framework\Attributes\CoversMethod;
use PHPUnit\Framework\TestCase;

#[CoversMethod(Animal::class, 'feed')]
class FeedTest extends TestCase
{
    public function testIfHerbivoreCanEatMeat(): void
    {
        $this->expectException(AnimalCantEatException::class);

        $rabbit = new Rabbit('Roger');
        $rabbit->feed(new Chicken());
    }

    public function testIfHerbivoreCanEatPlant(): void
    {
        $this->expectNotToPerformAssertions();

        $rabbit = new Rabbit('Roger');
        $rabbit->feed(new Carrot());
    }

    public function testIfCarnivoreCanEatMeat(): void
    {
        $this->expectNotToPerformAssertions();

        $rabbit = new SnowLeopard('Leo');
        $rabbit->feed(new Boar());
    }

    public function testIfCarnivoreCanEatPlant(): void
    {
        $this->expectException(AnimalCantEatException::class);

        $rabbit = new SnowLeopard('Leo');
        $rabbit->feed(new Grass());
    }

    public function testIfOmnivoreCanEatPlant(): void
    {
        $this->expectNotToPerformAssertions();

        $rabbit = new Fox('Titus');
        $rabbit->feed(new Carrot());
    }

    public function testIfOmnivoreCanEatMeat(): void
    {
        $this->expectNotToPerformAssertions();

        $rabbit = new Fox('Titus');
        $rabbit->feed(new Chicken());
    }
}