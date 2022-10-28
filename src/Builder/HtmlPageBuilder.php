<?php

namespace App\Builder;

final class HtmlPageBuilder implements PageBuilder
{
    private HtmlPage $pageBuilder;

    public function __construct(HtmlPage $pageBuilder)
    {
        $this->pageBuilder = $pageBuilder;
    }

    public function setTitle(): void
    {
        $this->pageBuilder->title = 'Html pagina';
    }

    public function setParagraph(): void
    {
        $this->pageBuilder->paragraph = 'Paragraaf';
    }

    public function setList(): void
    {
        $this->pageBuilder->list = 'list';
    }

    public function setHeading(): void
    {
        $this->pageBuilder->heading = 'heading';
    }

    public function buildPage(): void
    {
        $this->pageBuilder = new HtmlPage();
    }

    public function getPage(): HtmlPage
    {
        return $this->pageBuilder;
    }
}