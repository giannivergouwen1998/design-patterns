<?php

namespace App\Builder;

final class HtmlPage extends Page
{
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
                             <ul>
                              '.$this->list.'
                            </ul> 
                        </body>
                    </html>'
        ;
    }
}
