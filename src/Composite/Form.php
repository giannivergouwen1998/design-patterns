<?php

namespace App\Composite;

class Form implements Renderable
{
    /** @var array<Renderable> */
    private array $elements = [];

    public function render(): string
    {
        $form = '<form>';

        foreach ($this->elements as $element) {
            $form .= $element->render();
        }

        return $form.'</form>';
    }

    public function addElement(Renderable $element): void
    {
        $this->elements[] = $element;
    }
}
