<?php

namespace Hobocta\Patterns\Decorator;

/**
 * Class MilkCoffee
 * @package Hobocta\Patterns\Decorator
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
     * @return mixed
     */
    public function getCost()
    {
        return $this->coffee->getCost() + 10;
    }
}
