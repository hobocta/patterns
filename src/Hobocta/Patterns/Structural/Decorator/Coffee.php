<?php

namespace Hobocta\Patterns\Structural\Decorator;

/**
 * Class Coffee
 * @package Hobocta\Patterns\Structural\Decorator
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
