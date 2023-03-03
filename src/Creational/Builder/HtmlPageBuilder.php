<?php

namespace App\Creational\Builder;

final class HtmlPageBuilder implements PageBuilder
{
    private HtmlPage $page;

    public function __construct(HtmlPage $page)
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
