<?php

namespace App\Behavioral\Visitor;

interface Visitor
{
    public function visitDocument(Document $document): int;

    public function visitBook(Book $book): int;
}
