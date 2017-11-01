<?php

namespace Hobocta\Patterns\Decorator;

/**
 * Class Coffee
 * @package Hobocta\Patterns\Decorator
 */
class Coffee implements CoffeeInterface
{
    /**
     * @return int
     */
    public function getCost()
    {
        return 50;
    }
}
