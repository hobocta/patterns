<?php

namespace Hobocta\Patterns\Creational\FactoryMethod;

/**
 * Class HiringManager
 * @package Hobocta\Patterns\Creational\FactoryMethod
 */
abstract class HiringManager
{
    /**
     * @return InterviewerInterface
     */
    abstract public function makeInterviewer(): InterviewerInterface;

    public function takeInterview()
    {
        $interviewer = $this->makeInterviewer();
        $interviewer->askQuestions();
    }
}
