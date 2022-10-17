<?php

namespace App\FactoryMethod;

class CommunityExecutive implements Interviewer
{
    public function askQuestions(): string
    {
        return 'Asking about community building';
    }
}
