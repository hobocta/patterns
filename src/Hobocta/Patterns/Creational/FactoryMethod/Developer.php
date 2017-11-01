<?php

namespace Hobocta\Patterns\Creational\FactoryMethod;

/**
 * Class Developer
 * @package Hobocta\Patterns\Creational\FactoryMethod
 */
class Developer implements InterviewerInterface
{
    public function askQuestions()
    {
        echo 'Asking about design patterns<br>';
    }
}
