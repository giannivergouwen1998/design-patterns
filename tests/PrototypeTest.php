<?php

namespace Tests;

use App\Prototype\Laptop;
use App\Prototype\Smartphone;
use PHPUnit\Framework\TestCase;
use function PHPUnit\Framework\assertInstanceOf;

final class PrototypeTest extends TestCase
{
    private Laptop $laptop;
    private Smartphone $smartphone;

    public function setUp(): void
    {
        $this->laptop = new Laptop();
        $this->smartphone = new Smartphone();
    }

    /** @test */
    public function it_can_clone_a_laptop(): void
    {
        $clonedLaptop = clone $this->laptop;
        $clonedLaptop->setBrand('Apple');
        $clonedLaptop->setColor('White');
        $clonedLaptop->setScreenSize('13 inch');
        $clonedLaptop->setType('Air');

        assertInstanceOf($this->laptop::class, $clonedLaptop);
    }

    /** @test */
    public function it_can_clone_a_smartphone(): void
    {
        $clonedSmartphone = clone $this->smartphone;
        $clonedSmartphone->setBrand('Samsung');
        $clonedSmartphone->setType('Fold 4');
        $clonedSmartphone->setScreenSize('5.4 inch');
        $clonedSmartphone->setColor('Black');

        assertInstanceOf($this->smartphone::class, $clonedSmartphone);
    }

    /** @test */
    public function it_can_set_different_properties_for_laptop(): void
    {
        $clonedLaptop = clone $this->laptop;
        $clonedLaptop->setBrand('Apple');
        $clonedLaptop->setColor('White');
        $clonedLaptop->setScreenSize('13 inch');
        $clonedLaptop->setType('Air');

        $clonedLaptop2 = clone $this->laptop;
        $clonedLaptop2->setBrand('Dell');
        $clonedLaptop2->setColor('Black');
        $clonedLaptop2->setScreenSize('16 inch');
        $clonedLaptop2->setType('XPS 15');

        self::assertNotSame($clonedLaptop->getBrand(), $clonedLaptop2->getBrand());
    }

    /** @test */
    public function it_can_set_different_properties_for_smartphone(): void
    {
        $clonedSmartphone = clone $this->smartphone;
        $clonedSmartphone->setBrand('Samsung');
        $clonedSmartphone->setType('Fold 4');
        $clonedSmartphone->setScreenSize('5.4 inch');
        $clonedSmartphone->setColor('Black');

        $clonedSmartphone2 = clone $this->smartphone;
        $clonedSmartphone2->setBrand('Apple');
        $clonedSmartphone2->setType('Iphone 14');
        $clonedSmartphone2->setScreenSize('5.4 inch');
        $clonedSmartphone2->setColor('Space gray');

        self::assertNotSame($clonedSmartphone->getColor(), $clonedSmartphone2->getColor());
    }
}