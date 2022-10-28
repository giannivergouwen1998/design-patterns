<?php

namespace App\Builder;

final class PageDirector
{
    public function __construct(PageBuilder $pageBuilder)
    {
        $pageBuilder->setTitle();
        $pageBuilder->setParagraph();
        $pageBuilder->setList();
        $pageBuilder->setHeading();

        $pageBuilder->buildPage();
    }
}