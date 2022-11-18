<?php

namespace App\Builder;

final class MarkdownPageBuilder implements PageBuilder
{
    private MarkdownPage $page;

    public function __construct(MarkdownPage $page)
    {
        $this->page = $page;
    }

    public function setTitle(string $title): self
    {
        $this->page->title = $title;
        return $this;
    }

    public function setParagraph(string $paragraph): self
    {
        $this->page->paragraph = $paragraph;
        return $this;
    }

    public function setHeading(string $heading): self
    {
        $this->page->heading = $heading;
        return $this;
    }

    public function getPage(): string
    {
        return $this->page->render();
    }
}
