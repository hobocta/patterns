<?php

namespace Hobocta\Patterns\Structural\Adapter;

/**
 * Class WildDogAdapter
 * @package Hobocta\Patterns\Structural\Adapter
 */
class WildDogAdapter implements Lion
{
    /**
     * @var WildDog
     */
    protected $dog;

    /**
     * WildDogAdapter constructor.
     * @param WildDog $dog
     */
    public function __construct(WildDog $dog)
    {
        $this->dog = $dog;
    }

    /**
     * @return string
     */
    public function roar(): string
    {
        return $this->dog->bark();
    }
}
