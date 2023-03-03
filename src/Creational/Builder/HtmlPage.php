<?php

namespace App\Creational\Builder;

final class HtmlPage extends Page
{
    public string $title;
    public string $paragraph;
    public string $heading;

    public function render(): string
    {
        return '<!DOCTYPE html>
                    <html>
                        <header>
                            <title>'.$this->title.'<title>
                        </header>
                        <body>
                            <h1>'.$this->heading.'</h1>
                            <p>'.$this->paragraph.'</p>
                        </body>
                    </html>'
        ;
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
