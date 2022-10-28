<?php

namespace App\Builder;

final class MarkDownPageBuilder implements PageBuilder
{

    private MarkDownPage $pageBuilder;

    public function __construct(MarkDownPage $pageBuilder)
    {
        $this->pageBuilder = $pageBuilder;
    }

    public function setTitle(): void
    {
        $this->pageBuilder->title = 'Markdown pagina';
    }

    public function setParagraph(): void
    {
        $this->pageBuilder->paragraph = 'Paragraaf markdown';
    }

    public function setList(): void
    {
        $this->pageBuilder->list = 'list markdown';
    }

    public function setHeading(): void
    {
        $this->pageBuilder->heading = 'heading markdown';
    }

    public function buildPage(): void
    {
        $this->pageBuilder = new MarkDownPage();
    }

    public function getPage(): MarkDownPage
    {
        return $this->pageBuilder;
    }
}