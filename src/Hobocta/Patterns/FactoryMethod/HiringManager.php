<?php

namespace Hobocta\Patterns\FactoryMethod;

/**
 * Class HiringManager
 * @package Hobocta\Patterns\FactoryMethod
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
