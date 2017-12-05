<?php

namespace Hobocta\Patterns\Behavioral\Visitor;

/**
 * Class Lion
 * @package Hobocta\Patterns\Behavioral\Visitor
 */
class Lion implements Animal
{
    public function roar()
    {
        echo 'Roar!' . PHP_EOL;
    }

    /**
     * @param AnimalOperation $operation
     */
    public function accept(AnimalOperation $operation)
    {
        $operation->visitLion($this);
    }
}
