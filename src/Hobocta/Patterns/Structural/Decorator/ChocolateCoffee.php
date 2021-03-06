<?php

namespace Hobocta\Patterns\Structural\Decorator;

/**
 * Class ChocolateCoffee
 * @package Hobocta\Patterns\Structural\Decorator
 */
class ChocolateCoffee implements CoffeeInterface
{
    /**
     * @var CoffeeInterface
     */
    var $coffee;

    /**
     * ChocolateCoffee constructor.
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
        return $this->coffee->getCost() + 15;
    }
}
