<?php

namespace Hobocta\Patterns\FactoryMethod;

/**
 * Class MarketingManager
 * @package Hobocta\Patterns\FactoryMethod
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
