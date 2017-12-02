<?php

namespace Hobocta\Patterns\Structural\Decorator;

/**
 * Class MilkCoffee
 * @package Hobocta\Patterns\Structural\Decorator
 */
class MilkCoffee implements CoffeeInterface
{
    /**
     * @var CoffeeInterface
     */
    var $coffee;

    /**
     * MilkCoffee constructor.
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
        return $this->coffee->getCost() + 10;
    }
}
