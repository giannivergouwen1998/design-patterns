<?php

namespace App\Builder;

final class PageCreator
{
    public function buildPage(PageBuilder $builder): string
    {
        $builder->setTitle();
        $builder->setParagraph();
        $builder->setHeading();
        $builder->setList();

        return $builder->getPage();
    }
}
