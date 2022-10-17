<?php

namespace App\FactoryMethod;

abstract class HiringManager
{
    abstract protected function makeInterviewer(): Interviewer;

    public function takeInterview(): string
    {
        $interviewer = $this->makeInterviewer();
        return $interviewer->askQuestions();
    }
}
