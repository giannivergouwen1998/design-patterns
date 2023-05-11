<?php

namespace App\Behavioral\Visitor;

interface Visiable
{
    public function accept(Visitor $visitor): int;
}
