<?php

namespace Tests;

use App\Composite\Form;
use App\Composite\InputElement;
use App\Composite\Renderable;
use App\Composite\TextElement;
use PHPUnit\Framework\TestCase;
use function PHPUnit\Framework\assertSame;

final class CompositeTest extends TestCase
{
    /** @test */
    public function it_can_add_nested_elements(): void
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

    /** @test */
    public function it_can_add_elements(): void
    {
        $form = new Form();
        $form->addElement(new TextElement('Email:'));
        $form->addElement(new InputElement());

        $form->addElement(new TextElement('Password:'));
        $form->addElement(new InputElement());

        assertSame(
            '<form>Email:<input type="text"/>Password:<input type="text"/></form>',
            $form->render()
        );
    }

    /** @test */
    public function is_string(): void
    {
        $form = new Form();
        $form->addElement(new TextElement('Email:'));
        $form->addElement(new InputElement());

        self::assertIsString($form->render());
    }
}