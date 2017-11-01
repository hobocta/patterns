<?php

namespace Hobocta\Patterns\Creational\Builder;

/**
 * Class BurgerBuilder
 * @package Hobocta\Patterns\Creational\Builder
 */
class BurgerBuilder
{
    /**
     * @var
     */
    public $size;

    /**
     * @var bool
     */
    public $cheese = false;

    /**
     * @var bool
     */
    public $pepperoni = false;

    /**
     * @var bool
     */
    public $lettuce = false;

    /**
     * @var bool
     */
    public $tomato = false;

    /**
     * BurgerBuilder constructor.
     * @param $size
     */
    public function __construct($size)
    {
        $this->size = $size;
    }

    /**
     * @return BurgerBuilder
     */
    public function addCheese(): self
    {
        $this->cheese = true;

        return $this;
    }

    /**
     * @return BurgerBuilder
     */
    public function addPepperoni(): self
    {
        $this->pepperoni = true;

        return $this;
    }

    /**
     * @return BurgerBuilder
     */
    public function addLettuce(): self
    {
        $this->lettuce = true;

        return $this;
    }

    /**
     * @return BurgerBuilder
     */
    public function addTomato(): self
    {
        $this->tomato = true;

        return $this;
    }

    /**
     * @return Burger
     */
    public function build(): Burger
    {
        return new Burger($this);
    }
}
