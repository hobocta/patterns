<?php

namespace Hobocta\Patterns\Behavioral\Visitor;

/**
 * Interface Animal
 * @package Hobocta\Patterns\Behavioral\Visitor
 */
interface Animal
{
    /**
     * @param AnimalOperation $operation
     */
    public function accept(AnimalOperation $operation);
}
