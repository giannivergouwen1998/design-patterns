<?php

namespace App\Prototype;

abstract class ProductPrototype
{
    protected string $brand;
    protected string $screenSize;
    protected string $type;
    protected string $color;

    abstract public function __clone();

    final public function setBrand(string $brand): void
    {
        $this->brand = $brand;
    }

    final public function setScreenSize(string $screenSize): void
    {
        $this->screenSize = $screenSize;
    }

    final public function setType(string $type): void
    {
        $this->type = $type;
    }

    final public function setColor(string $color): void
    {
        $this->color = $color;
    }

    final public function getBrand(): string
    {
        return $this->brand;
    }

    final public function getScreenSize(): string
    {
        return $this->screenSize;
    }

    final public function getType(): string
    {
        return $this->type;
    }

    final public function getColor(): string
    {
        return $this->color;
    }
}
