<?php

namespace App\Creational\FactoryMethod;

class CommunityExecutive implements Interviewer
{
    public function askQuestions(): string
    {
        return 'Asking about community building';
    }
}
