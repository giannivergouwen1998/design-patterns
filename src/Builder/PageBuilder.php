<?php

namespace App\Builder;

interface PageBuilder
{
    public function setTitle(string $title): self;
    public function setParagraph(string $paragraph): self;
    public function setHeading(string $heading): self;
    public function getPage(): string;
}
