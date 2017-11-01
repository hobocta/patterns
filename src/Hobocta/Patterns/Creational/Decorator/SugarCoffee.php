<?php

namespace Hobocta\Patterns\Creational\Decorator;

/**
 * Class SugarCoffee
 * @package Hobocta\Patterns\Creational\Decorator
 */
class SugarCoffee implements CoffeeInterface
{
    /**
     * @var CoffeeInterface
     */
    var $coffee;

    /**
     * SugarCoffee constructor.
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
