<?php

namespace App\Builder;

interface PageBuilder
{
    public function setTitle(): void;
    public function setParagraph(): void;
    public function setList(): void;
    public function setHeading(): void;
    public function getPage(): string;
}
