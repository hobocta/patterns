<?php

namespace Hobocta\Patterns\Creational\FactoryMethod;

/**
 * Class MarketingManager
 * @package Hobocta\Patterns\Creational\FactoryMethod
 */
class MarketingManager extends HiringManager
{
    /**
     * @return InterviewerInterface
     */
    public function makeInterviewer(): InterviewerInterface
    {
        return new CommunityExecutive();
    }
}
