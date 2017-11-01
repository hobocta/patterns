<?php

namespace Hobocta\Patterns\Creational\Builder;

/**
 * Class Burger
 * @package Hobocta\Patterns\Creational\Builder
 */
class Burger
{
    /**
     * @var
     */
    protected $size;

    /**
     * @var bool
     */
    protected $cheese = false;

    /**
     * @var bool
     */
    protected $pepperoni = false;

    /**
     * @var bool
     */
    protected $lettuce = false;

    /**
     * @var bool
     */
    protected $tomato = false;

    /**
     * Burger constructor.
     * @param BurgerBuilder $builder
     */
    public function __construct(BurgerBuilder $builder)
    {
        $this->size = $builder->size;
        $this->cheese = $builder->cheese;
        $this->pepperoni = $builder->pepperoni;
        $this->lettuce = $builder->lettuce;
        $this->tomato = $builder->tomato;
    }
}
