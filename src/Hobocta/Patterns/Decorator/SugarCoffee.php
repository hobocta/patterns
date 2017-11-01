<?php

namespace Hobocta\Patterns\Decorator;

/**
 * Class SugarCoffee
 * @package Hobocta\Patterns\Decorator
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
     * @return mixed
     */
    public function getCost()
    {
        return $this->coffee->getCost() + 5;
    }
}
