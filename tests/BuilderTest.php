<?php

namespace Tests;

use App\Builder\HtmlPage;
use App\Builder\HtmlPageBuilder;
use App\Builder\MarkdownPage;
use App\Builder\MarkdownPageBuilder;
use PHPUnit\Framework\TestCase;

final class BuilderTest extends TestCase
{
    const TITLE = 'Design Patterns';
    const HEADING = 'Builder';
    const PARAGRAPH = 'Dit is een builder';
    const LIST = ['item1', 'item2', 'item3'];
    const LIST_EXPECTED_MARKDOWN = ' - item1 - item2 - item3';

    /** @test */
    public function it_can_build_a_html_page(): void
    {
        $expected = '<!DOCTYPE html>
                    <html>
                        <header>
                            <title>'.self::TITLE.'<title>
                        </header>
                        <body>
                            <h1>'.self::HEADING.'</h1>
                            <p>'.self::PARAGRAPH.'</p>
                        </body>
                    </html>';

        $htmlBuilder = new HtmlPageBuilder(new HtmlPage());
        $htmlPage = $htmlBuilder
            ->setTitle(self::TITLE)
            ->setParagraph(self::PARAGRAPH)
            ->setHeading(self::HEADING)
            ->getPage();

        self::assertSame($expected, $htmlPage);
    }

    /** @test */
    public function it_can_build_a_markdown_page(): void
    {
        $expected = '
            %'.self::TITLE.'
            #'.self::HEADING.'
            '.self::PARAGRAPH.'
        ';

        $markdownBuilder = new MarkdownPageBuilder(new MarkdownPage());
        $markdownPage = $markdownBuilder
            ->setTitle(self::TITLE)
            ->setParagraph(self::PARAGRAPH)
            ->setHeading(self::HEADING)
            ->getPage();

        self::assertSame($expected, $markdownPage);
    }
}