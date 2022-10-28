<?php

namespace Tests;

use App\Builder\HtmlPage;
use App\Builder\HtmlPageBuilder;
use App\Builder\MarkDownPage;
use App\Builder\MarkDownPageBuilder;
use App\Builder\PageDirector;
use PHPUnit\Framework\TestCase;

final class BuilderTest extends TestCase
{
    public PageDirector $director;

    /** @test */
    public function it_can_build_a_html_page(): void
    {
        $htmlBuilder = new HtmlPageBuilder(new HtmlPage());
        $htmlPage = new PageDirector($htmlBuilder);

        self::assertInstanceOf(HtmlPage::class, $htmlPage);
    }
    
    /** @test */
    public function it_can_build_a_markdown_page(): void
    {
        $markdownBuilder = new MarkDownPageBuilder(new MarkDownPage());
        $markdownPage = new PageDirector($markdownBuilder);

        self::assertInstanceOf(MarkDownPage::class, $markdownPage);
    }
}