<?php

declare(strict_types=1);

namespace App\Behavioral\Visitor;

final class PageCountVisitor implements Visitor
{
    public function visitDocument(Document $document): int
    {
        return $document->getPageCount();
    }

    public function visitBook(Book $book): int
    {
        $count = 0;

        foreach ($book->getChapters() as $chapter) {
            $count += $chapter->getPageCount();
        }

        return $count;
    }
}
