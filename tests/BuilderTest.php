<?php

namespace Tests;

use App\Builder\HtmlPageBuilder;
use App\Builder\MarkdownPageBuilder;
use App\Builder\PageCreator;
use PHPUnit\Framework\TestCase;

final class BuilderTest extends TestCase
{
    private PageCreator $creator;
    const TITLE = 'Design Patterns';
    const HEADING = 'Builder';
    const PARAGRAPH = 'Dit is een builder';
    const LIST = ['item1', 'item2', 'item3'];
    const LIST_EXPECTED_MARKDOWN = ' - item1 - item2 - item3';
    const LIST_EXPECTED_HTML = '<li>item1</li><li>item2</li><li>item3</li>';

    protected function setUp(): void
    {
        $this->creator = new PageCreator();
    }

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
                             <ul>
                              '.self::LIST_EXPECTED_HTML.'
                            </ul> 
                        </body>
                    </html>';


        $htmlBuilder = new HtmlPageBuilder([
            'title' => self::TITLE,
            'heading' => self::HEADING,
            'paragraph' => self::PARAGRAPH,
            'list' => self::LIST,
        ]);

        $htmlPage = $this->creator->buildPage($htmlBuilder);

        self::assertSame($expected, $htmlPage);
    }

    /** @test */
    public function it_can_build_a_markdown_page(): void
    {
        $expected = '
            %'.self::TITLE.'
            #'.self::HEADING.'
            '.self::PARAGRAPH.'
            '.self::LIST_EXPECTED_MARKDOWN.'
        ';

        $markdownBuilder = new MarkdownPageBuilder([
            'title' => self::TITLE,
            'heading' => self::HEADING,
            'paragraph' => self::PARAGRAPH,
            'list' => self::LIST,
        ]);

        $markdownPage = $this->creator->buildPage($markdownBuilder);

        self::assertSame($expected, $markdownPage);
    }

    /** @test */
    public function is_string(): void
    {
        $markdownBuilder = new MarkdownPageBuilder([
            'title' => self::TITLE,
            'heading' => self::HEADING,
            'paragraph' => self::PARAGRAPH,
            'list' => self::LIST,
        ]);

        $markdownPage = $this->creator->buildPage($markdownBuilder);

        $htmlBuilder = new HtmlPageBuilder([
            'title' => self::TITLE,
            'heading' => self::HEADING,
            'paragraph' => self::PARAGRAPH,
            'list' => self::LIST,
        ]);

        $htmlPage = $this->creator->buildPage($htmlBuilder);

        self::assertIsString($markdownPage);
        self::assertIsString($htmlPage);
    }
}