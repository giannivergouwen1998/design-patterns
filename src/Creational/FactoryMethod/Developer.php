<?php

namespace App\Creational\FactoryMethod;

class Developer implements Interviewer
{
    public function askQuestions(): string
    {
        return 'Asking about design patterns!';
    }
}
