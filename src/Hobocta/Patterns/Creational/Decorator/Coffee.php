<?php

namespace Hobocta\Patterns\Creational\Decorator;

/**
 * Class Coffee
 * @package Hobocta\Patterns\Creational\Decorator
 */
class Coffee implements CoffeeInterface
{
    /**
     * @return float
     */
    public function getCost(): float
    {
        return 50;
    }
}
