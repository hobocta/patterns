<?php

namespace Hobocta\Patterns\Decorator;

/**
 * Class SyrupCoffee
 * @package Hobocta\Patterns\Decorator
 */
class SyrupCoffee implements CoffeeInterface
{
    /**
     * @var CoffeeInterface
     */
    var $coffee;

    /**
     * SyrupCoffee constructor.
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
