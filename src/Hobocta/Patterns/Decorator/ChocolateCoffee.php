<?php

namespace Hobocta\Patterns\Decorator;

/**
 * Class ChocolateCoffee
 * @package Hobocta\Patterns\Decorator
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
     * @return mixed
     */
    public function getCost()
    {
        return $this->coffee->getCost() + 15;
    }
}
