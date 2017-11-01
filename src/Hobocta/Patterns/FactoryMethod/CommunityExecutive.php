<?php

namespace Hobocta\Patterns\FactoryMethod;

/**
 * Class CommunityExecutive
 * @package Hobocta\Patterns\FactoryMethod
 */
class CommunityExecutive implements InterviewerInterface
{
    public function askQuestions()
    {
        echo 'Asking about community building<br>';
    }
}
