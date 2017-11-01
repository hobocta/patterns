<?php

namespace Hobocta\Patterns\FactoryMethod;

/**
 * Class Developer
 * @package Hobocta\Patterns\FactoryMethod
 */
class Developer implements InterviewerInterface
{
    public function askQuestions()
    {
        echo 'Asking about design patterns<br>';
    }
}
