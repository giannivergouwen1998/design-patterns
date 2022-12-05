<?php

namespace Tests;

use App\Composite\Form;
use App\Composite\InputElement;
use App\Composite\Renderable;
use App\Composite\TextElement;
use PHPUnit\Framework\TestCase;
use function PHPUnit\Framework\assertInstanceOf;
use function PHPUnit\Framework\assertSame;

final class CompositeTest extends TestCase
{
    /** @test */
    public function it_can_add_an_element(): void
    {
        $form = new Form();
        $form->addElement(new TextElement('Email:'));
        $form->addElement(new InputElement());

        $embed = new Form();
        $embed->addElement(new TextElement('Password:'));
        $embed->addElement(new InputElement());
        $form->addElement($embed);

        assertSame(
            '<form>Email:<input type="text"/><form>Password:<input type="text"/></form></form>',
            $form->render()
        );

    }
}