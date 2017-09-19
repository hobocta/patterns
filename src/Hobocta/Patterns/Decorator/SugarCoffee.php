<?php
namespace Hobocta\Patterns\Decorator;

class SugarCoffee implements CoffeeInterface
{
    var $coffee;

    public function __construct(CoffeeInterface $coffee)
    {
        $this->coffee = $coffee;
    }

    public function getCost()
    {
        return $this->coffee->getCost() + 5;
    }
}
