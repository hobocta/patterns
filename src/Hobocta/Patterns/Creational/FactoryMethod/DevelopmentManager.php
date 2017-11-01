<?php

namespace Hobocta\Patterns\Creational\FactoryMethod;

/**
 * Class DevelopmentManager
 * @package Hobocta\Patterns\Creational\FactoryMethod
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
