<?php

namespace Hobocta\Patterns\FactoryMethod;

/**
 * Class DevelopmentManager
 * @package Hobocta\Patterns\FactoryMethod
 */
class DevelopmentManager extends HiringManager
{
    /**
     * @return InterviewerInterface
     */
    public function makeInterviewer(): InterviewerInterface
    {
        return new Developer();
    }
}
