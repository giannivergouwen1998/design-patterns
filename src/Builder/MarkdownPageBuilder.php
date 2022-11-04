<?php

namespace App\Builder;

final class MarkdownPageBuilder implements PageBuilder
{
    /** @var array<string> $options */
    private array $options;
    private MarkdownPage $page;

    /** @phpstan-ignore-next-line */
    public function __construct(array $options)
    {
        $this->options = $options;
        $this->page = new MarkdownPage();
    }

    public function setTitle(): void
    {
        $this->page->title = $this->options['title'];
    }

    public function setParagraph(): void
    {
        $this->page->paragraph = $this->options['paragraph'];
    }

    public function setList(): void
    {
        /** @var array<string> $items */
        $items = $this->options['list'];
        $list = '';

        foreach ($items as $item) {
            $list .= ' - '.$item;
        }

        $this->page->list = $list;
    }

    public function setHeading(): void
    {
        $this->page->heading = $this->options['heading'];
    }

    public function getPage(): string
    {
        return $this->page->render();
    }
}
