<?php

namespace App\Flyweight;

final class CharacterFactory
{
    private array $characters = [];

    public function createCharacters(string $char): Character
    {
        if(!isset($this->characters[$char]))
        {
            $this->characters[$char] = new Character($char);
        }

        return $this->characters[$char];
        
    }
}