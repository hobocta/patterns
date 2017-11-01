<?php

namespace Hobocta\Patterns\Creational\Decorator;

/**
 * Interface CoffeeInterface
 * @package Hobocta\Patterns\Creational\Decorator
 */
interface CoffeeInterface
{
    /**
     * @return float
     */
    public function getCost(): float;
}
