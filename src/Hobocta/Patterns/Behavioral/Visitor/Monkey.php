<?php

namespace Hobocta\Patterns\Behavioral\Visitor;

/**
 * Class Monkey
 * @package Hobocta\Patterns\Behavioral\Visitor
 */
class Monkey implements Animal
{
    public function shout()
    {
        echo 'Ooh oo aa aa!' . PHP_EOL;
    }

    /**
     * @param AnimalOperation $operation
     */
    public function accept(AnimalOperation $operation)
    {
        $operation->visitMonkey($this);
    }
}
