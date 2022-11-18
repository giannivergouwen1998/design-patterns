<?php

namespace App\Builder;

final class MarkdownPage extends Page
{
    public function render(): string
    {
        return '
            %'.$this->title.'
            #'.$this->heading.'
            '.$this->paragraph.'
        ';
    }
}
