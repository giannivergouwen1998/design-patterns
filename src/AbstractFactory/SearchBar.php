<?php

namespace App\AbstractFactory;

class SearchBar
{
    private int $length;
    private int $width;

    public function __construct(int $length, int $width)
    {
        $this->length = $length;
        $this->width = $width;
    }

    /**
     * @return int
     */
    public function getLength(): int
    {
        return $this->length;
    }

    /**
     * @return int
     */
    public function getWidth(): int
    {
        return $this->width;
    }
}
