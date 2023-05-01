<?php

declare(strict_types=1);

namespace App\Behavioral\TemplateMethod;

abstract class Builder
{
    final public function Build(): string
    {
        return  $this->test().' & '.
         $this->lint().' & '.
         $this->assemble().' & '.
         $this->deploy();
    }

    abstract public function test(): string;
    abstract public function lint(): string;
    abstract public function assemble(): string;
    abstract public function deploy(): string;
}
