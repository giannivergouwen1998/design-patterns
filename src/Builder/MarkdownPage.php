<?php

namespace App\Builder;

final class MarkdownPage extends Page
{
    public string $title;
    public string $paragraph;
    public string $heading;

    public function render(): string
    {
        return '
            %'.$this->title.'
            #'.$this->heading.'
            '.$this->paragraph.'
        ';
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function setParagraph(string $parargraph): void
    {
        $this->paragraph = $parargraph;
    }

    public function setHeading(string $heading): void
    {
        $this->heading = $heading;
    }
}
