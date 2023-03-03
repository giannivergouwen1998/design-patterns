<?php

namespace Tests;

use App\Creational\SimpleFactory\Bicycle;
use App\Creational\SimpleFactory\BicycleFactory;
use App\Creational\SimpleFactory\ElectricBike;
use PHPUnit\Framework\TestCase;

class SimpleFactoryTest extends  TestCase
{
    const DISTANCE_ELECTRIC_BIKE = 30;
    const DISTANCE_BICYCLE = 10;
    const DESTINATION = 'Test';

    /** @test */
    public function it_can_create_a_bicycle(): void
    {
        $bicycle = BicycleFactory::createBicycle(self::DESTINATION, self::DISTANCE_BICYCLE);
        $this->assertInstanceOf(Bicycle::class, $bicycle);
    }

    /** @test */
    public function it_can_create_an_electric_bike(): void
    {
        $electricBike = BicycleFactory::createBicycle(self::DESTINATION, self::DISTANCE_ELECTRIC_BIKE);
        $this->assertInstanceOf(ElectricBike::class, $electricBike);
    }

    /** @test */
    public function is_not_same_instance_as_bicycle(): void
    {
        $bicycle = BicycleFactory::createBicycle(self::DESTINATION, self::DISTANCE_ELECTRIC_BIKE);
        $this->assertNotInstanceOf(Bicycle::class, $bicycle);
    }

    /** @test */
    public function is_not_same_instance_as_electric_bike(): void
    {
        $bicycle = BicycleFactory::createBicycle(self::DESTINATION, self::DISTANCE_BICYCLE);
        $this->assertNotInstanceOf(ElectricBike::class, $bicycle);
    }

    /** @test */
    public function is_string(): void
    {
        $bicycle = BicycleFactory::createBicycle(self::DESTINATION, self::DISTANCE_ELECTRIC_BIKE);
        self::assertIsString( $bicycle->getDestination());
    }

    /** @test */
    public function is_same_state_destination(): void
    {
        $bicycle = BicycleFactory::createBicycle(self::DESTINATION, self::DISTANCE_ELECTRIC_BIKE);
        self::assertSame('Test', $bicycle->getDestination());
    }

    /** @test */
    public function is_int(): void
    {
        $bicycle = BicycleFactory::createBicycle(self::DESTINATION, self::DISTANCE_ELECTRIC_BIKE);
        self::assertIsInt( $bicycle->getDistance());
    }

    /** @test */
    public function is_same_state_distance(): void
    {
        $bicycle = BicycleFactory::createBicycle(self::DESTINATION, self::DISTANCE_ELECTRIC_BIKE);
        self::assertSame( 30, $bicycle->getDistance());
    }
}