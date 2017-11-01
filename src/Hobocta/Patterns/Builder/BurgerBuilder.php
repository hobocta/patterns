<?php

namespace Hobocta\Patterns\Builder;

/**
 * Class BurgerBuilder
 * @package Hobocta\Patterns\Builder
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
     * @return $this
     */
    public function addCheese()
    {
        $this->cheese = true;

        return $this;
    }

    /**
     * @return $this
     */
    public function addPepperoni()
    {
        $this->pepperoni = true;

        return $this;
    }

    /**
     * @return $this
     */
    public function addLettuce()
    {
        $this->lettuce = true;

        return $this;
    }

    /**
     * @return $this
     */
    public function addTomato()
    {
        $this->tomato = true;

        return $this;
    }

    /**
     * @return Burger
     */
    public function build()
    {
        return new Burger($this);
    }
}
