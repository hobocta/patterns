<?php

namespace Hobocta\Patterns\Builder;

/**
 * Class Burger
 * @package Hobocta\Patterns\Builder
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
