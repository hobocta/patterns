<?php
namespace Hobocta\Patterns\Decorator;

class Coffee implements CoffeeInterface
{
    public function getCost()
    {
        return 50;
    }
}
