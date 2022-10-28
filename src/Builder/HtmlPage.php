<?php

namespace App\Builder;

final class HtmlPage
{
    public ?string $title = null;
    public ?string $paragraph = null;
    public ?string $list = null;
    public ?string $heading = null;

    public function __construct()
    {
    }
}