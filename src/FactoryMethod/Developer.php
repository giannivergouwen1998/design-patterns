<?php

namespace App\FactoryMethod;

class Developer implements Interviewer
{
    public function askQuestions(): string
    {
        return 'Asking about design patterns!';
    }
}
