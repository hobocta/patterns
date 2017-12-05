<?php

namespace Hobocta\Patterns\Behavioral\Visitor;

/**
 * Class Dolphin
 * @package Hobocta\Patterns\Behavioral\Visitor
 */
class Dolphin implements Animal
{
    public function speak()
    {
        echo 'Tuut tuttu tuutt!' . PHP_EOL;
    }

    /**
     * @param AnimalOperation $operation
     */
    public function accept(AnimalOperation $operation)
    {
        $operation->visitDolphin($this);
    }
}
