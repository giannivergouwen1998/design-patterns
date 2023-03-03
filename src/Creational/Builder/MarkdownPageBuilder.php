<?php

namespace App\Creational\Builder;

final class MarkdownPageBuilder implements PageBuilder
{
    private MarkdownPage $page;

    public function __construct(MarkdownPage $page)
    {
        $this->page = $page;
    }

    public function setTitle(string $title): self
    {
        $this->page->setTitle($title);
        return $this;
    }

    public function setParagraph(string $paragraph): self
    {
        $this->page->setParagraph($paragraph);
        return $this;
    }

    public function setHeading(string $heading): self
    {
        $this->page->setHeading($heading);
        return $this;
    }

    public function getPage(): string
    {
        return $this->page->render();
    }
}
