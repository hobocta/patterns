<?php

namespace Hobocta\Patterns\Structural\Decorator;

/**
 * Class CinnamonCoffee
 * @package Hobocta\Patterns\Structural\Decorator
 */
class CinnamonCoffee implements CoffeeInterface
{
    /**
     * @var CoffeeInterface
     */
    var $coffee;

    /**
     * CinnamonCoffee constructor.
     * @param CoffeeInterface $coffee
     */
    public function __construct(CoffeeInterface $coffee)
    {
        $this->coffee = $coffee;
    }

    /**
     * @return float
     */
    public function getCost(): float
    {
        return $this->coffee->getCost() + 5;
    }
}
