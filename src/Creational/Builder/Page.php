<?php

namespace App\Creational\Builder;

abstract class Page
{
    abstract public function setTitle(string $title): void;
    abstract public function setParagraph(string $parargraph): void;
    abstract public function setHeading(string $heading): void;
}
