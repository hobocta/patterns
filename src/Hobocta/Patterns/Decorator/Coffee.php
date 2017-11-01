<?php

namespace Hobocta\Patterns\Decorator;

/**
 * Class Coffee
 * @package Hobocta\Patterns\Decorator
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
