<?php

namespace Tests;

use App\Creational\AbstractFactory\ComponentFactory;
use App\Creational\AbstractFactory\DarkButton;
use App\Creational\AbstractFactory\LightButton;
use App\Creational\AbstractFactory\UiBuilder;
use PHPUnit\Framework\TestCase;


class AbstractFactoryTest extends TestCase
{

    public UiBuilder $builder;
    const WIDTH = 12;
    const HEIGTH = 20;

    public function setUp(): void
    {
        $factory = new ComponentFactory();
        $this->builder = new UiBuilder($factory);
    }

    /** @test */
    public function it_can_render_a_dark_button(): void
    {
        self::assertInstanceOf(DarkButton::class, $this->builder->render(self::WIDTH, self::HEIGTH, 'dark'));
    }

    /** @test */
    public function it_can_render_a_light_button(): void
    {
        self::assertInstanceOf(LightButton::class, $this->builder->render(self::WIDTH, self::HEIGTH, 'light'));
    }

    /** @test */
    public function not_instance_of(): void
    {
        self::assertNotInstanceOf(DarkButton::class, $this->builder->render(self::WIDTH, self::HEIGTH, 'light'));
        self::assertNotInstanceOf(LightButton::class, $this->builder->render(self::WIDTH, self::HEIGTH, 'dark'));
    }

    /** @test */
    public function is_int_dark_button(): void
    {
        $button = new DarkButton(self::WIDTH, self::HEIGTH, 'dark');
        self::assertIsInt($button->getWidth());
        self::assertIsInt($button->getHeight());
    }

    /** @test */
    public function is_int_light_button(): void
    {
        $button = new LightButton(self::WIDTH, self::HEIGTH, 'light');
        self::assertIsInt($button->getWidth());
        self::assertIsInt($button->getHeight());
    }

    /** @test */
    public function is_string_dark_button(): void
    {
        $button = new DarkButton(self::WIDTH, self::HEIGTH, 'dark');
        self::assertIsString($button->getColor());
    }

    /** @test */
    public function is_string_light_button(): void
    {
        $button = new LightButton(self::WIDTH, self::HEIGTH, 'light');
        self::assertIsString($button->getColor());
    }
}