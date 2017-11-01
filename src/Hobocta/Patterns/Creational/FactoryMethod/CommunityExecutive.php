<?php

namespace Hobocta\Patterns\Creational\FactoryMethod;

/**
 * Class CommunityExecutive
 * @package Hobocta\Patterns\Creational\FactoryMethod
 */
class CommunityExecutive implements InterviewerInterface
{
    public function askQuestions()
    {
        echo 'Asking about community building<br>';
    }
}
