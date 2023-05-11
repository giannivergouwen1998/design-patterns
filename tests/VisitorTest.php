<?php

declare(strict_types=1);

namespace Tests;

use App\Behavioral\Visitor\Book;
use App\Behavioral\Visitor\Document;
use App\Behavioral\Visitor\PageCountVisitor;
use PHPUnit\Framework\TestCase;

final class VisitorTest extends TestCase
{
    private PageCountVisitor $visitor;

    protected function setUp(): void
    {
        $this->visitor = new PageCountVisitor();
    }

    /** @test */
   public function it_can_count_pages_for_a_document(): void
   {
       $document = new Document(12);

       self::assertSame(12, $document->accept($this->visitor));
   }

   /** @test */
   public function it_can_count_pages_for_a_book(): void
   {
       $book = new Book();

       self::assertSame(48, $book->accept($this->visitor));
   }
}